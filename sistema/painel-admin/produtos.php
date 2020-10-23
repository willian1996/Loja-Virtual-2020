<?php    
@session_start();
require_once('../conexao.php');

//Verificando se o admin esta logado na sessão
if(@$_SESSION['id_usuario'] == null and @$_SESSION['nivel_usuario'] != "admin"){
//    echo "<script language='javascript'>
//    window.location='http://localhost/Loja-Virtual-2020/index.php' </script>";
    header("Location: $dominio/index.php");
}


$pag = "produtos";
//--------------------------------------------------------------------------------
?>

<center><h3>Produtos</h3></center>
<div class="row mt-4 mb-4">
    
    <a type="button" class="btn-primary btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo">Novo produto</a>
    <a type="button" class="btn-primary btn-sm ml-3 d-block d-sm-none" href="index.php?pag=<?php echo $pag ?>&funcao=novo">+</a>
    
</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th class="hiddenOnMobile">Valor</th>
                        <th class="hiddenOnMobile">Estoque</th>
                        <th class="hiddenOnMobile">Subcategoria</th>
                        <th>Imagem</th>
                
                       
                    </tr>
                </thead>

                <tbody>

                   <?php 

                   $query = $pdo->query("SELECT * FROM produtos order by id desc ");
                   $res = $query->fetchAll(PDO::FETCH_ASSOC);

                   for ($i=0; $i < count($res); $i++) { 
                      foreach ($res[$i] as $key => $value) {
                      }

                      $nome = $res[$i]['nome'];
                      $valor = $res[$i]['valor'];
                      $estoque = $res[$i]['estoque'];
                      $sub_cat = $res[$i]['sub_categoria'];
                      $imagem = $res[$i]['imagem'];
                      $ativo = $res[$i]['ativo'];
                       
                      $id = $res[$i]['id'];

                      //recuperar o nome da categoria
                      $query2 = $pdo->query("SELECT * from sub_categorias where id = '$sub_cat' ");
                      $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                      $nome_cat = $res2[0]['nome'];

                      ?>


                    <tr>
                        <td>
                            <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Dados'>
                                <?php echo $nome ?>
                            </a>
                        </td>
                        
                        <td class="hiddenOnMobile"><?php echo $valor?></td>
                        <td class="hiddenOnMobile"><?php echo $estoque ?></td>
                        <td class="hiddenOnMobile"><?php echo $nome_cat ?></td>
                        <td>
                            <img src="../../img/produtos/<?php echo $imagem ?>" width="50">
                        </td>
                        

                    </tr>
<?php } ?>





                </tbody>
            </table>
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php 
                if (@$_GET['funcao'] == 'editar') {
                    $titulo = "Editar Registro";
                    $id2 = $_GET['id'];

                    $query = $pdo->query("SELECT * FROM produtos where id = '" . $id2 . "' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    $nome2 = $res[0]['nome'];
                    $imagem2 = $res[0]['imagem'];
                    $sub_cat2 = $res[0]['sub_categoria'];
                    $valor2 = $res[0]['valor'];
                    $estoque2 = $res[0]['estoque'];
                    $descricao2 = $res[0]['descricao'];
                    $desc_longa2 = $res[0]['descricao_longa'];
                    $tipo_envio2 = $res[0]['tipo_envio'];
                    $palavras2 = $res[0]['palavras'];
                    $ativo2 = $res[0]['ativo'];
                    $peso2 = $res[0]['peso'];
                    $largura2 = $res[0]['largura'];
                    $altura2 = $res[0]['altura'];
                    $comprimento2 = $res[0]['comprimento'];
                    $modelo2 = $res[0]['modelo'];
                    $valor_frete2 = $res[0]['valor_frete'];
//                    $nome_cat2 = $res[0]['categoria'];
                  
                                        

                } else {
                    $titulo = "Cadastrar Produto";

                }


                ?>
                
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<form id="form" method="POST">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                <label >Nome</label>
                <input value="<?php echo @$nome2 ?>" type="text" class="form-control form-control-sm" id="nome-cat" name="nome-cat" placeholder="Nome">
                </div>
            </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label >Categoria</label>
                            <select class="form-control form-control-sm" name="categoria" id="categoria">
                                <?php 
                                if (@$_GET['funcao'] == 'editar') {
                                    $query = $pdo->query("SELECT * from categorias where id = '$nome_cat2' ");
                                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
                                    $nomeCat = $res[0]['nome'];
                                    echo "<option value='".$nome_cat2."' >" . $nomeCat . "</option>";
                                }

                                $query2 = $pdo->query("SELECT * from categorias order by nome asc ");
                                $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                                for ($i=0; $i < count($res2); $i++) { 
                                    foreach ($res2[$i] as $key => $value) {
                                    }

                                    if(@$nomeCat != $res2[$i]['nome']){
                                       echo "<option value='".$res2[$i]['id']."' >" . $res2[$i]['nome'] . "</option>"; 
                                   }


                               }


                               ?>
                           </select>
<!--
                           <input  type="hidden" id="txtCat" name="txtCat">
                           <input value="<?php echo $sub_cat2 ?>" type="hidden" id="txtSub" name="txtSub">
-->
                       </div>


            </div>
            <div class="col-md-3">
                 <div class="form-group">
                    <label >Subcategoria</label>
                     <span id="listar-subcat"></span>

                     <input type="hidden"  id="txtCat" name="txtCat" placeholder="txtCat">
                </div>


            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label >Valor</label>
                    <input value="<?php echo @$valor2 ?>" type="text" class="form-control form-control-sm" id="valor" name="valor" placeholder="Valor">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label >Descrição Curta <small>(500 caracteres)</small></label>
            <textarea maxlength="500" class="form-control form-control-sm" id="descricao" name="descricao"><?php echo @$descricao2 ?></textarea>
        </div>
        <div class="form-group">
            <label >Descrição Longa</label>
            <textarea maxlength="1000" class="form-control form-control-sm" id="desc_longa2" name="desc_longa2"><?php echo @$desc_longa2 ?></textarea>
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label >Estoque</label>
                    <input value="<?php echo @$estoque2 ?>" type="number" class="form-control form-control-sm" id="estoque" name="estoque" placeholder="Quantidade estoque">
                </div>
            </div>
            
             <div class="col-md-3">
                
                   <div class="form-group">
                    <label >Tipo Envio</label>
                     <select class="form-control form-control-sm" name="tipo_envio" id="tipo_envio">
                                <?php 
                                if (@$_GET['funcao'] == 'editar') {
                                    $query = $pdo->query("SELECT * from tipo_envios where id = '$tipo_envio2' ");
                                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
                                    $nomeTipo = $res[0]['nome'];
                                    echo "<option value='".$tipo_envio2."' >" . $nomeTipo . "</option>";
                                }

                                $query2 = $pdo->query("SELECT * from tipo_envios order by nome asc ");
                                $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                                for ($i=0; $i < count($res2); $i++) { 
                                    foreach ($res2[$i] as $key => $value) {
                                    }

                                    if(@$nomeTipo != $res2[$i]['nome']){
                                       echo "<option value='".$res2[$i]['id']."' >" . $res2[$i]['nome'] . "</option>"; 
                                   }


                               }


                               ?>
                           </select>
               
                     </div>
            </div>
        
        
        
        </div>





        <div class="form-group">
            <label >Imagem</label>
            <input type="file" value="<?php echo @$imagem2 ?>"  class="form-control-file" id="imagem" name="imagem" onChange="carregarImg();">
        </div>

        <?php if(@$imagem2 != ""){ ?>
             <img src="../../img/sub-categorias/<?php echo $imagem2 ?>" width="200" height="200" id="target">
        <?php  }else{ ?>
        <img src="../../img/sub-categorias/sem-foto.png" width="200" height="200" id="target">
        <?php } ?>




        <small>
            <div id="mensagem">

            </div>
        </small> 

    </div>



    <div class="modal-footer">



    <input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
    <input value="<?php echo @$nome2 ?>" type="hidden" name="antigo" id="antigo">

    <?php if (@$_GET['funcao'] == 'editar') { ?>
    <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo @$_GET['id'] ?>" class='btn btn-danger mr-1' title='Excluir Registro'>Excluir</a>
    <?php } ?>
        <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
    </div>
</form>
        </div>
    </div>
</div>






<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p>Deseja realmente Excluir este Registro?</p>

                <div align="center" id="mensagem_excluir" class="">

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
                <form method="post">

                    <input type="hidden" id="id"  name="id" value="<?php echo @$_GET['id'] ?>" required>

                    <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php 

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "novo") {
    echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "editar") {
    echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir") {
    echo "<script>$('#modal-deletar').modal('show');</script>";
}

?>




<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
<script type="text/javascript">
    $("#form").submit(function () {
        var pag = "<?=$pag?>";
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: pag + "/inserir.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {

                $('#mensagem').removeClass()

                if (mensagem.trim() == "Salvo com Sucesso!!") {
                    
                    //$('#nome').val('');
                    //$('#cpf').val('');
                    $('#btn-fechar').click();
                    window.location = "index.php?pag="+pag;

                } else {

                    $('#mensagem').addClass('text-danger')
                }

                $('#mensagem').text(mensagem)

            },

            cache: false,
            contentType: false,
            processData: false,
            xhr: function () {  // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function () {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
            }
        });
    });
</script>





<!--AJAX PARA EXCLUSÃO DOS DADOS -->
<script type="text/javascript">
    $(document).ready(function () {
        var pag = "<?=$pag?>";
        $('#btn-deletar').click(function (event) {
            event.preventDefault();

            $.ajax({
                url: pag + "/excluir.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function (retorno) {
                var retorno = JSON.parse(retorno);

                    if (retorno.deucerto) {
                        console.log(retorno);
                        
                        window.location = "index.php?pag="+pag;
                        
    
                    }else{
                        console.log(retorno);
                        $('#mensagem_excluir').addClass('text-danger');
                        $('#mensagem_excluir').text(retorno.mensagem);
                    }



                },

            })
        })
    })
</script>



<!--SCRIPT PARA CARREGAR IMAGEM -->
<script type="text/javascript">

    function carregarImg() {

        var target = document.getElementById('target');
        var file = document.querySelector("input[type=file]").files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            target.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);


        } else {
            target.src = "";
        }
    }

</script>





<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').dataTable({
            "ordering": false
        })

    });
</script>



<!--AJAX PARA LISTAR OS DADOS DA SUB CATEGORIA NO SELECT -->
<script type="text/javascript">
    $(document).ready(function () {
        document.getElementById('txtCat').value = document.getElementById('categoria').value;
        listarSubCat();

    })
</script>

<script type="text/javascript">
    function listarSubCat() {
        var pag = "<?=$pag?>";
        $.ajax({
            url: pag + "/listar-subcat.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "html",
            success: function (result) {

                $('#listar-subcat').html(result);
            }
        })
    }
</script>


<!-- Script para buscar pelo select -->
<script type="text/javascript">

    $('#categoria').change(function () {
        document.getElementById('txtCat').value = $(this).val();
        listarSubCat();
    })

</script>




