<?php

class Conexao {

    public function conectar() {
        try {
            $conexao = new PDO("mysql:host=127.0.0.1;port=3307;dbname=vereador;charset=UTF8", "root", ""); // DEPENDIENDO DEL PC TENGO QUE CAMBIAR PORT
            return $conexao;
            
        } catch (PDOException $exc) {
            print($exc->getMessage());
        }
    }
}

