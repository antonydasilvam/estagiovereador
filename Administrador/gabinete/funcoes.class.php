<?php

include_once 'dadosgabinete.php';

include_once '../../conexao.php';

class Funcoes extends Conexao {

    function inserir(DadosGabinete $gabinete) {

        try {
            $conecta = $this->conectar();
            $conecta->beginTransaction();
            $sql = "INSERT INTO gabinete(nome,cargo,foto) VALUES(:nome,:cargo,:foto)";
            $statement = $conecta->prepare($sql);
            $statement->bindvalue(":nome", $gabinete->getNome());
            $statement->bindvalue(":cargo", $gabinete->getCargo());
            $statement->bindvalue(":foto", $gabinete->getFoto());
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
            $sql = "SELECT * FROM gabinete order by nome";
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


       
function excluir(DadosGabinete $gabinete){
    try{
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "DELETE FROM gabinete WHERE id=:id";
        $statement = $conecta->prepare($sql);
        $statement->bindValue(":id", $gabinete->getId());
       
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


function listarUnico(DadosGabinete $gabinete) {
    try {
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "SELECT * FROM gabinete WHERE id=:id";
        $listar = $conecta->prepare($sql);
        $listar->bindValue(":id", $gabinete->getId());
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



function editar(DadosGabinete $gabinete) {

    try {
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "UPDATE gabinete SET nome=:nome, cargo=:cargo, foto=:foto WHERE id=:id";
        $statement = $conecta->prepare($sql);
        $statement->bindValue(":id", $gabinete->getId());
        $statement->bindvalue(":nome", $gabinete->getNome());
        $statement->bindvalue(":cargo", $gabinete->getCargo());
        $statement->bindvalue(":foto", $gabinete->getFoto());
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






















}
    