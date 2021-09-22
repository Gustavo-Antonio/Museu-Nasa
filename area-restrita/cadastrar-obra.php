<?php 
   require_once 'global.php';
     try{
        header("Location: index-area-restrita.php");
        $obra = new Obra();
        $obra->setNomeObra($_POST['txtNomeObra']);
        $obra->setDataObra($_POST['dataObra']);
        $obra->setIdCategoria($_POST['tipoCategoria']);
        $obra->setIdPeriodo($_POST['tipoPeriodo']);
        $obra->setIdAutor($_POST['tipoAutor']);

        echo $obra->cadastrar($obra);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>