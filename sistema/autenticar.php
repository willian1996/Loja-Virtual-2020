<?php
require_once("../conexao.php");
@session_start();


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


$sql = $pdo->prepare("SELECT * FROM usuarios WHERE (email = :email or cpf = :cpf) AND senha_crip = :senha");
$sql->bindValue(":email", $email);
$sql->bindValue(":cpf", $email);
$sql->bindValue(":senha", md5($senha));
$sql->execute();

if($sql->rowCount() > 0){
    $dados = $sql->fetchAll();
    $_SESSION['id_usuario'] = $dados[0]['id'];
    $_SESSION['nome_usuario'] = $dados[0]['nome'];
    $_SESSION['email_usuario'] = $dados[0]['email'];
    $_SESSION['cpf_usuario'] = $dados[0]['cpf'];
    $_SESSION['nivel_usuario'] = $dados[0]['nivel'];

    if($_SESSION['nivel_usuario'] == "admin"){
        echo $_SESSION['nivel_usuario'];

    }
    if($_SESSION['nivel_usuario'] == "cliente"){
        echo $_SESSION['nivel_usuario'];
    }

}else{
    echo "Email ou senha invalidos";
}

?>