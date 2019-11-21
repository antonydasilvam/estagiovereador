<?php

include_once 'dadosadministradores.php';

include_once '../../conexao.php';

class FuncoesAdministradores extends Conexao {

   /* function editar(DadosAdministradores $administradores) {


    }*/



    function login($usuario, $senha) {

        try {
            $conecta = $this->conectar();
            $conecta->beginTransaction();
            $sql = "SELECT * FROM administradores WHERE usuario='$usuario' AND senha='$senha'";
            $listar = $conecta->prepare($sql);
            $listar->execute();

            $retorno = $listar->fetchColumn();

            return $retorno;

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

    
  /*  function verificardados($usuario, $senha) {

        // var_dump($usuario, $senha);
         try {
             $conecta = $this->conectar();
             $conecta->beginTransaction();
             $verificardados = "SELECT count(id) as total FROM administradores WHERE usuario='$usuario' AND senha='$senha'";
             $statment = $conecta->prepare($verificardados);
             $execute = $statment->execute();
             //var_dump($sql, $retorno);die;
             //return $retorno;
             //$listar->execute();
             //return $listar->fetchAll();

if(!$execute){
throw new PDOException();
}
$resultado = $statment->fetchAll();






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
*/




}