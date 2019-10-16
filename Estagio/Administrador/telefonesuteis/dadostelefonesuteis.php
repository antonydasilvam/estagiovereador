<?php
class DadosTelefonesUteis {

    private $id;
    private $nome;
    private $numero;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNumero() {
        return $this->numero;
    }


    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

}

