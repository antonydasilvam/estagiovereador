<?php ob_start();

    include_once '../header.php';
    include_once 'funcoes.class.php';
    include_once 'dadosgabinete.php';

    $pasta = "img/";
    $nome = $_GET['foto'];

    $foto = $pasta . $nome;

    $dadosgabinete = new DadosGabinete();
    $dadosgabinete->setId($_GET['ID']);
   

    

    if($nome){
        if(file_exists($foto)){
            unlink($foto);
            $funcoes = new Funcoes();
            $retorno = $funcoes->excluir($dadosgabinete);
            var_dump($retorno);
            if($retorno){
                exit(header("Location:listar.php"));
            } else {
                echo "Erro ao excluir";
            }
        }else{
            $funcoes = new Funcoes();
            $funcoes->excluir($dadosgabinete);
            if($retorno){
                header("Location:listar.php");
               
            } else{
                echo "Erro ao excluir";            
            }
        }
    } else{
        echo"Especifique o nome do arquivo";
    }
    


    /*if($funcoes){
        echo "<center>Membro da equipe eliminado.</center>";
        echo "<center><a href='listar.php'>Voltar</a></center>";
        
    }
    else{
        echo "<center>Erro ao eliminar membro da equipe</center>";
        echo "<center><a href='listar.php'>Voltar</a></center>";
    }*/
    
        
    include_once '../footer.php';
    ?>
    