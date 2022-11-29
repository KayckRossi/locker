<?php

final class Aluno extends Pessoa {

    private $rm;
    private $curso;
    private $purl;
    private $ativo;

    public function __construct() {
        parent::__construct();
    }

    public function getRm() {
        return $this->rm;
    }
    
    public function getCurso() {
        return $this->rm;
    }

    public function getPurl(){
        return $this->purl;
    }
    
    public function getAtivo(){
        return $this->ativo;
    }
    
    public function setRm($rm) {
        $this->rm = $rm;
    }

    public function setCurso(Curso $curso) {
        $this->curso[] = $curso;
    }

    public function setPurl($purl) {
        $this->purl = $purl;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

   

    

}

?>