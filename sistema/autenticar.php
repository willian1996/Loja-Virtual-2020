<?php
require_once('Login.class.php');



//RECEBENDO E FILTRANDO DADOS LOGIN
$email = filtraEntrada($_POST['email_login']);
$senha = filtraEntrada($_POST['senha_login']);

//VERIFICANDO SE ESTA VAZIO
if($email == ""){
    echo " Preencha o campo email!";
    exit();
}
if($senha == ""){
    echo " Preencha o campo senha!";
    exit();
}



//FAZENDO LOGIN
new Login($email, $senha);
    
