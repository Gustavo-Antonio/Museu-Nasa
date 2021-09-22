<?php

class Imagem
{
    private $idImagem;
    private $descricaoImagem;
    private $caminhoImagem;
    private $nomeImagem;
    private $idObra;
    private $textoImagem;

    public function getIdImagem(){
        return $this->idImagem;
    }
    public function setIdImagem($idImagem){
        $this->idImagem = $idImagem;
    }
    public function setDescricaoImagem($descricaoImagem){
        $this->descricaoImagem = $descricaoImagem;
    }
    public function getDescricaoImagem(){
        return $this->descricaoImagem;
    }
    public function setCaminhoImagem($caminhoImagem){
        $this->caminhoImagem = $caminhoImagem;
    }
    public function getCaminhoImagem(){
        return $this->caminhoImagem;
    }
    public function setNomeImagem($nomeImagem){
        $this->nomeImagem = $nomeImagem;
    }
    public function getNomeImagem(){
        return $this->nomeImagem;
    }
    public function setIdObra($idObra){
        $this->idObra = $idObra;
    }
    public function getIdObra(){
        return $this->idObra;
    }

    public function setTextoImagem($textoImagem){
        $this->textoImagem = $textoImagem;
    }
    public function getTextoImagem(){
        return $this->textoImagem;
    }

    public function cadastrar($imagem){
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("INSERT INTO tbimagem(descricaoImagem,caminhoImagem,idObra,textoImagem)VALUES(?,?,?,?)");
        $stmt->bindParam(1, $imagem->getDescricaoImagem());
        $stmt->bindParam(2, $imagem->getCaminhoImagem());
        $stmt->bindParam(3, $imagem->getIdObra());
        $stmt->bindParam(4, $imagem->getTextoImagem());
        $stmt->execute();
        return 'Cadastro realizado com sucesso';
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idImagem, descricaoImagem,caminhoImagem,dataObra,textoImagem 
        FROM tbimagem INNER JOIN tbObra 
        ON tbObra.idObra = tbimagem.idObra";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }


}
