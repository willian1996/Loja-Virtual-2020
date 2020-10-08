<?php
require_once("../conexao.php");
//
//    //VERIFICAR SE EXISTE ALGUM CADASTRO NO BANCO, SE NÃO TIVER CADASTRAR O USUÁRIO ADMINISTRADOR
//    $res = $pdo->query("SELECT * FROM usuarios"); 
//    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
//    $senha_crip = md5('123');
//    if(@count($dados) == 0){
//      $res = $pdo->query("INSERT into usuarios (nome, cpf, telefone, email, senha, nivel) values ('Administrador', '000.000.000-00', ' '$email_loja', '$senha_crip', 'Admin')");
//        echo "Inserido";
//    }

