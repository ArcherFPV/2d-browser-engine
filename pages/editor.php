<?php
$pageContent = "";

/* 32 * 32 px */
/* 30 * 20    */
$grid = "<div id='mapWrap' class='editor'>";
for($y=1;$y<=20;$y++){
    for($x=1;$x<=30;$x++){
        $grid .= "
    <div class='cellWrap'>
        <div class='cellXY'>{$x},{$y}</div>
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
}

$grid .= "</div>";

$selectTileset = "";
for($i=0;$i<=2048;$i++){
    $selectTileset .= "<div class='selectTile'></div>";
}

$pageContent .= "<div id='editConsole'>";
//Get list of tilesets
$tilesets = scandir("./sprites/tilesets");
$pageContent .= "<select id='tileSetSelect'>";
foreach($tilesets AS $fileName){
    if($fileName != "." && $fileName != ".."){
        $pageContent .= "<option value='{$fileName}'>{$fileName}</option>";
    }
}
$pageContent .= "</select>";

$pageContent .= "<div id='tilesetPreview'>{$selectTileset}</div>";

$pageContent .= "</div>";

$pageContent .= $grid;

echo $pageContent;