<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<style>
  body { margin:0; padding:0; background:#f4f6fb; font-family: 'Segoe UI', Arial, sans-serif; }
  .wrap { max-width:600px; margin:40px auto; background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,0.08); }
  .header { background:linear-gradient(135deg,#1565c0,#42a5f5); padding:36px 40px; text-align:center; }
  .header h1 { color:#fff; margin:0; font-size:26px; font-weight:700; }
  .header p { color:rgba(255,255,255,0.85); margin:8px 0 0; font-size:14px; }
  .body { padding:36px 40px; }
  .greeting { font-size:18px; font-weight:600; color:#1a1a2e; margin-bottom:8px; }
  .text { color:#555; font-size:14px; line-height:1.7; }
  .order-box { background:#f8faff; border:1px solid #e3eaff; border-radius:8px; padding:20px 24px; margin:24px 0; }
  .order-box table { width:100%; border-collapse:collapse; font-size:13.5px; }
  .order-box td { padding:8px 0; color:#444; border-bottom:1px solid #eee; }
  .order-box td:last-child { text-align:right; font-weight:600; color:#1565c0; }
  .order-box tr:last-child td { border-bottom:none; }
  .items-table { width:100%; border-collapse:collapse; font-size:13px; margin-top:20px; }
  .items-table th { background:#f0f4ff; color:#555; padding:10px 12px; text-align:left; font-weight:600; font-size:12px; text-transform:uppercase; }
  .items-table td { padding:10px 12px; border-bottom:1px solid #f0f0f0; color:#444; }
  .items-table td:last-child { text-align:right; font-weight:600; }
  .total-row { background:#f8faff; font-weight:700; font-size:15px; }
  .total-row td { padding:12px; color:#1565c0 !important; }
  .badge { display:inline-block; padding:4px 12px; border-radius:20px; font-size:12px; font-weight:600; }
  .badge-pending { background:#fff8e1; color:#f57c00; }
  .badge-paid { background:#e8f5e9; color:#2e7d32; }
  .btn { display:inline-block; background:#1565c0; color:#fff !important; padding:12px 28px; border-radius:8px; text-decoration:none; font-weight:600; font-size:14px; margin-top:20px; }
  .footer { background:#f8faff; padding:24px 40px; text-align:center; border-top:1px solid #eee; }
  .footer p { color:#aaa; font-size:12px; margin:4px 0; }
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <h1>✅ Order Confirmed!</h1>
    <p>Thank you for your purchase</p>
  </div>
  <div class="body">
    @php $bd = is_array($order->billing_details) ? $order->billing_details : json_decode($order->billing_details, true); @endphp
    <p class="greeting">Hi {{ $bd['first_name'] ?? 'Customer' }},</p>
    <p class="text">Your order has been received and is being processed. Here's a summary:</p>

    <div class="order-box">
      <table>
        <tr><td>Order Number</td><td>{{ $order->order_number }}</td></tr>
        <tr><td>Date</td><td>{{ $order->created_at->format('M d, Y h:i A') }}</td></tr>
        <tr><td>Payment Method</td><td>{{ $order->payment_method }}</td></tr>
        <tr><td>Order Status</td><td><span class="badge badge-pending">{{ $order->status }}</span></td></tr>
        <tr><td>Payment Status</td><td><span class="badge badge-{{ strtolower($order->payment_status) == 'paid' ? 'paid' : 'pending' }}">{{ $order->payment_status }}</span></td></tr>
      </table>
    </div>

    <table class="items-table">
      <thead>
        <tr><th>Product</th><th>Qty</th><th>Price</th><th>Total</th></tr>
      </thead>
      <tbody>
        @foreach($order->items as $item)
        <tr>
          <td>{{ $item->product_name }}</td>
          <td>{{ $item->quantity }}</td>
          <td>${{ number_format($item->price, 2) }}</td>
          <td>${{ number_format($item->total, 2) }}</td>
        </tr>
        @endforeach
        <tr class="total-row">
          <td colspan="3">Total Amount</td>
          <td>${{ number_format($order->total_amount, 2) }}</td>
        </tr>
      </tbody>
    </table>

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
