<?php
class DadosImagens {

    private $id;
    public $imagem;
    private $Fknoticia;
    
    public function getId() {
        return $this->id;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getFknoticia() {
        return $this->fknoticia;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }
    
    public function setFknoticia($fknoticia) {
        $this->fknoticia = $fknoticia;
    }

}

