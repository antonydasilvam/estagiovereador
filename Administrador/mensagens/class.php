<?php
class DadosGabinete {

    private $id;
    private $nome;
    private $cargo;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

}

