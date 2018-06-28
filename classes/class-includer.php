<?php
$classes = scandir(".");
foreach($classes AS $class){
    if(strstr($class,".class.php")){
        require($class);
    }
}