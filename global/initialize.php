<?php
session_start();
if(empty($_SESSION['auth'])){
    sessions::initialize();
}
if(empty($_SESSION['config'])){
    $_SESSION['config'] = (new config())->getConfig();
}