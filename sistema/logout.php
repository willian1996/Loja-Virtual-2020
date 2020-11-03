<?php 

@session_start();
@session_destroy();

echo "<script language='javascript'>
    window.location='http://localhost/loja/index.php' </script>";



 ?>