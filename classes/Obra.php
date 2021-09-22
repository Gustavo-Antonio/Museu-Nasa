<?php

class Obra{
    private $idObra;
    private $nomeObra;
    private $dataObra;
    private $idCategoria;
    private $idPeriodo;
    private $idAutor;

    public function getIdObra(){
        return $this->idObra;
    }
    public function setIdObra($idObra){
        $this->idObra = $idObra;
    }
    public function getNomeObra(){
        return $this->nomeObra;
    }
    public function setNomeObra($nomeObra){
        $this->nomeObra = $nomeObra;
    }
    public function getDataObra(){
        return $this->dataObra;
    }
    public function setDataObra($dataObra){
        $this->dataObra = $dataObra;
    }
    public function getIdAutor(){
        return $this->idAutor;
    }
    public function setIdAutor($idAutor){
        $this->idAutor = $idAutor;
    }
    public function getIdCategoria(){
        return $this->idCategoria;
    }
    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }
    public function getIdPeriodo(){
        return $this->idPeriodo;
    }
    public function setIdPeriodo($idPeriodo){
       $this->idPeriodo = $idPeriodo;
   }




   public function cadastrar($obra){
    $conexao = Conexao::pegarConexao();
    $stmt = $conexao->prepare("INSERT INTO tbobra
     (nomeObra,dataObra,idCategoria,idPeriodo,idAutor)
     VALUES(?,?,?,?,?)");
    
    $stmt->bindParam(1, $obra->getNomeObra());
    $stmt->bindParam(2, $obra->getDataObra());
    $stmt->bindParam(3, $obra->getIdCategoria());
    $stmt->bindParam(4, $obra->getIdPeriodo());
    $stmt->bindParam(5, $obra->getIdAutor());
    $stmt->execute();

    return 'Cadastro realizado com sucesso';
}
 public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idObra, 
        nomeObra,dataObra,nomeCategoria,nomePeriodo,nomeAutor
        FROM tbObra INNER JOIN tbAutor
        ON tbObra.idAutor = tbAutor.idAutor
        INNER JOIN tbCategoria
        ON tbObra.idCategoria = tbCategoria.idCategoria
        INNER JOIN tbPeriodo
        ON tbObra.idPeriodo = tbPeriodo.idPeriodo";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }
}