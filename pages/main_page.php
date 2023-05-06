<?php
require_once('../api_config/api_base.php');
require_once('../api_config/func_login.php');

if(isset($_SESSION['id_user' == null])){
    header('location: '. $routes['login']);
    exit();
}

var_dump($_SESSION['id_user']);
die();

?>