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
    <link rel="stylesheet" href="../styles/login.css">
    <title>E-Canteen: Login</title>
</head>

<body>
    <h1 class="text-center fw-bold">E-Canteen</h1>
    <div class="container-fluid d-flex justify-content-center mt-5">
        <form>
            <div class="inputan d-flex flex-row bg-white mb-3 border border-dark p-2">
                <img src="../assets/email.png" alt="" class="ms-2 email">
                <input type="password" class="ms-3 border border-0" id="email" name="email" placeholder="Masukkan email anda...">
            </div>
            <div class="inputan d-flex flex-row bg-white mb-3 border border-dark p-2">
                <img src="../assets/lock.png" alt="" class="ms-3 lock">
                <input type="password" class="ms-3 border border-0" id="email" name="email" placeholder="Masukkan password anda...">
                <img src="../assets/eye.png" alt="" class="eye">
            </div>
            <div class="container d-flex justify-content-center rounded-5 tombol">
                <button type="submit" class="text-white mt-5 fs-4">LOGIN</button>
            </div>
        </form>
    </div>
    <p class="text-center mt-2 fs-5">Don't have an account? <span class="text-decoration-underline fw-bold">Register</span></p>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>