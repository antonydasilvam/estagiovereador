<?php

include_once 'dadosnoticias.php';

include_once '../../conexao.php';

class FuncoesNoticias extends Conexao {

    function inserir(DadosNoticias $dadosnoticias) {

        try {
            $conecta = $this->conectar();
            $conecta->beginTransaction();
            $sql = "INSERT INTO noticias(titulo,descricao, fk_tiponoticia) VALUES(:titulo,:descricao, :fktiponoticia)";
            $statement = $conecta->prepare($sql);
            $statement->bindvalue(":titulo", $dadosnoticias->getTitulo());
            $statement->bindvalue(":descricao", $dadosnoticias->getDescricao());
            $statement->bindvalue(":fktiponoticia", $dadosnoticias->getFktiponoticia());
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
            $sql = "SELECT * FROM noticias order by nome";
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

    
function excluir(DadosNoticias $dadosnoticias){
    try{
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "DELETE FROM noticias WHERE id=:id";
        $statement = $conecta->prepare($sql);
        $statement->bindValue(":id", $dadosnoticias->getId());
       
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