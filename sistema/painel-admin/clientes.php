<?php 
$pag = "clientes";
require_once("../../conexao.php"); 
@session_start();
//Verificando se o admin esta logado na sessão
if(@$_SESSION['id_usuario'] == null and @$_SESSION['nivel_usuario'] != "admin"){
//    echo "<script language='javascript'>
//    window.location='http://localhost/Loja-Virtual-2020/index.php' </script>";
    header("Location: $dominio/index.php");
}


?>



<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Cartões</th>
                    </tr>
                </thead>

                <tbody>

                 <?php 

                 $query = $pdo->query("SELECT * FROM clientes order by id desc ");
                 $res = $query->fetchAll(PDO::FETCH_ASSOC);

                 for ($i=0; $i < count($res); $i++) { 
                  foreach ($res[$i] as $key => $value) {
                  }

                  $nome = $res[$i]['nome'];
                  $cpf = $res[$i]['cpf'];
                  $telefone = $res[$i]['telefone'];
                  $email = $res[$i]['email'];
                  $cartoes = $res[$i]['cartoes'];


                  $id = $res[$i]['id'];

                  if($cartoes == ""){
                    $cartoes = 0;
                  }

                  ?>


                  <tr>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $cpf ?></td>
                    <td><a href="https://api.whatsapp.com/send?phone=55<?php echo $telefone."&text=Oi%20$nome%20" ?>" target="_blank"><?php echo $telefone ?></a></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $cartoes ?></td>



                </tr>
            <?php } ?>





        </tbody>
    </table>
</div>
</div>
</div>









<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').dataTable({
            "ordering": false
        })

    });
</script>



