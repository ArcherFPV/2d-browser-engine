<?php
$classes = scandir("classes");
foreach($classes AS $class){
    if(strstr($class,".class.php")){
        require("classes/$class");
    }
}