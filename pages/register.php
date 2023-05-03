<?php

$user   = "root";
$pass   = "";
$host   = "localhost";
$db     = "penjual";

$con = mysqli_connect($host, $user, $pass, $db) or die("Koneksi Gagal");
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/register.css">
    <title>E-Canteen: Register</title>
</head>

<body>
    <h1 class="fw-bold fs-2 mt-3 ms-3">E-Canteen</h1>
    <div class="isian container d-flex justify-content-center bg-light">
        <form>
            <h2 class="text-center fw-bold mt-4 mb-5">Sign Up</h2>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p>Nama*</p>
                    <div class="inputan d-flex flex-row bg-white mb-3 border border-2 border-dark p-2">
                        <input type="text" class="ms-3 border border-0" id="email" name="email" placeholder="Masukkan nama anda...">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <p>Username*</p>
                    <div class="inputan d-flex flex-row bg-white mb-3 border border-2 border-dark p-2">
                        <input type="text" class="ms-3 border border-0" id="email" name="email" placeholder="Masukkan username anda...">
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
                        <input type="password" class="ms-3 border border-0" id="email" name="email" placeholder="Masukkan password anda...">
                        <img src="../assets/eye.png" alt="" class="eye ms-4">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Confirm Password*</p>
                    <div class="inputan d-flex flex-row bg-white mb-3 border border-2 border-dark p-2">
                        <input type="password" class="ms-3 border border-0" id="email" name="email" placeholder="Konfirmasi password anda...">
                        <img src="../assets/eye.png" alt="" class="eye ms-4">
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center rounded-5 tombol mb-4">
                <button type="submit" class="text-white mt-4 fs-4">REGISTER</button>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>