<?php
session_start();
if(isset($_GET['reinit'])){
    foreach($_SESSION AS $key => $val){
        $_SESSION[$key] = false;
        unset($_SESSION[$key]);
    }
    session_destroy();
    header("Location: /");
}
if(empty($_SESSION['auth'])){
    sessions::initialize();
}
if(empty($_SESSION['config'])){
    $_SESSION['config'] = (new config())->getConfig();
}