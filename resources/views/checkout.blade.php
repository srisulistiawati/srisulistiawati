<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .checkout-form {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        header {
            background-image: linear-gradient(to right,rgb(227,152,108),rgb(227,152,108));
            color: white;
            padding: 20px 0;
        }
        footer {
            background-color: rgb(227,152,108);
            padding: 30px 0;
            margin-top: 0px;
            border-top: 5px solid rgb(227,152,108);
        }

        .footer-text {
            color:white;
            font-size: 1rem;
        }

        /* .form-group{
            background-color: rgb(227,152,108);
        } */
    </style>
</head>
    <form action="/checkout">
    <body>
        <header class="text-center">
            <div class="container">
                <h2 class="text-center">Checkout</h2>
        </header>
    <div class="container">
            <form>
                <div class="form-group" style="margin-top: 15px">
                    <label for="fullName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="phoneNumber">No Handphone</label>
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Masukkan no hp">
                </div>
                <h4>Alamat Anda</h4>
                <div class="form-group">
                    <label for="address">Provinsi, Kota, Kecamatan</label>
                    <input type="text" class="form-control" id="address" placeholder="Masukkan provinsi, kota, kecamatan">
                </div>
                <div class="form-group">
                    <label for="city">Nama Jalan, Gedung</label>
                    <input type="text" class="form-control" id="city" placeholder="Masukkan nama jalan, gedung ">
                </div>
                <div class="form-group">
                    <label for="city">Detail lainnya</label>
                    <input type="text" class="form-control" id="city" placeholder="Masukkan detail lainnya">
                </div>
                <div class="form-group">
                    <label for="kode">Kode pos</label>
                    <input type="text" class="form-control" id="kode" placeholder="Masukkan kode pos">
                </div>
                <h4>Metode Pembayaran</h4>
                <div class="form-group">
                <label for="country" class="form-label">Pilih Metode Pembayaran</label>
                <select class="form-select" id="country" required>
                    <option value="">COD</option>
                    <option value="">Transfer</option>
                </select>
                </label>
                </div>
                {{-- <div class="form-group">
                    <label for="expiryDate">MM/YY</label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" placeholder="Enter your CVV">
                </div> --}}
                <div class="form-group text-center">
                    <a href="/finalcheckout" class="btn btn-custom w-100" style="background-color: burlywood">CheckOut</a>
                </div>
            </form>
    </div>
    <footer class="text-center">
        <div class="container">
            <p class="footer-text">&copy; 2024 E-commerce. All rights reserved.</p>
            <p class="footer-text">"Berbelanja dengan hati yang penuh ketenangan."</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</form>
</html>