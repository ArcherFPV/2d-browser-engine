<?php

class sessions{

    public static function initialize(){
        $_SESSION['auth'] = false;

    }

    public function __construct(){

    }
}