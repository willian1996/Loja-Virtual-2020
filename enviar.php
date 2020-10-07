<?php
require_once('conexao.php');

//RECEBENDO E FILTRANDO OS DADOS DO FORMULARIO 
$nome = filtraEntrada($_POST['nome']);
$email = filtraEntrada($_POST['email']);
$telefone = filtraEntrada($_POST['telefone']);
$mensagem = filtraEntrada($_POST['mensagem']);

//VERIFICANDO SE OS CAMPOS ESTAO VAZIOS 
if($nome == "") {
    echo "Preencha o campo nome";
    exit();
}
if($email == "") {
    echo "Preencha o campo email";
    exit();
}
if($telefone == "") {
    echo "Preencha o campo telefone";
    exit();
}
if($mensagem == "") {
    echo "Preencha o campo mensagem";
    exit();
}


//ENVIANDO A MENSAGEM PARA O ADMINISTRADOR DO SITE 
$destinatario = $email_loja;
$assunto = $nome_loja . ' - Email da Loja';
$mensagem = utf8_decode('Nome: '.$nome. "\r\n"."\r\n" . 'Telefone: '.$telefone. "\r\n"."\r\n" . 'Mensagem: ' . "\r\n"."\r\n" .$mensagem);
$cabecalhos = "From: ".$email;
@mail($destinatario, $assunto, $mensagem, $cabecalhos);
echo 'Enviado com sucesso';


//VERIFICANDO SE JA EXISTE ESSE EMAIL NO BANCO DE DADOS 
$res = $pdo->query("SELECT * FROM emails where email = '$email'"); 
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
if(count($dados) == 0){
    
    //ENVIANDO O E-MAIL PARA TABELA emails NO DB 
    $res = $pdo->prepare("INSERT INTO emails (nome, email, ativo) VALUES (:nome, :email, :ativo)");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":ativo", "Sim");
    $res->execute();

    
}

























