<?php

include_once 'dadosnoticias.php';

include_once '../../conexao.php';

class FuncoesNoticias extends Conexao {

    function inserir(DadosNoticias $dadosnoticias) {

        try {
            $conecta = $this->conectar();
            $conecta->beginTransaction();
            $sql = "INSERT INTO noticias(titulo, tiponoticia,descricao, datant, portada) VALUES(:titulo, :tiponoticia,:descricao, :datant, :portada)";
            $statement = $conecta->prepare($sql);
            $statement->bindvalue(":titulo", $dadosnoticias->getTitulo());
            $statement->bindvalue(":tiponoticia", $dadosnoticias->getTiponoticia());
            $statement->bindvalue(":descricao", $dadosnoticias->getDescricao());
            $statement->bindvalue(":datant", $dadosnoticias->getDatant());
            $statement->bindvalue(":portada", $dadosnoticias->getPortada());
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
            $sql = "SELECT * FROM noticias order by id DESC";
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

function listarlimit() {
    try {
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "SELECT * FROM noticias order by id DESC LIMIT 9";
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

function listarUnico($idunico) {
    try {
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "SELECT * FROM noticias WHERE id='$idunico'";
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


function listarImagens($idunico) {
    try {
        $conecta = $this->conectar();
        $conecta->beginTransaction();
        $sql = "SELECT * FROM noticias, imagens WHERE noticias.id='$idunico' AND imagens.fk_noticia='$idunico'";
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


}