<?php
session_start();
require_once('../Usuario.class.php');
$Usuario = new Usuario();


$nome = filtraEntrada($_POST['nome-usuario']);
$email = filtraEntrada($_POST['email-usuario']);
$cpf = filtraEntrada($_POST['cpf-usuario']);
$senha = filtraEntrada($_POST['senha-usuario']);
$senha_confirmar = filtraEntrada($_POST['conf-senha']);

$antigo = filtraEntrada($_POST['antigo']);
$id_usuario = filtraEntrada($_POST['txtid']);

//VERIFICANDO SE OS CAMPOS ESTÃO VAZIOS
if($nome == ""){
    echo " Preencha o campo nome!";
    exit();
}
if($cpf == ""){
    echo " Preencha o campo CPF!";
    exit();
}
if(!validaCPF($cpf)){
    echo "CPF inválido";
    exit();
}

if($email == ""){
    echo " Preencha o campo email!";
    exit();
}
if($senha == ""){
    echo " Preencha o campo senha!";
    exit();
}
if($senha != $senha_confirmar){
    echo " Repita a senha corretamente!";
    exit();
}

//CRIPTOGRAFANDO A SENHA
$senha = md5($senha);

//REMOVENDO MASCARA DO CPF
$cpf = removeMascCPF($cpf);


//EDITANDO USUARIO
$Usuario->editarPerfil($nome, $cpf, $email, $senha, $antigo, $id_usuario);








