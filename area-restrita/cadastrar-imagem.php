<?php

try{
 header("Location:index-area-restrita.php");
 require_once 'global.php';
 $imagem = new Imagem();
 $imagem->setDescricaoImagem($_POST['descricao']);
 $imagem->setIdObra($_POST['tipoObra']);
 $imagem->setTextoImagem($_POST['textoImagem']);
 $imagem->nomeimagem = $_FILES['imagem']['name'];
 $arquivo = $_FILES['imagem']['tmp_name'];
 $imagem->caminhoimagem = "images/";
 move_uploaded_file($arquivo, $imagem->caminhoimagem.$imagem->nomeimagem);
 echo $imagem->caminhoimagem.$imagem->nomeimagem;
 $imagem->setCaminhoImagem($imagem->caminhoimagem.$imagem->nomeimagem);
 echo $imagem->cadastrar($imagem);
}
catch(Exception $e){
  echo '<pre>';
  print_r($e);
  echo '</pre>';
  echo $e->getMessage();
}  
?>