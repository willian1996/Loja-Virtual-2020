<?php
define("ENVIRONMENT", "development"); //versão para maquina local
#define("ENVIRONMENT", "production"); //versão para hospedar


if(ENVIRONMENT == 'development'){
    $url_loja = "localhost/loja";
    $banco = 'loja';
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
}else{
    $url_loja = "https://lorrainemodas.com.br";
    $banco = 'u349811508_ljgab';
    $servidor = 'localhost';
    $usuario = 'u349811508_root';
    $senha = 'yi`4sy]4UKCQwzX]VJ';
}

//VARIAVEIS DO BANCO DE DADOS
//$servidor = 'localhost';
//$usuario = 'root';
//$senha = '';
//$banco = 'loja';

//VARIÁVEIS GLOBAIS
$email = 'williansalesgabriel@hotmail.com';
$telefone = '(31) 3333-3333';
$whatsapp = '(12) 99751-6241';
$whatsapp_link = '5512997516241';
$nome_loja = 'Lorraine Modas Feminina';
$texto_destaque = 'Todos os Produtos em Promoção!';
$endereco_loja = 'Rua Cleusa Fatima dos Santos n°30, Travessão, Caraguatatuba - SP';






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



//VARIAVEIS PARA O CUPOM
//total de cartões para o cliente trocar pelo cumpom de desconto
$total_cartoes_troca = 10;
//valor do desconto para quando o cliente completar x cupons (colocar o valor aqui inteiro)
$valor_cupom_cartao = 20;
$dias_uso_cupom = 7;


//NIVEL MINIMO PARA ALERTA NO ESTOQUE
$nivel_estoque = 5;


//VARIAVEL QUE DEFINE A LIMPEZA DO CARRINHO APÓS 2 DIAS SEM O USUÁRIO FECHAR A COMPRA (NO CASO ABAIXO EU OPTEI POR DOIS DIAS)
$dias_limpar_carrinho = 2;


//definir se vai ser possível retirar o produto no local sim ou não!
$retirada_local = 'sim';

//nota minima para mostrar a avaliação do produto na página do produto
//no exemplo abaixo com valor 3, ele só mostra produto avaliado de 3 a 5
$nota_minima = 3;


//DISPAROS AUTOMATIZADOS DE EMAIL MARKETING
//total de emails que o seu servidor suporta enviar por hora (no meu hostgator são 500)
$enviar_total_emails = 480;
$intervalo_envio_email = 70;  //tempo em minutos (enviar de 70 em 70 minutos 480 emails por vez, essa é a configuração que fiz)

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
function celular($telefone){
    $telefone= trim(str_replace('/', '', str_replace(' ', '', str_replace('-', '', str_replace(')', '', str_replace('(', '', $telefone))))));

    $regexTelefone = "^[0-9]{11}$";

    $regexCel = '/[0-9]{2}[6789][0-9]{3,4}[0-9]{4}/'; // Regex para validar somente celular
    if (preg_match($regexCel, $telefone)) {
        return true;
    }else{
        return false;
    }
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

//mascara php para pagseguro aceitar
function Mask($mask,$str){

    $str = str_replace(" ","",$str);

    for($i=0;$i<strlen($str);$i++){
        $mask[strpos($mask,"#")] = $str[$i];
    }

    return $mask;

}

 ?>