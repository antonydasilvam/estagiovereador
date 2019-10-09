<?php 
    
   

    include_once 'funcoes.class.php';
    include_once 'dadostelefonesuteis.php';

    $telefonesuteis = new DadosTelefonesUteis();
    $telefonesuteis->setId($_GET['ID']);
   
    $funcoes = new FuncoesTelefonesUteis();
    $funcoes->excluir($telefonesuteis);

    if($funcoes){
        echo "<center>Telefone eliminado con exito.</center>";
        
    }
    else{
        echo "<center>Error al eliminar telefone</center>";
    }
    
      ?>