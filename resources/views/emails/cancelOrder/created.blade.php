<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Canceled</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #333; font-weight: bold;">Order Canceled Notification</h1>

        <p style="color: #666; font-weight: 600;">Penyewa telah membatalkan pesanannya. Berikut detail pesanannya:</p>

        <ul style="list-style-type: none; padding: 0;">
            <li style="margin-bottom: 10px;">Nama: {{ $cancelDetails['user_name'] }}</li>
            <li style="margin-bottom: 10px;">No HP: {{ $cancelDetails['user_phone'] }}</li>
            <li style="margin-bottom: 10px;">Lapangan: {{ $cancelDetails['lapangan_name'] }}</li>
            <li style="margin-bottom: 10px;">Alamat: {{ $cancelDetails['alamat'] }}</li>
            <li style="margin-bottom: 10px;">Tanggal Pesanan: {{ $cancelDetails['tanggal_pesanan'] }}</li>
            <li style="margin-bottom: 10px;">Status: {{ $cancelDetails['status'] }}</li>
        </ul>
    </div>
</body>

</html>
