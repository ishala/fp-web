<?php
require_once('../api_config/func_register.php');
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:8080/final-projek/styles/register.css">
    <title>E-Canteen: Register</title>
</head>

<body>
    <h1 class="fw-bold fs-2 mt-3 ms-3">E-Canteen</h1>
    <div class="isian container d-flex justify-content-center bg-light">
        <!--FORM-->
        <form method="POST">
            <h2 class="text-center fw-bold mt-4 mb-5">Sign Up</h2>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p>Nama*</p>
                    <div class="inputan d-flex flex-row bg-white mb-3 border border-2 border-dark p-2">
                        <input type="text" class="ms-3 border border-0" id="name" name="name" placeholder="Masukkan nama anda...">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <p>Username*</p>
                    <div class="inputan d-flex flex-row bg-white mb-3 border border-2 border-dark p-2">
                        <input type="text" class="ms-3 border border-0" id="username" name="username" placeholder="Masukkan username anda...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Email*</p>
                    <div class="inputan d-flex flex-row bg-white mb-3 border border-2 border-dark p-2">
                        <input type="text" class="ms-3 border border-0" id="email" name="email" placeholder="Masukkan email anda...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Password*</p>
                    <div class="inputan d-flex flex-row bg-white mb-3 border border-2 border-dark p-2">
                        <input type="password" class="ms-3 border border-0" id="password" name="password" placeholder="Masukkan password anda...">
                        <img src="../assets/eye.png" alt="" class="eye ms-4">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Confirm Password*</p>
                    <div class="inputan d-flex flex-row bg-white mb-3 border border-2 border-dark p-2">
                        <input type="password" class="ms-3 border border-0" id="chkpass" name="chkpass" placeholder="Konfirmasi password anda...">
                        <img src="../assets/eye.png" alt="" class="eye ms-4">
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center rounded-5 tombol mb-4">
                <button type="submit" class="text-white mt-4 fs-4" name="register" value="register">REGISTER</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>