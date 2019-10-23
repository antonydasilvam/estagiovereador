<?php 
    
   

    include_once 'funcoes.class.php';
    include_once 'dadosgabinete.php';

    $dadosgabinete = new DadosGabinete();
    $dadosgabinete->setId($_GET['ID']);
   
    $funcoes = new Funcoes();
    $funcoes->excluir($dadosgabinete);
    
    if($funcoes){
        echo "<center>Membro da equipe eliminado.</center>";
        
    }
    else{
        echo "<center>Erro ao eliminar membro da equipe</center>";
    }
    
      ?>