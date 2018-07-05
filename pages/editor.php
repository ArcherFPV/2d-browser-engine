<?php
/* 32 * 32 px */
/* 30 * 20    */
$grid = "<div id='mapWrap' class='editor'>";

for($i=1;$i<=120;$i++){
    $grid .= "
    <div class='cellWrap'>
        <div class='backGround1'></div>
        <div class='backGround1a'></div>
        <div class='backGround2'></div>
        <div class='backGround2a'></div>
        <div class='foreGround1'></div>
        <div class='foreGround1a'></div>
        <div class='foreGround2'></div>
        <div class='foreGround2a'></div>
    </div>
    ";
}

/*for($y=1;$y<=8;$y++){
    for($x=1;$x<=15;$x++){

    }
}*/

$grid .= "</div>";

echo $grid;