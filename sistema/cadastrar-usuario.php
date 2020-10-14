<?php
session_start();
require_once('Usuario.class.php');
$Usuario = new Usuario();

//RECEBENDO E FILTRANDO DADOS DE CADASTRO
$nome = filtraEntrada($_POST['nome']);
$cpf = filtraEntrada($_POST['cpf']);
$telefone = filtraEntrada($_POST['telefone']);
$email = filtraEntrada($_POST['email']);
$senha = filtraEntrada($_POST['senha']);
$senha_confirmar = filtraEntrada($_POST['senha_confirmar']);
$data_cadastro = dataAtual();

$senhalogin = $senha;

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
if($telefone == ""){
    echo " Preencha o campo celular ou Whatsapp!";
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

//REMOVENDO MASCARA DO TELEFONE
$telefone = removeMascTel($telefone);


//CADASTRANDO USUARIO NA TABELA usuarios
$Usuario->cadastrarUsuario($nome, $cpf, $telefone, $email, $senha, $senha_confirmar, $data_cadastro, $senhalogin);













