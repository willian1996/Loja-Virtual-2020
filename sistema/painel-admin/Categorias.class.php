<?php 
require_once('../../conexao.php');


class Categorias{
    
    public function cadastrarCategoria($nome, $antigo, $id, $nome_url){
        global $pdo;
        if($nome != $antigo){
            $res = $pdo->query("SELECT * FROM categorias where nome = '$nome'"); 
            $dados = $res->fetchAll(PDO::FETCH_ASSOC);
            if(@count($dados) > 0){
                echo 'Categoria já Cadastrada no Banco!';
                exit();
            }
        }


        //SCRIPT PARA SUBIR FOTO NO BANCO
        $caminho = '../../../img/categorias/' .@$_FILES['imagem']['name'];
        if (@$_FILES['imagem']['name'] == ""){
            $imagem = "sem-foto.jpg";
        }else{
            $imagem = @$_FILES['imagem']['name']; 
        }

        $imagem_temp = @$_FILES['imagem']['tmp_name']; 

        $ext = pathinfo($imagem, PATHINFO_EXTENSION);   
        if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 
            move_uploaded_file($imagem_temp, $caminho);
        }else{
            echo 'Extensão de Imagem não permitida!';
            exit();
        }


        if($id == ""){
            $res = $pdo->prepare("INSERT INTO categorias (nome, nome_url, imagem) VALUES (:nome, :nome_url, :imagem)");
            $res->bindValue(":imagem", $imagem);
        }else{

            if($imagem == "sem-foto.jpg"){
                $res = $pdo->prepare("UPDATE categorias SET nome = :nome, nome_url = :nome_url WHERE id = :id");
            }else{
                $res = $pdo->prepare("UPDATE categorias SET nome = :nome, nome_url = :nome_url, imagem = :imagem WHERE id = :id");
                $res->bindValue(":imagem", $imagem);
            }

            $res->bindValue(":id", $id);
        }

        $res->bindValue(":nome", $nome);
        $res->bindValue(":nome_url", $nome_url);





        $res->execute();


        echo 'Salvo com Sucesso!';
        
        
        
    }
    
    public function cadastrarSubcategorias($nome, $antigo, $id,$id_cat, $nome_url){
        global $pdo;
        
        if($nome != $antigo){
            $res = $pdo->query("SELECT * FROM sub_categorias where nome = '$nome'"); 
            $dados = $res->fetchAll(PDO::FETCH_ASSOC);
            if(@count($dados) > 0){
                    echo 'SubCategoria já Cadastrada no Banco!';
                    exit();
                }
        }


        //SCRIPT PARA SUBIR FOTO NO BANCO
        $caminho = '../../../img/sub-categorias/' .@$_FILES['imagem']['name'];
        if (@$_FILES['imagem']['name'] == ""){
          $imagem = "sem-foto.png";
        }else{
          $imagem = @$_FILES['imagem']['name']; 
        }

        $imagem_temp = @$_FILES['imagem']['tmp_name']; 

        $ext = pathinfo($imagem, PATHINFO_EXTENSION);   
        if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 
        move_uploaded_file($imagem_temp, $caminho);
        }else{
            echo 'Extensão de Imagem não permitida!';
            exit();
        }


        if($id == ""){
            $res = $pdo->prepare("INSERT INTO sub_categorias (nome, nome_url, imagem, id_categoria) VALUES (:nome, :nome_url, :imagem, :id_categoria)");
            $res->bindValue(":imagem", $imagem);
        }else{

            if($imagem == "sem-foto.jpg"){
                $res = $pdo->prepare("UPDATE sub_categorias SET nome = :nome, nome_url = :nome_url, id_categoria = :id_categoria WHERE id = :id");
            }else{
                $res = $pdo->prepare("UPDATE sub_categorias SET nome = :nome, nome_url = :nome_url, imagem = :imagem, id_categoria = :id_categoria WHERE id = :id");
                $res->bindValue(":imagem", $imagem);
            }

            $res->bindValue(":id", $id);
        }

            $res->bindValue(":nome", $nome);
            $res->bindValue(":nome_url", $nome_url);
            $res->bindValue(":id_categoria", $id_cat);





            $res->execute();


        echo 'Salvo com Sucesso!!';

        
    }
    
    
    public function excluirCategoria($id){
        global $pdo;
        $sql = $pdo->query("DELETE from categorias WHERE id = '$id'");
        if($sql->rowCount() > 0){
            $retorno['deucerto'] = true;
            $retorno['mensagem'] = "Excluído com Sucesso!!";
            return $retorno;
        }else{
            $retorno['deucerto'] = false;
            $retorno['mensagem'] = "Erro no servidor!";
            return $retorno;
        }
    }
    
    
    public function excluirSubcategoria($id){
        global $pdo;
        $sql = $pdo->query("DELETE from sub_categorias WHERE id = '$id'");
        if($sql->rowCount() > 0){
            $retorno['deucerto'] = true;
            $retorno['mensagem'] = "Excluído com Sucesso!!";
            return $retorno;
        }else{
            $retorno['deucerto'] = false;
            $retorno['mensagem'] = "Erro no servidor!";
            return $retorno;
        }
    }
    
    
    
    
    
}


