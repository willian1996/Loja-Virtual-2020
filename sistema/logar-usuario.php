<?php
session_start();
require_once('Usuario.class.php');
//CLASSE USUARIO
$Usuario = new Usuario();

 

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



//FAZENDO LOGIN COM METODO logarUsuario 
$Usuario->logarUsuario($email, $senha);
    
