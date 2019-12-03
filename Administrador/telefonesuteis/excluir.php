<?php 
    
   

    include_once 'funcoes.class.php';
    include_once 'dadostelefonesuteis.php';

    $telefonesuteis = new DadosTelefonesUteis();
    $telefonesuteis->setId($_GET['ID']);
   
    $funcoes = new FuncoesTelefonesUteis();
    $funcoes->excluir($telefonesuteis);
    
    if($funcoes){
        exit(header("Location:listar.php"));
        
    }
    else{
        echo "<center>Error al eliminar telefone</center>";
    }
    
      ?>