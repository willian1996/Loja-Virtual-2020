<?php
session_start();
require_once('../Usuario.class.php');
$Usuario = new Usuario();


$nome = $_POST['nome-usuario'];
$email = $_POST['email-usuario'];
$cpf = $_POST['cpf-usuario'];
$senha = $_POST['senha-usuario'];
$senha_confirmar = $_POST['conf-senha'];

$antigo = $_POST['antigo'];
$id_usuario = $_POST['txtid'];

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








