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
    <title>Menu Utama Pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $BASE_URL . 'styles/main-page-user.css' ?>">
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
                        <a class="nav-link text-dark" href="#">Discount</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-dark" href="#">Feedback</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-dark" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="container pesanan bg-white d-flex justify-content-end">
                <p>Daftar Pesanan</p>
            </div>
        </div>
    </nav>

    <div class="iklan d-flex flex-row mt-5">
        <div class="container col-6 w-50">
            <p class="fs-3 fw-bold">Nasi Goreng Bu Siti</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eaque velit alias laborum officia minus accusantium assumenda ratione quaerat nostrum!</p>
            <button type="submit" class="text-white mt-4" name="pesan" value="pesan">
                <p>Pesan Sekarang</p>
            </button>
        </div>
        <div class="col-6">
            <img src="<?php echo $BASE_URL . 'assets/nasgor_1.png' ?>" alt="">
        </div>
    </div>
    <div class="filter container d-flex flex-row">
        <div class="col-3">
            <button type="submit" class="text-white mt-4" name="pesan" value="pesan">
                <p>Semua</p>
            </button>
        </div>
        <div class="col-3">
            <button type="submit" class="text-white mt-4" name="pesan" value="pesan">
                <p>Makanan</p>
            </button>
        </div>
        <div class="col-3">
            <button type="submit" class="text-white mt-4" name="pesan" value="pesan">
                <p>Minuman</p>
            </button>
        </div>
        <div class="col-3">
            <button type="submit" class="text-white mt-4" name="pesan" value="pesan">
                <p>Topping</p>
            </button>
        </div>
    </div>

    <div class="wrapper d-flex">
        <div class="card">
            <img src="<?php echo $BASE_URL . 'assets/buryam.png' ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fw-bold">Bubur Ayam</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex flex-row-reverse">
                    <a href="#" class="btn btn-light text-danger">Pesan</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo $BASE_URL . 'assets/buryam.png' ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fw-bold">Bubur Ayam</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex flex-row-reverse">
                    <a href="#" class="btn btn-light text-danger">Pesan</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo $BASE_URL . 'assets/buryam.png' ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fw-bold">Bubur Ayam</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex flex-row-reverse">
                    <a href="#" class="btn btn-light text-danger">Pesan</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo $BASE_URL . 'assets/buryam.png' ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fw-bold">Bubur Ayam</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex flex-row-reverse">
                    <a href="#" class="btn btn-light text-danger">Pesan</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo $BASE_URL . 'assets/buryam.png' ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fw-bold">Bubur Ayam</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex flex-row-reverse">
                    <a href="#" class="btn btn-light text-danger">Pesan</a>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
