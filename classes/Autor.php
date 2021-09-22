<?php

class Autor{
    private $idAutor;
    private $nomeAutor;
    private $dataNascimentoAutor;
    private $dataFalecimentoAutor;
    private $nacionalidadeAutor;
    public function getIdAutor(){
        return $this->idAutor;
    }
    public function getNomeAutor(){
        return $this->nomeAutor;
    }
    public function getDataNascimentoAutor(){
        return $this->dataNascimentoAutor;
    }
    public function getDataFalecimentoAutor(){
        return $this->dataFalecimentoAutor;
    }
    public function getNacionalidadeAutor(){
        return $this->nacionalidadeAutor;
    }

    public function setIdAutor($id){
        $this->idAutor= $id;
    }
    public function setNomeAutor($nome){
        $this->nomeAutor= $nome;
    }
    public function setDataNascimentoAutor($dataNascimentoAutor){
        $this->dataNascimentoAutor = $dataNascimentoAutor;
    }
    public function setDataFalecimentoAutor($dataFalecimentoAutor){
        $this->dataFalecimentoAutor = $dataFalecimentoAutor;
    }
    public function setNacionalidadeAutor($nacionalidade){
        $this->nacionalidadeAutor = $nacionalidade;
    }

    public function cadastrar($autor){
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("INSERT INTO tbautor
           (nomeAutor,dataNascimentoAutor,dataFalecimentoAutor,nacionalidadeAutor)
           VALUES(?,?,?,?)");

        $stmt->bindParam(1, $autor->getNomeAutor());
        $stmt->bindParam(2, $autor->getDataNascimentoAutor());
        $stmt->bindParam(3, $autor->getDataFalecimentoAutor());
        $stmt->bindParam(4, $autor->getNacionalidadeAutor());
        $stmt->execute();

        return 'Cadastro realizado com sucesso';
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idAutor,nomeAutor,dataNascimentoAutor,dataFalecimentoAutor,nacionalidadeAutor
        FROM tbautor";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }
}