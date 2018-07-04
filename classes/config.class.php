<?php

class config{
    private $sqli;
    public $config = array();

    public function getConfig(){
        $qString = "SELECT id,authReq FROM config";
        $res = $this->sqli->query($qString);
        while($r = $res->fetch_assoc()){
            foreach($r AS $col => $val){
                $this->config[$col] = $val;
            }
        }
        return $this->config;
    }

    public function __construct(){
        $this->sqli = new mysqli(SQLHOST,SQLUSER,SQLPASS,SQLDBASE);
    }
}