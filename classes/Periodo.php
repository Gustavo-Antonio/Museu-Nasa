<?php

class Periodo{
    private $idPeriodo;
    private $nomePeriodo;
    private $dataInicioPeriodo;
    private $dataFimPeriodo;

    public function getIdPeriodo(){
        return $this->idPeriodo;
    }
    public function getNomePeriodo(){
        return $this->nomePeriodo;
    }
    public function getDataInicioPeriodo(){
        return $this->dataInicioPeriodo;
    }
    public function getDataFimPeriodo(){
        return $this->dataFimPeriodo;
    }

    public function setIdPeriodo($id){
        $this->idPeriodo= $id;
    }
    public function setNomePeriodo($nome){
        $this->nomePeriodo= $nome;
    }
    public function setDataInicioPeriodo($periodoInicial){
        $this->dataInicioPeriodo = $periodoInicial;
    }
    public function setDataFimPeriodo($periodoFinal){
        $this->dataFimPeriodo = $periodoFinal;
    }

    public function cadastrar($periodo){
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("INSERT INTO tbperiodo
                                     (nomePeriodo,dataInicioPeriodo,dataFimPeriodo)
                                     VALUES(?,?,?)");

        $stmt->bindParam(1, $periodo->getNomePeriodo());
        $stmt->bindParam(2, $periodo->getDataInicioPeriodo());
        $stmt->bindParam(3, $periodo->getDataFimPeriodo());
        $stmt->execute();

        return 'Cadastro realizado com sucesso';
    }
    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idPeriodo,nomePeriodo,dataInicioPeriodo,dataFimPeriodo
        FROM tbperiodo";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }
}