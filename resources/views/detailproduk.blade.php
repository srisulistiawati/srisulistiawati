<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-details {
            margin-top: 20px;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="row- 2 text-center" style="padding-left: 20%">
        <div class="col-sm-4">
            <div class="thumbnail">
                {{-- <img src="{{ asset('assets/image/'.$Product->foto) }}" alt="product image" width="400" height="300"> --}}
                <br>
            </div>
        </div>
    </div>
    <form action="/detailproduk">
        <div class="container product-details" style="padding-top:0px">
            <div class="coll-sm-7" style="background-color: rgb(227,152,108); text-align:center; height:70px; ">
                <h4 style="padding-top: 20px">{{ $Product->name }}</h4>
            </div>
            <div class="row">
                <div class="col-md-5 product-image" style="padding-top: 20px;">
                    <img src="{{ asset('assets/image/'.$Product->foto) }}" style="border-radius: 10%" alt="Product Image" class="img-fluid">
                </div>
            <div class="col-md-6" style="padding-top: 25px; ">
                <ul>
                    <div class="card-body">        
                        <h5 class="card-title">{{ $Product->name }}</h5>
                        <p class="card-text">{{ $Product->deskripsi }}</p>
                        <h5 class="card-text">Rp.{{ $Product->harga }}</h5>
                    </div>
                </ul>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" value="1" min="1">
                </div>
                
                <div class="text-center">
                    <a href="/checkout" class="btn btn-custom w-100" style="background-color: rgb(227,152,108)">CheckOut</a>
                    
                </div>

                <div class="text-center"  style="margin-top:5px">
                    <a href="/keranjang" class="btn btn-custom w-100" style="background-color: rgb(227,152,108)">Masukan Keranjang</a>
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </form>
</body>
</html>