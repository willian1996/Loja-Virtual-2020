<?php

require_once("conexao.php");
?>

<?php

$tem_cor;
?> 

<?php 
//recuperar o nome do produto para filtrar os dados dele
$produto_get = @$_GET['nome'];

?>

<?php 
//trazer dados do produto
$query = $pdo->query("SELECT * FROM produtos where nome_url = '$produto_get' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$palavras = $res[0]['palavras'];


require_once("cabecalho.php");
require_once("cabecalho-busca.php");


$query = $pdo->query("SELECT * FROM produtos where nome_url = '$produto_get' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$nome = $res[0]['nome'];
$imagem = $res[0]['imagem'];
$sub_cat = $res[0]['sub_categoria'];
$valor = $res[0]['valor'];
$estoque = $res[0]['estoque'];
$descricao = $res[0]['descricao'];
$desc_longa = $res[0]['descricao_longa'];
$tipo_envio = $res[0]['tipo_envio'];
$palavras = $res[0]['palavras'];
$ativo = $res[0]['ativo'];
$peso = $res[0]['peso'];
$largura = $res[0]['largura'];
$altura = $res[0]['altura'];
$comprimento = $res[0]['comprimento'];
$modelo = $res[0]['modelo'];
$valor_frete = $res[0]['valor_frete'];
$nome_cat = $res[0]['categoria'];
$promocao = $res[0]['promocao'];
$id_produto = $res[0]['id'];


if($modelo == ""){
    $modelo = "Nenhum";
}

if($promocao == 'Sim'){
    $queryp = $pdo->query("SELECT * FROM promocoes where id_produto = '$id_produto' ");
    $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);
    $valor = $resp[0]['valor'];
    $desconto = $resp[0]['desconto'];
    
 }
 $valor = number_format($valor, 2, ',', '.');

$querye = $pdo->query("SELECT * FROM tipo_envios where id = '$tipo_envio' ");
    $rese = $querye->fetchAll(PDO::FETCH_ASSOC);
    $nome_frete = @$rese[0]['nome'];


@session_start();
@$nivel_usuario = @$_SESSION['nivel_usuario'];

?>

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                        src="img/produtos/<?php echo $imagem ?>" alt="">
                    </div>

                    <div class="product__details__pic__slider owl-carousel">

                        <?php 
                         $query = $pdo->query("SELECT * FROM imagens where id_produto = '$id_produto' ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i=0; $i < count($res); $i++) { 
                              foreach ($res[$i] as $key => $value) {
                              }

                              $imagem_prod = $res[$i]['imagem'];
                         ?>

                        <img data-imgbigurl="img/produtos/detalhes/<?php echo $imagem_prod ?>"
                        src="img/produtos/detalhes/<?php echo $imagem_prod ?>" alt="">

                    <?php } ?>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?php echo $nome ?></h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div class="product__details__price">R$ <?php echo $valor ?></div>
                    <p><?php echo $descricao ?></p>
                    <form method="post" id="form-add">
                    <div class="product__details__quantity">
                        <input type="hidden" value="<?php echo $id_produto ?>" id="idproduto" name="idproduto">
                        <input type="hidden" value="Não" id="combo" name="combo">
                        <input type="hidden" value="carac" id="carac" name="carac">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" name="quantidade" value="1">
                            </div>
                        </div>
                    </div>
                    
                    
   
                    
                   
                        <div class="row mt-4 mb-4 ml-1">
                            <?php 

                               $query2 = $pdo->query("SELECT * from carac_prod where id_prod = '$id_produto' ");
                                $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                                for ($i=0; $i < count($res2); $i++) { 
                                    foreach ($res2[$i] as $key => $value) {
                                    }

                                    $id_carac = $res2[$i]['id_carac'];
                                    $id_carac_prod = $res2[$i]['id'];
                                    $query3 = $pdo->query("SELECT * from carac where id = '$id_carac' ");
                                $res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
                                $nome_carac = $res3[0]['nome'];
                                if($nome_carac == 'Cor'){
                                    @$tem_cor = 'Sim';
                                }
                             ?>
                            <div class="mr-3 mt-2">
                                
                                 <span>
                                     <select class='form-control form-control-sm' name='<?php echo $i ?>' id='<?php echo $i ?>'>";
                                <?php 

                                 echo "<option value='0' >Selecionar " . $nome_carac . "</option>"; 
                               
                                $query4 = $pdo->query("SELECT * from carac_itens where id_carac_prod = '$id_carac_prod'");
                                $res4 = $query4->fetchAll(PDO::FETCH_ASSOC);
                                for ($i2=0; $i2 < count($res4); $i2++) { 
                                    foreach ($res4[$i2] as $key => $value) {
                                    }

                                      

                                       echo "<option value='".$res4[$i2]['id']."' >" . $res4[$i2]['nome'] . "</option>"; 
                                  


                               }


                               ?>
                           </select>
                                </span>
                            </div>

                        <?php } ?>

                         

                        </div>
                        
                                               <?php if(@$tem_cor == 'Sim'){ ?>
                             <div class="mt-4 mb-4">
                                <?php 

                                    $query2 = $pdo->query("SELECT * from carac_prod where id_prod = '$id_produto' ");
                                $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                                for ($i=0; $i < count($res2); $i++) { 
                                    foreach ($res2[$i] as $key => $value) {
                                    }

                                    $id_carac = $res2[$i]['id_carac'];
                                    $id_carac_prod = $res2[$i]['id'];
                                    $query3 = $pdo->query("SELECT * from carac where id = '$id_carac' ");
                                $res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
                                $nome_carac = $res3[0]['nome'];
                                if($nome_carac == 'Cor'){
                                    
                                     $query4 = $pdo->query("SELECT * from carac_itens where id_carac_prod = '$id_carac_prod'");
                                $res4 = $query4->fetchAll(PDO::FETCH_ASSOC);
                                for ($i2=0; $i2 < count($res4); $i2++) { 
                                    foreach ($res4[$i2] as $key => $value) {
                                    }

                                    echo "<span class='mr-3'><i class='fa fa-circle mr-1' style='color:".$res4[$i2]['valor_item']."'></i>" .$res4[$i2]['nome']."</span>";

                                }
                                

                            }
                        }


                                 ?>
                           </div>
                          <?php } ?>
                        
                        <button class="primary-btn" id="btn-add-car">ADD AO CARRINHO</button>
                    <small><div id="div-mensagem-prod"></div></small>

                        </form>
                        
                     


                          
                    

                         <?php 
                            if($nome_frete == 'Sem Frete'){
                                echo '<div class="product__details__text"><p>Este produto está com Frete Gratuito!</p>';
                            }

                            if($nome_frete == 'Valor Fixo'){
                                echo '<div class="product__details__text"><p>Frete Fixo de '.$valor_frete.' Reais</p>';
                            }

                            if($nome_frete == 'Digital'){
                                echo '<div class="product__details__text"><p>Produto Digital, Liberação Imediata!</p>';
                            }


                            if($nome_frete == 'Correios'){ ?>

                                 <div class="checkout__order__total">Calcular Frete<br> 
                            <div class="checkout__input py-2">
                               
                                    <form id="frm" method="post">
                                    <div class="row">
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                             <input type="hidden" value="<?php echo @$peso ?>" name="total_peso" id="total_peso">

                                             <div class="checkout__input">
                                            <input type="text" name="cep2" id="cep2" placeholder="CEP">
                                             </div>
                                        </div>
                                         <div class="col-md-5">
                                             <div class="checkout__input">
                                             <select name="codigo_servico" id="codigo_servico">
                                            <option value="0">Escolher</option>
                                            <option value="40010">Sedex</option>
                                            
                                            <option value="41106">PAC</option>
                                         </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                </form>
                             
                            <big><div id="listar-frete"></div></big>
                       </div>

                       

                   </div>
                                
                           <?php } ?>

                          

                      
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                            aria-selected="true">Descrição</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                            aria-selected="false">Informações</a>
                        </li>

                        <?php 
                            //totalizar avaliações
                            $query = $pdo->query("SELECT * FROM avaliacoes where id_produto = '$id_produto' ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);
                            $total_aval = @count($res);
                         ?>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                            aria-selected="false">Avaliações <span>(<?php echo $total_aval ?>)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Informações do Produto</h6>
                                <p><?php echo $desc_longa ?></p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6 class="mb-4">Informações do Produto</h6>
                                <span class="mr-3"><b>Peso</b> <?php echo $peso ?> kg</span>
                                <span class="mr-3"><b>Altura</b> <?php echo $altura ?> cm</span>
                                <span class="mr-3"><b>Largura</b> <?php echo $largura ?> cm</span>
                                <span class="mr-3"><b>Comprimento</b> <?php echo $comprimento ?> cm</span>
                                <span class="mr-3"><b>Modelo</b> <?php echo $modelo ?></span>
                                <span class="mr-3"><b>Estoque</b> <?php echo $estoque ?></span>
                               
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Avaliações dos Clientes</h6>
                                <div class="mt-2">

                                    <?php 
                                    $query4 = $pdo->query("SELECT * from avaliacoes where id_produto = '$id_produto' order by id desc");
                                $res4 = $query4->fetchAll(PDO::FETCH_ASSOC);
                                for ($i2=0; $i2 < count($res4); $i2++) { 
                                    foreach ($res4[$i2] as $key => $value) {
                                    }

                                    $id_usuario = $res4[$i2]['id_usuario'];
                                    $texto = $res4[$i2]['texto'];
                                    $nota = $res4[$i2]['nota'];
                                    $data = $res4[$i2]['data'];
                                    $id_aval = $res4[$i2]['id'];
                                     $data = implode('/', array_reverse(explode('-', $data)));

                                      $query = $pdo->query("SELECT * from usuarios where id = '$id_usuario'");
                                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                                $nome_cliente = $res[0]['nome'];

                                if($nota == 5){
                                    $nota_texto = 'Excelente!';
                                }

                                if($nota == 4){
                                    $nota_texto = 'Muito Bom!';
                                }

                                if($nota == 3){
                                    $nota_texto = 'Bom!';
                                }

                                if($nota == 2){
                                    $nota_texto = 'Mediano!';
                                }

                                if($nota == 1){
                                    $nota_texto = 'Ruim!';
                                }


                                     ?>

                                     <?php if($nota >= $nota_minima){ ?>

                                    <div class="mb-4">
                                        <span class="mr-4"><u><i><?php echo $nome_cliente ?></i></u></span>
                                        <span class="mr-4"><i><?php echo $data ?></i></span>

                                        <?php 
                                            for ($i3=0; $i3 < $nota; $i3++) {
                                                echo '<i class="fa fa-star mr-1 text-warning"></i>';
                                            }
                                         ?>

                                         - <span class="mr-2 text-muted"><i><?php echo @$nota_texto ?></i></span>

                                         <?php 
                                            if($nivel_usuario == 'Admin'){
                                          ?>
                                         <a href="produto.php?nome=<?php echo $produto_get ?>&acao=deletar&id_aval=<?php echo $id_aval ?>"><i class="fa fa-trash  text-danger"></i></a>
                                         <?php } ?>

                                        <br>
                                        <span class="text-muted"><i><small><?php echo $texto ?></small></i></span>
                                    </div>

                                <?php } } ?>

                                <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->


<?php 
  if(@$_GET['acao'] == 'deletar'){
    
    $id = $_GET['id_aval'];
    $pdo->query("DELETE from avaliacoes WHERE id = '$id'");
        
}
?>

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Produtos Relacionados</h2>
                </div>
            </div>
        </div>
        <div class="row">
        
            <div class="categories__slider owl-carousel">

            <?php 
 $query = $pdo->query("SELECT * FROM produtos where sub_categoria = '$sub_cat' and ativo = 'Sim' and estoque > 0 order by id desc  ");
 $res = $query->fetchAll(PDO::FETCH_ASSOC);

 for ($i=0; $i < count($res); $i++) { 
  foreach ($res[$i] as $key => $value) {
  }

  $nome = $res[$i]['nome'];
  $valor = $res[$i]['valor'];
  $nome_url = $res[$i]['nome_url'];
  $imagem = $res[$i]['imagem'];
  $promocao = $res[$i]['promocao'];
  $id = $res[$i]['id'];

  $valor = number_format($valor, 2, ',', '.');

  if($promocao == 'Sim'){
    $queryp = $pdo->query("SELECT * FROM promocoes where id_produto = '$id' ");
    $resp = $queryp->fetchAll(PDO::FETCH_ASSOC);
    $valor_promo = $resp[0]['valor'];
    $desconto = $resp[0]['desconto'];
    $valor_promo = number_format($valor_promo, 2, ',', '.');

    ?>

   <div class="col-lg-3 col-md-4 col-sm-6 mix sapatos fresh-meat">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg"
                        data-setbg="img/produtos/<?php echo $imagem ?>">
                        <div class="product__discount__percent">-<?php echo $desconto ?>%</div>
                        <ul class="product__item__pic__hover">
                           <li><a href="produto-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>
                           <li><a href="" onclick="irCarrinho('<?php echo $id ?>','Não')"><i class="fa fa-shopping-cart"></i></a>
                           </ul>
                       </div>
                       <div class="product__discount__item__text">

                        <h5><a href="produto-<?php echo $nome_url ?>"><?php echo $nome ?></a></h5>
                        <div class="product__item__price">R$ <?php echo $valor_promo ?> <span>R$ <?php echo $valor ?></span></div>
                    </div>
                </div>
            </div>

   <?php }else{ ?>


<div class="col-lg-3 col-md-4 col-sm-6 mix sapatos fresh-meat">
    <div class="featured__item">
        <div class="featured__item__pic set-bg" data-setbg="img/produtos/<?php echo $imagem ?>">
            <ul class="featured__item__pic__hover">
                <li><a href="produto-<?php echo $nome_url ?>"><i class="fa fa-eye"></i></a></li>

                  <li><a href="" onclick="irCarrinho('<?php echo $id ?>','Não')"><i class="fa fa-shopping-cart"></i></a>
                    
                           </ul>
            </ul>
        </div>
        <div class="featured__item__text">
            <a href="produto-<?php echo $nome_url ?>"><h6><?php echo $nome ?></h6>
                <h5>R$ <?php echo $valor ?></h5></a>
            </div>
        </div>
    </div>

<?php } } ?>

    </div>

        </div>
    </div>
</section>
<!-- Related Product Section End -->

<div class="modal" id="modal-faca-login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Faça o Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
<p>Você precisa estar logado para adicionar produtos ao carrinho!</p><p>  <a class='text-info' href='sistema'>Clique aqui para efetuar login!</a> </p>

                

            </div>
            
        </div>
    </div>
</div>


<?php
//require_once("modal-carrinho.php");
require_once("rodape.php");

?>


<script type="text/javascript">
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });
</script>






    

    
<script type="text/javascript">
    $('#btn-add-car').click(function(event){
        event.preventDefault();
    //VERIFICANDO SE O USUARIO ESTA LOGADO PARA CADASTRAR ITENS NO CARRINHO
    <?php if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Cliente'){ ?>
    
    $('#modal-faca-login').modal('show');     
    
    <?php }else{ ?>
    
    

    $.ajax({
        url:"carrinho/inserir-carrinho.php",
        method:"post",
        data: $('form').serialize(),
        dataType: "text",
        success: function(msg){
            if(msg.trim() === 'Cadastrado com Sucesso!!'){

                window.location='carrinho.php';

                }
             else{
                console.log(msg);
                $('#div-mensagem-prod').addClass('text-danger')
                $('#div-mensagem-prod').text(msg);

             }
        }
    })
    <?php }?>
})
</script>








<script type="text/javascript">
   function irCarrinho(idproduto, combo){
        event.preventDefault();
         $.ajax({
            url:"carrinho/inserir-carrinho.php",
            method:"post",
            data: {idproduto, combo},
            dataType: "text",
            success: function(msg){
                if(msg.trim() === 'Cadastrado com Sucesso!!'){
                    
                    window.location='carrinho.php';
                                         
                    }
                 else{
                    console.log(msg);
                    $('#div-mensagem-prod').addClass('text-danger')
                    $('#div-mensagem-prod').text(msg);

                 }
            }
        })
    }
</script>






<script>
function atualizarCarrinho() {

    $.ajax({
      url:  "carrinho/listar-carrinho.php",
      method: "post",
      data: $('#frm').serialize(),
      dataType: "html",
      success: function(result){
        $('#listar-carrinho').html(result)

      },
     })
}
</script>




<script type="text/javascript">
    $('#codigo_servico').change(function(event){
        event.preventDefault();

        $.ajax({
      url:  "correios/pegarDadosFrete.php",
      method: "post",
      data: $('#frm').serialize(),
      dataType: "html",
      success: function(result){

        $('#listar-frete').html(result);
        
      },
     })

    })
</script>