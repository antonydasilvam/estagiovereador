<?php ob_start();

    include_once '../header.php';
    include_once 'funcoes.class.php';
    include_once 'dadosnoticias.php';

    $pasta = "portadas/";
    $nome = $_GET['portada'];

    $portada = $pasta . $nome;

    $dadosnoticias = new DadosNoticias();
    $dadosnoticias->setId($_GET['ID']);
   

    

    if($nome){
        if(file_exists($portada)){
            unlink($portada);
            $funcoes = new FuncoesNoticias();
            $retorno = $funcoes->excluir($dadosnoticias);
            var_dump($retorno);
            if($retorno){
                exit(header("Location:listar.php"));
            } else {
                echo "Erro ao excluir";
            }
        }else{
            $funcoes = new FuncoesNoticias();
            $funcoes->excluir($dadosnoticias);
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