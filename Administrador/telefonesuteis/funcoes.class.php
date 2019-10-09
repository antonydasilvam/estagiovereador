<?php

include_once 'dadostelefonesuteis.php';

include_once '../../conexao.php';

class FuncoesTelefonesUteis extends Conexao {

    function inserir(DadosTelefonesUteis $telefonesuteis) {

        try {
            $conecta = $this->conectar();
            $conecta->beginTransaction();
            $sql = "INSERT INTO telefonesuteis(nome,numero) VALUES(:nome,:numero)";
            $statement = $conecta->prepare($sql);
            $statement->bindvalue(":nome", $telefonesuteis->getNome());
            $statement->bindvalue(":numero", $telefonesuteis->getNumero());
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
            $sql = "SELECT * FROM telefonesuteis order by nome";
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

    
function excluir(DadosTelefonesUteis $telefonesuteis){
    try{
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "DELETE FROM telefonesuteis WHERE id=:id";
        $statement = $conecta->prepare($sql);
        $statement->bindValue(":id", $telefonesuteis->getId());
       
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