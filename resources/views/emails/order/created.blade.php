<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Created</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #333; font-weight: bold;">Order Created Notification</h1>

        <p style="color: #666; font-weight: 600;">Terima kasih telah melakukan pemesanan. Berikut detail pesanannya:</p>

        <ul style="list-style-type: none; padding: 0;">
            <li style="margin-bottom: 10px;">Nama: {{ $orderDetails['user_name'] }}</li>
            <li style="margin-bottom: 10px;">No HP: {{ $orderDetails['user_phone'] }}</li>
            <li style="margin-bottom: 10px;">Lapangan: {{ $orderDetails['lapangan_name'] }}</li>
            <li style="margin-bottom: 10px;">Tanggal Pesanan: {{ $orderDetails['tanggal_pesanan'] }}</li>
            <li style="margin-bottom: 10px;">Total Jam: {{ $orderDetails['total_jam'] }}</li>
            <li style="margin-bottom: 10px;">Total Harga: {{ $orderDetails['total_harga'] }}</li>
        </ul>

        <p style="color: #666;">Kontak kami jika ada pertanyaan lebih lanjut.</p>
    </div>
</body>

</html>
