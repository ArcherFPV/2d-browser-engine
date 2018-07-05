<?php
if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = "home";
}
define("PAGE",$page);

if($_SESSION['config']['authReq']){
    /* Users required to authenticate */
}else{
    /* Users not required to authenticate */
    if(file_exists("pages/{$page}.php")){
        $page = "pages/{$page}.php";
    }else{
        $page = "pages/404.php";
    }
}

define("PAGE_PATH",$page);