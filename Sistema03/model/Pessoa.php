<?php
class Pessoa{
  private $descricao, $ValorRenda, $Data;

  public function setdata($Data){
    $this->data=$Data;
  }
  public function getDataBase(){
    return $this->data;
  }
  public function setdescricao($descricao){
    $this->descricao = $descricao;
  }
  public function setvalorrenda($ValorRenda){
    $this->valorrenda = $ValorRenda;
  }
  public function getvalorrenda(){
    return $this->valorrenda;
  }
  public function cadastrar($descricao, $ValorRenda, $Data){
    $this->setdescricao($descricao);
    $this->setValorrenda($ValorRenda);
    $this->setData($Data);

    echo $sqlInsert = "insert into pessoa
    
    (descricao, valorrenda, data)
    
    values
    
   ('{$this->getdescricao()}','{$this->getvalorrenda()}','{$this->getdata()}')";
   

    include("Conexao.php");

    $conectar = new Conexao();

    if($retornoInsert = $conectar->getConectar()->query($sqlInsert)){
      return 1;
    }else {
      return 0;
    }
  }
  public function listar(){
    $lista = "select * from pessoa";
    include ("Conexao.php");
    $objetoListar = new Conexao();

    $retornoBanco = $objetoListar->getConectar()->query($lista);
    $dados = array();

    while($temp = $retornoBanco->fetch_array()) {
      $dados[]=$temp;
    }
    return $dados;

    
  }
}
?>
