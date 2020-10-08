<?php
require_once('Login.class.php');

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

//VERIFICANDO SE JÁ EXISTE 
$res = $pdo->query("SELECT * FROM usuarios where cpf = '$cpf' OR email = '$email'"); 
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
if(count($dados) == 0){
    
    //CADASTRANDO USUARIO NA TABELA usuarios
    $res = $pdo->prepare("INSERT INTO usuarios (nome, cpf, telefone, email, senha, nivel, data_cadastro) VALUES (:nome, :cpf, :telefone, :email, :senha, :nivel, :data_cadastro)");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":telefone", $telefone);
    $res->bindValue(":email", $email);
    $res->bindValue(":senha", $senha);
    $res->bindValue(":nivel", "Cliente");
    $res->bindValue(":data_cadastro", $data_cadastro);
    $res->execute();
    
    //FAZENDO O LOGIN
    new Login($email, $senhalogin);
    
    

    
    //CADASTRANDO USUARIO NA TABELA clientes
    $res = $pdo->prepare("INSERT INTO clientes (nome, cpf, telefone, email, senha, data_cadastro) VALUES (:nome, :cpf, :telefone, :email, :senha, :data_cadastro)");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":telefone", $telefone);
    $res->bindValue(":email", $email);
    $res->bindValue(":senha", $senha);
    $res->bindValue(":data_cadastro", $data_cadastro);
    $res->execute();
    
    
    //VERIFICANDO SE JA EXISTE ESSE EMAIL NO BANCO DE DADOS 
    $res = $pdo->query("SELECT * FROM emails where email = '$email'"); 
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
    if(count($dados) == 0){

        //CADASTRANDO O E-MAIL PARA TABELA emails NO DB 
        $res = $pdo->prepare("INSERT INTO emails (nome, email, ativo) VALUES (:nome, :email, :ativo)");

        $res->bindValue(":nome", $nome);
        $res->bindValue(":email", $email);
        $res->bindValue(":ativo", "Sim");
        $res->execute();

    
}
    
}else{
    echo "CPF ou E-mail já Cadastrados";
}
















