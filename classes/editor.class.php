<?php

class editor{
    private $sqli;

    public function __construct(){
        $this->sqli = new mysqli(SQLHOST,SQLUSER,SQLPASS,SQLDBASE);
    }
}