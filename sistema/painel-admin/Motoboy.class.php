<?php 

class Motoboy extends Conexao{
    private $custoPorKM;
    private $remetente;
    private $cidade;
    
    public function __construct(){
        parent::__construct();
    }
    
    
    //FUNÇÃO PARA SETTAR DADOS 
    public function Preparar($custoPorKM, $remetente, $cidade){
        $this->setCustoPorKM($custoPorKM);
        $this->setRemetente($remetente);
        $this->setCidade($cidade);
    }
    
    
    //FUNÇÃO PARA SALVAR NO BANCO DE DADOS 
    public function Inserir(){
        $query = "INSERT INTO {$this->prefix}motoboy ";
        $query .= "(mot_custoporkm, mot_remetente, mot_cidade) ";
        $query .= "VALUES ";
        $query .= "(:mot_custoporkm, :mot_remetente, :mot_cidade)";
        
        $params = array(
        ':mot_remetente' => $this->remetente,
        ':mot_custoporkm' => $this->custoPorKM,
        ':mot_cidade' => $this->cidade
        );
        
        if($this->ExecuteSQL($query, $params)){
            return true;
        }else{
            return false;
        }
        
        
    }
    
    
    
    
    //FUNÇÃO PARA PEGAR O ENDEREÇO DO ULTIMO REMETENTE NO BANCO DE DADOS
    public function pegarRemetente(){
//        $query = "SELECT MAX(mot_remetente) FROM {$this->prefix}motoboy";
//        
//        $this->ExecuteSQL($query);
//        return $this->TotalDados();
//        
//        $this->GetLista();
        
        return "Rua Cleuza Fátima dos Santos, Caraguatatuba - SP";

    }
    

    
    //FUNÇÃO PARA ENVIAR E TRAZER DADOS DA API DO GOOGLE 
    public function getKM($bairroDestino, $cidadeDestino){

        //deixando as string no padrão de URL: Ex: bairro: santa+terezinha

        $bairroDestino = urlencode($bairroDestino);
        $cidadeDestino = urlencode($cidadeDestino);


        $origem = urlencode($this->pegarRemetente());
        $destino = "{$bairroDestino},{$cidadeDestino},SP";


        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=" . $origem . "&destinations=" . $destino . "&key=AIzaSyAPjjfHBbaKFrN619M9f3owEWCrFasX7MY";


        $result = file_get_contents($url);



        $result = json_decode($result);


        $array = [];

        $distanciaEmKm = ($result->rows[0]->elements[0]->distance->value) / 1000;
        $tempoViagem = $result->rows[0]->elements[0]->duration->text;

        $array["km"] = $distanciaEmKm;



        return ceil($array["km"]);
    }
    
    public function ValorPorKM(){
        return 0.30;
    }
    
    
    
    
    
    
    
    
    
    
    //Getters 
    
    public function getCustoPorKM(){
        return $this->custoPorKM;
    }
    
    public function getRemetente(){
        return $this->remetente;
    }
    
    public function getCidade(){
        return $this->cidade;
    }
    
    //Setters
    
    public function setCustoPorKM($custoPorKM){
        $custoPorKM = str_replace('.', '', $custoPorKM);
        $custoPorKM = str_replace(',', '.', $custoPorKM);
        $this->custoPorKM = $custoPorKM;
    }
    
    public function setRemetente($remetente){
        $this->remetente = $remetente;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    
    
    
    
    
    
    
}