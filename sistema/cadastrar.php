<?php 
 
require_once("../conexao.php");

$nome = filtraEntrada($_POST['nome']);
$cpf = filtraEntrada($_POST['cpf']);
$telefone = filtraEntrada($_POST['telefone']);
$email = filtraEntrada($_POST['email']);
$senha = filtraEntrada($_POST['senha']);
$senha_crip = filtraEntrada(md5($senha));

if($nome == ""){
	echo 'Preencha o Campo nome!';
	exit();
}

if($cpf == ""){
	echo 'Preencha o Campo cpf!';
	exit();
}
if($telefone == ""){
	echo 'Preencha o Campo telefone!';
	exit();
}

if(!validaCPF($cpf)){
    echo "CPF inválido";
    exit();
}

if($email == ""){
	echo 'Preencha o Campo email!';
	exit();
}

if($senha == ""){
	echo 'Preencha o Campo senha!';
	exit();
}

if($senha != $_POST['confirmar-senha']){
	echo 'As senhas não coincidem!';
	exit();
}


//REMOVENDO MASCARA DO CPF
$cpf = removeMascCPF($cpf);

//REMOVENDO MASCARA DO TELEFONE
$telefone = removeMascTel($telefone);


$res = $pdo->query("SELECT * FROM usuarios where cpf = '$cpf'"); 
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
if(@count($dados) == 0){

	$res = $pdo->prepare("INSERT into usuarios (nome, cpf, telefone, email, senha, senha_crip, nivel) values (:nome, :cpf, :telefone, :email, :senha, :senha_crip, :nivel)");
	$res->bindValue(":nome", $nome);
	$res->bindValue(":email", $email);
	$res->bindValue(":cpf", $cpf);
    $res->bindValue(":telefone", $telefone);
	$res->bindValue(":senha", $senha);
	$res->bindValue(":senha_crip", $senha_crip);
	$res->bindValue(":nivel", 'cliente');

	$res->execute();


	$res = $pdo->prepare("INSERT into clientes (nome, cpf, telefone, email) values (:nome, :cpf, :telefone, :email)");
	$res->bindValue(":nome", $nome);
	$res->bindValue(":email", $email);
    $res->bindValue(":telefone", $telefone);
	$res->bindValue(":cpf", $cpf);
	
	$res->execute();


	$res = $pdo->query("SELECT * FROM emails where email = '$email'"); 
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	if(@count($dados) == 0){
	$res = $pdo->prepare("INSERT into emails (nome, email, ativo) values (:nome, :email, :ativo)");
	$res->bindValue(":nome", $nome);
	$res->bindValue(":email", $email);
	$res->bindValue(":ativo", "Sim");
	$res->execute();
}


	
    
//fazendo login usuario apos cadastrar
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


    if($_SESSION['nivel_usuario'] == "cliente"){
        echo 'Cadastrado com Sucesso!';
    }

}else{
    echo "Email ou senha invalidos";
}
    
    
    
    
    
    
    
    
    
    //---------------------------------------------------------
}else{
	echo 'CPF já Cadastrado!';
}


?>