<?php
class DadosNoticias {

    private $id;
    private $fktiponoticia;
    private $titulo;
    private $descricao;
    
    public function getId() {
        return $this->id;
    }

    public function getFktiponoticia() {
        return $this->fktiponoticia;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFktiponoticia($fktiponoticia) {
        $this->fktiponoticia = $fktiponoticia;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}