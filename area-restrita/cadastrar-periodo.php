<?php 
   require_once 'global.php';
    try{
        header("Location: index-area-restrita.php.php");
        $periodo = new Periodo();
        $periodo->setNomePeriodo($_POST['txtNome']);
        $periodo->setDataInicioPeriodo($_POST['secInicial']);
        $periodo->setDataFimPeriodo($_POST['secFinal']);
        echo $periodo->cadastrar($periodo);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>