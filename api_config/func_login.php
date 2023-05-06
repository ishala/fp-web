<?php
require_once('api_base.php');

//Login dengan username dan password
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; 

    //cek apakah admin
    if($email == 'admin' and $password == 'admin'){
        $queryAdm = mysqli_query($con, "select id_user from user where email = 'admin' and password = 'admin'");
        if(mysqli_num_rows($queryAdm) != 0){
            $row = mysqli_fetch_assoc($queryAdm);
    
            //membuat session
            session_start();
            $_SESSION['id_user'] = $row['id_user'];
            header('location: '. $routes['mainPageAdm']);
        } else{
            header('location: '. $routes['login']);
        }
    } 
    //cek apakah user
    else {
        $queryUsr = mysqli_query($con, "select * from user where email = '$email' and password = '$password'");
        if(mysqli_num_rows($queryUsr) != 0){
            $row = mysqli_fetch_assoc($queryUsr);
    
            //membuat session
            session_start();
            $_SESSION['id_user'] = $row['id_user'];
            header('location: '. $routes['mainPageUsr']);
        } else{
            header('location: '.$routes['register']);
        }
    } 
}

