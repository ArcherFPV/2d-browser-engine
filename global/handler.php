<?php
$page = $_GET['p'];

if($_SESSION['config']['authReq']){
    /* Users required to authenticate */
}else{
    /* Users not required to authenticate */
    if(file_exists("pages/{$page}.php")){
        require("pages/{$page}.php");

    }else{
        require("pages/404.php");
    }
}