<?php 
   require_once 'global.php';
    try{
        header("Location: index-area-restrita.php");
        $autor = new Autor();
        $autor->setNomeAutor($_POST['txtNome']);
        $autor->setDataNascimentoAutor($_POST['dataNas']);
        $autor->setDataFalecimentoAutor($_POST['dataFal']);
        $autor->setNacionalidadeAutor($_POST['naci']);
        echo $autor->cadastrar($autor);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>