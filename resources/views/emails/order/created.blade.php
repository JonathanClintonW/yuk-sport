<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Created</title>
</head>
<body>
    <h1>Order Created Notification</h1>
    
    <p>Terima kasih telah melakukan pemesanan. Berikut detail pesanannya:</p>
    
    <ul>
        <li>Nama: {{ $orderDetails['user_name'] }}</li>
        <li>No HP: {{ $orderDetails['user_phone'] }}</li>
        <li>Lapangan: {{ $orderDetails['lapangan_name'] }}</li>
        <li>Tanggal Pesanan: {{ $orderDetails['tanggal_pesanan'] }}</li>
        <li>Total Jam: {{ $orderDetails['total_jam'] }}</li>
        <li>Total Harga: {{ $orderDetails['total_harga'] }}</li>
    </ul>
    
    <p>Kontak kami jika ada pertanyaan lebih lanjut.</p>
</body>
</html>
