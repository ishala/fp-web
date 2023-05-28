<?php
require_once('../api_config/func_login.php');
require_once('../api_config/api_base.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:8080/final-projek/styles/login.css">
    <title>E-Canteen: Login</title>
</head>

<body>
    <h1 class="text-center fw-bold">E-Canteen</h1>
    <div class="container-fluid d-flex justify-content-center mt-5">
        <form method="POST">
            <div class="inputan d-flex flex-row bg-white mb-3 border border-dark p-2">
                <img src="../assets/email.png" alt="" class="ms-2 email">
                <input type="text" class="ms-3 border border-0" id="email" name="email" placeholder="Masukkan email anda...">
            </div>
            <div class="inputan d-flex flex-row bg-white mb-3 border border-dark p-2">
                <img src="../assets/lock.png" alt="" class="ms-3 lock">
                <input type="password" class="ms-3 border border-0" id="password" name="password" placeholder="Masukkan password anda...">
                <img src="../assets/eye.png" alt="" class="eye">
            </div>
            <div class="container d-flex justify-content-center rounded-5 tombol">
                <button type="submit" class="text-white mt-5 fs-4" name="submit" value="submit">LOGIN</button>
            </div>
        </form>
    </div>
    <p class="text-center mt-2 fs-5">Don't have an account? <a href="<?php echo $routes['register'] ?>"><span class="text-decoration-underline fw-bold text-black">Register</span></a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>





</html>