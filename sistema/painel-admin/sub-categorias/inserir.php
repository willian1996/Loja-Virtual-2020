<?php
require_once('../Categorias.class.php');
$categoria = new Categorias();

$nome = $_POST['nome-cat'];
$id_cat = $_POST['categoria'];

$nome_novo = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($nome)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
$nome_url = preg_replace('/[ -]+/' , '-' , $nome_novo);

$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];

if($nome == ""){
	echo 'Preencha o Campo Nome!';
	exit();
}


$categoria->cadastrarSubcategorias($nome, $antigo, $id, $id_cat, $nome_url="");


?>