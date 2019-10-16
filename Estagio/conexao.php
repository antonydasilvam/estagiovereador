<?php

class Conexao {

    public function conectar() {
        try {
            $conexao = new PDO("mysql:host=localhost;dbname=vereador;charset=UTF8", "root", "");
            return $conexao;
            
        } catch (PDOException $exc) {
            print($exc->getMessage());
        }
    }
}

