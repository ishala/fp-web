<?php
require_once('api_base.php');

//Input akun baru
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $chkpass = $_POST['chkpass'];

    $query = mysqli_query($con, "insert into user(nama_user, username, email, password) values ('$name', '$username', '$email', '$password')");

}