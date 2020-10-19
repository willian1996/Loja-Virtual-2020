<?php
require_once('../Categorias.class.php');
$categoria = new Categorias();


$id = filtraEntrada($_POST['id']);

$retorno = $categoria->excluirCategoria($id);

echo json_encode($retorno);





?>