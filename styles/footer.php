<!--Load JS-->
<?php
    if(file_exists("js/".PAGE.".js")){
        echo "<script type='text/javascript' src='{$_SESSION['config']['url']}/js/".PAGE.".js'></script>";
    }
?>
</body>
</html>