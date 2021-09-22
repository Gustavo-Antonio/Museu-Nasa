<?php 
require_once 'global.php';
try{
    header("Location: index-area-restrita.php");
    $categoria = new Categoria();
    $categoria->setNomeCategoria($_POST['txtNome']);
    echo $categoria->cadastrar($categoria);
}
catch(Exception $e){
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>