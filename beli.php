<?php
include "koneksi.php";
$qry_detail_buku = mysqli_query($conn, "select * from produk where
    id_produk='" . $_GET['id_produk'] . "'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    <link rel="stylesheet" href="home/css/jquery-ui.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="home/css/aos.css">

    <link rel="stylesheet" href="home/css/stylet.css">
    
</head>

<body>
    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <form action="" class="site-block-top-search">
                                <span class="icon icon-search2"></span>
                                <input type="text" class="form-control border-0" placeholder="Search">
                            </form>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="index.html" class="js-logo-clone">Shoppers</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>
                                    <li><a href="#"><span class="icon icon-person"></span></a></li>
                                    <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                                    <li>
                                        <a href="cart.html" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                            <span class="count">2</span>
                                        </a>
                                    </li>
                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li class="">
                            <a href="home.php">Home</a>
                        </li>
                        <li class="">
                            <a href="about.html">About</a>
                        </li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="#">Catalogue</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="row">
            <div class="col-md-4">
                <img src="assets/foto_produk/<?= $dt_buku['foto'] ?>" class="card-img-top" style="padding-left: 50px">
            </div>
            <div class="col-md-8">
                <form action="masukkankeranjang.php?id_produk=<?= $dt_buku['id_produk'] ?>" method="post">
                    <table class="table table-hover tablr-striped">
                        <thead>
                            <tr>
                                <td>Product</td>
                                <td><?= $dt_buku['nama_produk'] ?></td>
                            </tr>

                            <tr>
                                <td>Desc</td>
                                <td><?= $dt_buku['deskripsi'] ?></td>
                            </tr>

                            <tr>
                                <td>Qty</td>
                                <td><input type="number" name="jumlah" value="1"></td>
                            </tr>

                            <tr>
                                <td colspan="2"><input class="btn btn-primary col-md-4" type="submit" value="Buy"></td>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
        <?php
        include "footer.php";
        ?>


<script src="home/js/jquery-3.3.1.min.js"></script>
  <script src="home/js/jquery-ui.js"></script>
  <script src="home/js/popper.min.js"></script>
  <script src="home/js/bootstrap.min.js"></script>
  <script src="home/js/owl.carousel.min.js"></script>
  <script src="home/js/jquery.magnific-popup.min.js"></script>
  <script src="home/js/aos.js"></script>

  <script src="home/js/main.js"></script>
</body>

</html>