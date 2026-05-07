<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<style>
  body { margin:0; padding:0; background:#f4f6fb; font-family: 'Segoe UI', Arial, sans-serif; }
  .wrap { max-width:600px; margin:40px auto; background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,0.08); }
  .header { padding:36px 40px; text-align:center; }
  .header h1 { color:#fff; margin:0; font-size:24px; font-weight:700; }
  .header p { color:rgba(255,255,255,0.85); margin:8px 0 0; font-size:14px; }
  .body { padding:36px 40px; }
  .greeting { font-size:18px; font-weight:600; color:#1a1a2e; margin-bottom:8px; }
  .text { color:#555; font-size:14px; line-height:1.7; }
  .status-banner { border-radius:10px; padding:20px 24px; text-align:center; margin:24px 0; }
  .status-label { font-size:13px; font-weight:600; text-transform:uppercase; letter-spacing:1px; margin-bottom:6px; }
  .status-value { font-size:28px; font-weight:800; }
  .order-box { background:#f8faff; border:1px solid #e3eaff; border-radius:8px; padding:20px 24px; margin:20px 0; }
  .order-box table { width:100%; border-collapse:collapse; font-size:13.5px; }
  .order-box td { padding:8px 0; color:#444; border-bottom:1px solid #eee; }
  .order-box td:last-child { text-align:right; font-weight:600; color:#1565c0; }
  .order-box tr:last-child td { border-bottom:none; }
  .btn { display:inline-block; background:#1565c0; color:#fff !important; padding:12px 28px; border-radius:8px; text-decoration:none; font-weight:600; font-size:14px; margin-top:20px; }
  .footer { background:#f8faff; padding:24px 40px; text-align:center; border-top:1px solid #eee; }
  .footer p { color:#aaa; font-size:12px; margin:4px 0; }
</style>
</head>
<body>
<div class="wrap">
  @php
    $statusConfig = match($order->status) {
      'Completed'  => ['bg'=>'linear-gradient(135deg,#2e7d32,#66bb6a)', 'emoji'=>'🎉'],
      'Processing' => ['bg'=>'linear-gradient(135deg,#1565c0,#42a5f5)', 'emoji'=>'⚙️'],
      'Shipped'    => ['bg'=>'linear-gradient(135deg,#6a1b9a,#ab47bc)',  'emoji'=>'🚚'],
      'Cancelled'  => ['bg'=>'linear-gradient(135deg,#c62828,#ef5350)', 'emoji'=>'❌'],
      default      => ['bg'=>'linear-gradient(135deg,#555,#888)',        'emoji'=>'📦'],
    };
    $bd = is_array($order->billing_details) ? $order->billing_details : json_decode($order->billing_details, true);
  @endphp

  <div class="header" style="background:{{ $statusConfig['bg'] }};">
    <h1>{{ $statusConfig['emoji'] }} Order Status Update</h1>
    <p>Your order {{ $order->order_number }} has been updated</p>
  </div>

  <div class="body">
    <p class="greeting">Hi {{ $bd['first_name'] ?? 'Customer' }},</p>
    <p class="text">Your order status has been updated from <strong>{{ $previousStatus }}</strong> to:</p>

    <div class="status-banner" style="background:{{ $statusConfig['bg'] }};">
      <div class="status-label" style="color:rgba(255,255,255,0.8);">Current Status</div>
      <div class="status-value" style="color:#fff;">{{ $statusConfig['emoji'] }} {{ $order->status }}</div>
    </div>

    <div class="order-box">
      <table>
        <tr><td>Order Number</td><td>{{ $order->order_number }}</td></tr>
        <tr><td>Order Date</td><td>{{ $order->created_at->format('M d, Y') }}</td></tr>
        <tr><td>Total Amount</td><td>${{ number_format($order->total_amount, 2) }}</td></tr>
        <tr><td>Payment Method</td><td>{{ $order->payment_method }}</td></tr>
        <tr><td>Payment Status</td><td>{{ $order->payment_status }}</td></tr>
      </table>
    </div>

    @if($order->status === 'Cancelled')
    <p class="text" style="color:#c62828;">If you have questions about this cancellation, please contact our support team.</p>
    @elseif($order->status === 'Completed')
    <p class="text">Your order has been completed. Thank you for your business! We hope to serve you again.</p>
    @elseif($order->status === 'Shipped')
    <p class="text">Your order is on its way! You'll receive it shortly.</p>
    @endif

    <center>
      <a href="{{ url('/my-orders/'.$order->order_number) }}" class="btn">View Order Details</a>
    </center>
  </div>

  <div class="footer">
    <p>Questions? Reply to this email or <a href="{{ url('/contact') }}">contact us</a>.</p>
    <p>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
  </div>
</div>
</body>
</html>
