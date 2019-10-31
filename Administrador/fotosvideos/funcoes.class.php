<?php

include_once 'dadosimagens.php';

include_once '../../conexao.php';

class FuncoesImagens extends Conexao {

    function inserir(DadosImagens $imagens) {

        try {
            $conecta = $this->conectar();
            $conecta->beginTransaction();
            $sql = "INSERT INTO imagens(imagem,fk_noticia) VALUES(:imagem,:fknoticia)";
            $statement = $conecta->prepare($sql);
            $statement->bindvalue(":imagem", $imagens->getImagem());
            $statement->bindvalue(":fknoticia", $imagens->getFknoticia());
            $execute = $statement->execute();
            if ($execute == true) {
                $conecta->commit();

                return TRUE;
            }
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {//comprova se uma existe e se  está ativa
                $conecta->rollBack();  //desfaz uma transação 
            }
            print($exc->getMessage()); //obtema mensagem de excução
            return FALSE;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }



    function listar() {
        try {
            $conecta = $this->conectar();
            $conecta->beginTransaction();
            $sql = "SELECT * FROM imagens order by fk_noticia";
            $listar = $conecta->prepare($sql);
            $listar->execute();

            return $listar->fetchAll();
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {//comprova se uma existe e se  está ativa
                $conecta->rollBack();  //desfaz uma transação 
            }
            print($exc->getMessage()); //obtema mensagem de excução
            return array();
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }


       
function excluir(DadosImagens $imagens){
    try{
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "DELETE FROM imagens WHERE id=:id";
        $statement = $conecta->prepare($sql);
        $statement->bindValue(":id", $imagens->getId());
       
    $statement->execute();
    
    if ($statement == true) {
        $conecta->commit();
        return TRUE;
 }
} catch (PDOException $exc) {
    if ((isset($conecta)) && ($conecta->inTransaction())) {
        $conecta->rollBack();
    }
    print($exc->getMessage());
    return FALSE;
} finally {
    if (isset($conecta)) {
        unset($conecta);
    }
}
}


}