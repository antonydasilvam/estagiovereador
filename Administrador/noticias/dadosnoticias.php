<?php
class DadosNoticias {

    private $id;
    private $tiponoticia;
    private $titulo;    
    private $descricao;
    private $datant;
    public $portada;
    
    public function getId() {
        return $this->id;
    }

    public function getTiponoticia() {
        return $this->tiponoticia;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    } 
    
    public function getDatant() {
        return $this->datant;
    }

    public function getPortada() {
        return $this->portada;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTiponoticia($tiponoticia) {
        $this->tiponoticia = $tiponoticia;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    public function setDatant($datant) {
        $this->datant = $datant;
    }
    
    public function setPortada($portada) {
        $this->portada = $portada;
    }

}