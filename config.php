<?php
define("ENVIRONMENT", "development"); //versão para maquina local
#define("ENVIRONMENT", "production"); //versão para hospedar


if(ENVIRONMENT == 'development'){
    $dominio = "localhost/Loja-Virtual-2020";
    $banco = 'loja-virtual-2020';
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
}else{
    $dominio = "https://lorrainemodas.com.br";
    $banco = 'u349811508_ljgab';
    $servidor = 'localhost';
    $usuario = 'u349811508_root';
    $senha = 'yi`4sy]4UKCQwzX]VJ';
}


//VARIÁVEIS GLOBAIS
$email = 'williansales199619@gmail.com';
$telefone = '(31) 3333-3333';
$whatsapp = '(31) 97527-5084';
$whatsapp_link = '5531975275084';
$nome_loja = 'Lorraine Modas Feminina';
$texto_destaque = 'Todos os Produtos em Promoção!';
$endereco_loja = 'Rua Alameda Campos, Número 50, Bairro Centro, Belo Horizonte - MG';

$url_loja = 'localhost/Loja-Virtual-2020/';



//VARIAVEIS DO SITE
$itens_por_pagina = 6;



//CONFIGURAÇÕES DO FRETE DOS CORREIOS
$cep_origem = '11669-309';

//INFORMAÇÕES EM CM (EMBALAGEM DE ENVIO)
$comprimento_caixa = '30';
$largura_caixa = '20';
$altura_caixa = '20';
$diametro_caixa = '25';

//Indica  se  a  encomenda  será  entregue  com  o  serviço adicional mão própria.Valores possíveis: S ou N   (S –Sim, N –Não)
$mao_propria = 'N';

//Valor declarado, 1 para sim e 0 para não
$valor_declarado = 0;

//Aviso de recebimento  S ou N
$aviso_recebimento = 'N';

//1 Para caixa/Pacote  -   2 para rolo/prisma  -   3 para envelope
$formato_frete = 1;




//VARIAVEIS DO BANCO DE DADOS
//$servidor = 'localhost';
//$usuario = 'root';
//$senha = '';
//$banco = 'loja';

//VARIAVEIS DO BANCO DE DADOS 



/*
* MÉTODO PARA PROTEJER O BANCO DE DADOS DE SQL INJECTION   
* @param DADO A FILTRAR  
* @return DADO FILTRADO 
* @author WILLIAN <williansalesgabriel@hotmail.com>
*/
function filtraEntrada($campo){
    // remove espaços no início e no final
    $campo = trim($campo); 
    // remove tags html
    $campo = strip_tags($campo); 
    // adiciona caractere de escape nas aspas e apostófros
    $campo = addslashes($campo); 
    return $campo;
}

/*
* MÉTODO PARA PEGAR A DATA E HORA ATUAL
* @return DATA E HORA ATUAL EM FORMATO PARA BANCO DE DADOS
* @author WILLIAN <williansalesgabriel@hotmail.com>
*/
function dataAtual(){
    date_default_timezone_set('America/Sao_Paulo');
    return date("Y-m-d H:i:s");
}


//Validar CPF
function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}
//removendo a mascara do telefone
function removeMascTel($telefone){
    $telefone = str_replace("(", "", $telefone);
    $telefone = str_replace(")", "", $telefone);
    $telefone = str_replace(" ", "", $telefone);
    $telefone = str_replace("-", "", $telefone);
    return $telefone;
}



//removendo a mascara do CPF
function removeMascCPF($cpf){
    $cpf = str_replace(".", "", $cpf);
    $cpf = str_replace("-", "", $cpf);
    $cpf = str_replace(" ", "", $cpf);
    return $cpf;
}

 ?>