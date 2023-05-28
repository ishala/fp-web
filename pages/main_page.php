<?php
require_once('../api_config/api_base.php');
require_once('../api_config/func_login.php');

session_start();


if (isset($_SESSION['id_user' == null])) {
    header('location: ' . $routes['login']);
    exit();
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Utama Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $BASE_URL . 'styles/main-page.css' ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid px-4 mt-2">
            <a class="navbar-brand text-dark fw-bold fs-2" href="#">E-Canteen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-dark" href="#">Product</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-dark" href="#">Discount</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-dark" href="#">Reviews</a>
                    </li>
                </ul>
            </div>
            <div class="container profile bg-white d-flex justify-content-end">
                <img src="<?php echo $BASE_URL . 'assets/profile.png' ?>" alt="">
            </div>
        </div>
    </nav>

    <p class="fs-3 fw-bold mt-4 ms-5">Selamat Datang, Faishal!</p>
    <div class="container-fluid px-5 mt-5">
        <div class="row d-flex justify-content-around">
            <div class="container data-penjualan col">
                <p class="fs-4 text-center mt-5">Total Earnings</p>
                <p class="fs-2 fw-bold text-center">Rp. 3.242.144</p>
                
            </div>
            <div class="container data-penjualan col">
                <p class="fs-4 text-center mt-5">Total Users</p>
                <p class="fs-2 fw-bold text-center">24</p>
            </div>
            <div class="container data-penjualan col">
                <p class="fs-4 text-center mt-5">Total Products</p>
                <p class="fs-2 fw-bold text-center">144</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
