<?php

@session_start();
@session_destroy();
echo "<script language='javascript'>
    window.location='http://localhost/Loja-Virtual-2020/index.php' </script>";