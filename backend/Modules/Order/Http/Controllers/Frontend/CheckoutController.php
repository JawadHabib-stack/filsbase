<?php

namespace Modules\Order\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Order\Models\Order;
use Modules\Order\Models\OrderItem;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Modules\Payment\Models\PaymentMethod;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('frontend.products.index')->with('warning', 'Your cart is empty.');
        }

        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        $countries = [
            "AF" => "Afghanistan", "AX" => "Aland Islands", "AL" => "Albania", "DZ" => "Algeria", "AS" => "American Samoa",
            "AD" => "Andorra", "AO" => "Angola", "AI" => "Anguilla", "AQ" => "Antarctica", "AG" => "Antigua and Barbuda",
            "AR" => "Argentina", "AM" => "Armenia", "AW" => "Aruba", "AU" => "Australia", "AT" => "Austria",
            "AZ" => "Azerbaijan", "BS" => "Bahamas", "BH" => "Bahrain", "BD" => "Bangladesh", "BB" => "Barbados",
            "BY" => "Belarus", "BE" => "Belgium", "BZ" => "Belize", "BJ" => "Benin", "BM" => "Bermuda",
            "BT" => "Bhutan", "BO" => "Bolivia", "BQ" => "Bonaire, Sint Eustatius and Saba", "BA" => "Bosnia and Herzegovina", "BW" => "Botswana",
            "BV" => "Bouvet Island", "BR" => "Brazil", "IO" => "British Indian Ocean Territory", "BN" => "Brunei Darussalam", "BG" => "Bulgaria",
            "BF" => "Burkina Faso", "BI" => "Burundi", "KH" => "Cambodia", "CM" => "Cameroon", "CA" => "Canada",
            "CV" => "Cape Verde", "KY" => "Cayman Islands", "CF" => "Central African Republic", "TD" => "Chad", "CL" => "Chile",
            "CN" => "China", "CX" => "Christmas Island", "CC" => "Cocos (Keeling) Islands", "CO" => "Colombia", "KM" => "Comoros",
            "CG" => "Congo", "CD" => "Congo, Democratic Republic of the Congo", "CK" => "Cook Islands", "CR" => "Costa Rica", "CI" => "Cote D'Ivoire",
            "HR" => "Croatia", "CU" => "Cuba", "CW" => "Curacao", "CY" => "Cyprus", "CZ" => "Czech Republic",
            "DK" => "Denmark", "DJ" => "Djibouti", "DM" => "Dominica", "DO" => "Dominican Republic", "EC" => "Ecuador",
            "EG" => "Egypt", "SV" => "El Salvador", "GQ" => "Equatorial Guinea", "ER" => "Eritrea", "EE" => "Estonia",
            "ET" => "Ethiopia", "FK" => "Falkland Islands (Malvinas)", "FO" => "Faroe Islands", "FJ" => "Fiji", "FI" => "Finland",
            "FR" => "France", "GF" => "French Guiana", "PF" => "French Polynesia", "TF" => "French Southern Territories", "GA" => "Gabon",
            "GM" => "Gambia", "GE" => "Georgia", "DE" => "Germany", "GH" => "Ghana", "GI" => "Gibraltar",
            "GR" => "Greece", "GL" => "Greenland", "GD" => "Grenada", "GP" => "Guadeloupe", "GU" => "Guam",
            "GT" => "Guatemala", "GG" => "Guernsey", "GN" => "Guinea", "GW" => "Guinea-Bissau", "GY" => "Guyana",
            "HT" => "Haiti", "HM" => "Heard Island and Mcdonald Islands", "VA" => "Holy See (Vatican City State)", "HN" => "Honduras", "HK" => "Hong Kong",
            "HU" => "Hungary", "IS" => "Iceland", "IN" => "India", "ID" => "Indonesia", "IR" => "Iran, Islamic Republic of",
            "IQ" => "Iraq", "IE" => "Ireland", "IM" => "Isle of Man", "IL" => "Israel", "IT" => "Italy",
            "JM" => "Jamaica", "JP" => "Japan", "JE" => "Jersey", "JO" => "Jordan", "KZ" => "Kazakhstan",
            "KE" => "Kenya", "KI" => "Kiribati", "KP" => "Korea, Democratic People's Republic of", "KR" => "Korea, Republic of", "XK" => "Kosovo",
            "KW" => "Kuwait", "KG" => "Kyrgyzstan", "LA" => "Lao People's Democratic Republic", "LV" => "Latvia", "LB" => "Lebanon",
            "LS" => "Lesotho", "LR" => "Liberia", "LY" => "Libyan Arab Jamahiriya", "LI" => "Liechtenstein", "LT" => "Lithuania",
            "LU" => "Luxembourg", "MO" => "Macao", "MK" => "Macedonia, the Former Yugoslav Republic of", "MG" => "Madagascar", "MW" => "Malawi",
            "MY" => "Malaysia", "MV" => "Maldives", "ML" => "Mali", "MT" => "Malta", "MH" => "Marshall Islands",
            "MQ" => "Martinique", "MR" => "Mauritania", "MU" => "Mauritius", "YT" => "Mayotte", "MX" => "Mexico",
            "FM" => "Micronesia, Federated States of", "MD" => "Moldova, Republic of", "MC" => "Monaco", "MN" => "Mongolia", "ME" => "Montenegro",
            "MS" => "Montserrat", "MA" => "Morocco", "MZ" => "Mozambique", "MM" => "Myanmar", "NA" => "Namibia",
            "NR" => "Nauru", "NP" => "Nepal", "NL" => "Netherlands", "AN" => "Netherlands Antilles", "NC" => "New Caledonia",
            "NZ" => "New Zealand", "NI" => "Nicaragua", "NE" => "Niger", "NG" => "Nigeria", "NU" => "Niue",
            "NF" => "Norfolk Island", "MP" => "Northern Mariana Islands", "NO" => "Norway", "OM" => "Oman", "PK" => "Pakistan",
            "PW" => "Palau", "PS" => "Palestinian Territory, Occupied", "PA" => "Panama", "PG" => "Papua New Guinea", "PY" => "Paraguay",
            "PE" => "Peru", "PH" => "Philippines", "PN" => "Pitcairn", "PL" => "Poland", "PT" => "Portugal",
            "PR" => "Puerto Rico", "QA" => "Qatar", "RE" => "Reunion", "RO" => "Romania", "RU" => "Russian Federation",
            "RW" => "Rwanda", "BL" => "Saint Barthelemy", "SH" => "Saint Helena", "KN" => "Saint Kitts and Nevis", "LC" => "Saint Lucia",
            "MF" => "Saint Martin", "PM" => "Saint Pierre and Miquelon", "VC" => "Saint Vincent and the Grenadines", "WS" => "Samoa", "SM" => "San Marino",
            "ST" => "Sao Tome and Principe", "SA" => "Saudi Arabia", "SN" => "Senegal", "RS" => "Serbia", "SC" => "Seychelles",
            "SL" => "Sierra Leone", "SG" => "Singapore", "SX" => "Sint Maarten", "SK" => "Slovakia", "SI" => "Slovenia",
            "SB" => "Solomon Islands", "SO" => "Somalia", "ZA" => "South Africa", "GS" => "South Georgia and the South Sandwich Islands", "SS" => "South Sudan",
            "ES" => "Spain", "LK" => "Sri Lanka", "SD" => "Sudan", "SR" => "Suriname", "SJ" => "Svalbard and Jan Mayen",
            "SZ" => "Swaziland", "SE" => "Sweden", "CH" => "Switzerland", "SY" => "Syrian Arab Republic", "TW" => "Taiwan, Province of China",
            "TJ" => "Tajikistan", "TZ" => "Tanzania, United Republic of", "TH" => "Thailand", "TL" => "Timor-Leste", "TG" => "Togo",
            "TK" => "Tokelau", "TO" => "Tonga", "TT" => "Trinidad and Tobago", "TN" => "Tunisia", "TR" => "Turkey",
            "TM" => "Turkmenistan", "TC" => "Turks and Caicos Islands", "TV" => "Tuvalu", "UG" => "Uganda", "UA" => "Ukraine",
            "AE" => "United Arab Emirates", "GB" => "United Kingdom", "US" => "United States", "UM" => "United States Minor Outlying Islands", "UY" => "Uruguay",
            "UZ" => "Uzbekistan", "VU" => "Vanuatu", "VE" => "Venezuela", "VN" => "Viet Nam", "VG" => "Virgin Islands, British",
            "VI" => "Virgin Islands, U.s.", "WF" => "Wallis and Futuna", "EH" => "Western Sahara", "YE" => "Yemen", "ZM" => "Zambia",
            "ZW" => "Zimbabwe"
        ];

        $payment_methods = PaymentMethod::where('status', 'Enabled')->orderBy('order')->get();

        return view('order::frontend.checkout', compact('cart', 'total', 'payment_methods', 'countries'));
    }

    public function store(Request $request)
    {
        $cart = session()->get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('frontend.products.index')->with('error', 'Your cart is empty.');
        }

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'payment_method' => 'required|string',
        ]);

        try {
            DB::beginTransaction();

            $total = array_reduce($cart, function ($carry, $item) {
                return $carry + ($item['price'] * $item['quantity']);
            }, 0);

            $order = Order::create([
                'user_id' => auth()->id(),
                'order_number' => 'ORD-' . strtoupper(Str::random(10)),
                'total_amount' => $total,
                'status' => 'Pending',
                'payment_status' => $request->payment_intent_id ? 'Paid' : 'Pending',
                'payment_method' => $request->payment_method,
                'payment_id' => $request->payment_intent_id ?? null,
                'billing_details' => $request->only(['first_name', 'last_name', 'email', 'phone', 'address', 'city', 'state', 'country']),
                'shipping_details' => $request->only(['first_name', 'last_name', 'email', 'phone', 'address', 'city', 'state', 'country']),
                'notes' => $request->notes,
            ]);

            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'product_name' => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'total' => $item['price'] * $item['quantity'],
                ]);
            }

            DB::commit();

            session()->forget('cart');

            return redirect()->route('frontend.checkout.success', $order->order_number)->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Something went wrong while placing your order. ' . $e->getMessage());
        }
    }

    public function success($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->firstOrFail();
        return view('order::frontend.success', compact('order'));
    }
}
