<?php 
require_once('conexao.php');


class Usuario{
    
    /*
    * MÉTODO PARA CADASTRAR USUARIO NO BANCO DE DADOS
    * @param nome, cpf, telefone, email, senha, senha_confirmar, data_cadastro, senhalogin
    * @tableDB usuarios
    * @return STATUS TRUE OU FALSE DO INSERT
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    public function cadastrarUsuario($nome, $cpf, $telefone, $email, $senha, $senha_confirmar, $data_cadastro, $senhalogin){
        global $pdo;
        //VERIFICANDO SE JÁ EXISTE 
        $res = $pdo->query("SELECT * FROM usuarios where cpf = '$cpf' OR email = '$email'"); 
        $dados = $res->fetchAll(PDO::FETCH_ASSOC);
        if(count($dados) == 0){

            //CADASTRANDO USUARIO NA TABELA usuarios
            $res = $pdo->prepare("INSERT INTO usuarios (nome, cpf, telefone, email, senha, nivel, data_cadastro) VALUES (:nome, :cpf, :telefone, :email, :senha, :nivel, :data_cadastro)");

            $res->bindValue(":nome", $nome);
            $res->bindValue(":cpf", $cpf);
            $res->bindValue(":telefone", $telefone);
            $res->bindValue(":email", $email);
            $res->bindValue(":senha", $senha);
            $res->bindValue(":nivel", "cliente");
            $res->bindValue(":data_cadastro", $data_cadastro);
            $res->execute();

            //FAZENDO O LOGIN
            
            $this->logarUsuario($email, $senhalogin);




            //CADASTRANDO USUARIO NA TABELA clientes
            $res = $pdo->prepare("INSERT INTO clientes (nome, cpf, telefone, email, senha, data_cadastro) VALUES (:nome, :cpf, :telefone, :email, :senha, :data_cadastro)");

            $res->bindValue(":nome", $nome);
            $res->bindValue(":cpf", $cpf);
            $res->bindValue(":telefone", $telefone);
            $res->bindValue(":email", $email);
            $res->bindValue(":senha", $senha);
            $res->bindValue(":data_cadastro", $data_cadastro);
            $res->execute();


            //VERIFICANDO SE JA EXISTE ESSE EMAIL NO BANCO DE DADOS 
            $res = $pdo->query("SELECT * FROM emails where email = '$email'"); 
            $dados = $res->fetchAll(PDO::FETCH_ASSOC);
            if(count($dados) == 0){

                //CADASTRANDO O E-MAIL PARA TABELA emails NO DB 
                $res = $pdo->prepare("INSERT INTO emails (nome, email, ativo) VALUES (:nome, :email, :ativo)");

                $res->bindValue(":nome", $nome);
                $res->bindValue(":email", $email);
                $res->bindValue(":ativo", "Sim");
                $res->execute();


            }
            return true;

        }else{
            echo "CPF ou E-mail já Cadastrados";
        }

        
        
        
    }
    //METODO PARA TRAZER OS DADOS DO USUARIO
    public function consultarUsuario(){
        global $pdo;
        
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE (id = :id");
        $sql->bindValue(":id", $_SESSION['id']);
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
   
        
        
    }
    
    
    /*
    * MÉTODO PARA LOGAR USUARIO
    * @param email, senha
    * @tableDB usuarios
    * @return SESSION COM DADOS DO USUARIO
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    public function logarUsuario($email, $senha){
        global $pdo;
        
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE (email = :email or cpf = :cpf) AND senha = :senha");
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
            
            if($_SESSION['nivel_usuario'] == "admin"){
                echo $_SESSION['nivel_usuario'];

            }
            if($_SESSION['nivel_usuario'] == "cliente"){
                echo $_SESSION['nivel_usuario'];
            }

        }else{
            echo "Email ou senha invalidos";
        }
        
        
    }
    
    /*
    * MÉTODO PARA EDITAR USUARIO NO BANCO DE DADOS
    * @param nome, cpf, email, senha, senha_confirmar, data_cadastro, senhalogin
    * @tableDB usuarios
    * @return STATUS TRUE OU FALSE DO INSERT
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    public function editarPerfil($nome, $cpf, $email, $senha, $antigo, $id_usuario){
        global $pdo;
        //VERIFICANDO SE JÁ EXISTE 
        if($cpf != $antigo){
            $res = $pdo->query("SELECT * FROM usuarios where cpf = '$cpf' OR email = '$email'"); 
            $dados = $res->fetchAll(PDO::FETCH_ASSOC);
            if(count($dados) != 0){
            echo "CPF ou E-mail já Cadastrados";
                exit();

            }  
        }
        $res = $pdo->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, email = :email, senha = :senha WHERE id = :id");
        $res->bindValue(":nome", $nome);
        $res->bindValue(":email", $email);
        $res->bindValue(":cpf", $cpf);
        $res->bindValue(":senha", $senha);
        $res->bindValue(":id", $id_usuario);

        $res->execute();
        
        $_SESSION['nome_usuario'] = $nome;
        $_SESSION['email_usuario'] = $email;
        $_SESSION['cpf_usuario'] = $cpf;




        echo 'Editado com sucesso!';

    }
    
    
    
}