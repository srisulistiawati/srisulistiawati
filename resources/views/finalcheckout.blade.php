<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Berhasil</title>
    <!-- Gunakan versi terbaru Bootstrap jika memungkinkan -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .confirmation-message {
            text-align: center;
            margin-top: 50px;
        }
        .confirmation-message h1 {
            font-size: 2.5rem;
            color: #050505;
        }
        .order-summary {
            margin-top: 30px;
        }
        .contact-info {
            margin-top: 30px;
        }
         header {
            background-image: linear-gradient(to right,rgb(227,152,108),rgb(227,152,108));
            color: white;
            padding: 35px;
        }
        footer {
            background-color: rgb(227,152,108);
            padding: 30px 0;
            margin-top: 25px;
            border-top: 5px solid rgb(227,152,108);
        }

        .footer-text {
            color:white;
            font-size: 1rem;
        }
    </style>
</head>
<body>
<form action="/finalcheckout">
    <header class="text-center">
        <div class="container">
    </header>
    <div class="container">
        <div class="confirmation-message">
            <h1>Checkout Berhasil!</h1>
            <p class="lead">Terima kasih telah berbelanja dengan kami. Pesanan Anda telah diproses.</p>
        </div>

        <div class="order-summary">
            <h4>Ringkasan Pesanan</h4>
            <ul class="list-group">
                <li class="list-group-item">Nama<span class="float-right">$sri</span></li>
                <li class="list-group-item">Harga Barang<span class="float-right">$30000</span></li>
                <li class="list-group-item">Ongkos Pengiriman<span class="float-right">$50000</span></li>
                <li class="list-group-item list-group-item-secondary">Total <span class="float-right">$35000</span></li>
            </ul>
        </div>

        <div class="contact-info">
            <h4>Informasi Kontak</h4>
            <p>Jika Anda memiliki pertanyaan tentang pesanan Anda, silakan hubungi kami di:</p>
            <ul class="list-unstyled">
                <li>Email: <a href="mailto:sulistiawatisri@yourstore.com">sulistiawatisri@yourstore.com</a></li>
                <li>Telepon: (123) 456-7890</li>
            </ul>
        </div>

        <div class="text-center">
            <a href="/user" class="btn btn-custom w-100" style="background-color: rgb(227,152,108)">Konfirmasi Pembayaran</a>
            
        </div>
    </div>
    <footer class="text-center">
        <div class="container">
            <p class="footer-text">&copy; 2024 E-commerce. All rights reserved.</p>
            <p class="footer-text">"Berbelanja dengan hati yang penuh ketenangan."</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</form>
</html>