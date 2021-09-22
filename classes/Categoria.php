<?php

class Categoria{
    private $idCategoria;
    private $nomeCategoria;
    public function getIdCategoria(){
        return $this->idCategoria;
    }
    public function getNomeCategoria(){
        return $this->nomeCategoria;
    }
    public function setIdCategoria($id){
        $this->idCategoria = $id;
    }
    public function setNomeCategoria($nome){
        $this->nomeCategoria = $nome;
    }
    
    public function cadastrar($categoria){
        $conexao = Conexao::pegarConexao();
        
        $stmt = $conexao->prepare("INSERT INTO tbcategoria
           (nomeCategoria)
           VALUES(?)");

        $stmt->bindParam(1, $categoria->getNomeCategoria());
        $stmt->execute();

        return 'Cadastro realizado com sucesso';
    }
    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idCategoria,nomeCategoria
        FROM tbcategoria";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }
}