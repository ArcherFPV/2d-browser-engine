<!DOCTYPE html>
<html>
    <head>
        <title><?=$_SESSION['config']['siteTitle']?></title>
        <link rel="stylesheet" type="text/css" href="<?=$_SESSION['config']['url']?>/styles/css/main.css" />
        <?php
            if(file_exists("styles/css/".PAGE.".css")){
                echo "<link rel='stylesheet' type='text/css' href='{$_SESSION['config']['url']}/styles/css/".PAGE.".css' />";
            }
        ?>
        <script type="text/javascript" src="<?=$_SESSION['config']['url']?>/js/jquery.js"></script>
    </head>
<body>