<?php
session_start();
if(@$_SESSION['id_usuario'] == null and @$_SESSION['nivel_usuario'] != "cliente"){

    header("Location: $dominio/Loja-Virtual-2020/index.php");
}
?>
Painel Cliente