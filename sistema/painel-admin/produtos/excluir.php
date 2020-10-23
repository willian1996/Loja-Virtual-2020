<?php 
require_once('../Categorias.class.php');
$categoria = new Categorias();


$id = filtraEntrada($_POST['id']);

$retorno = $categoria->excluirSubcategoria($id);

echo json_encode($retorno);




