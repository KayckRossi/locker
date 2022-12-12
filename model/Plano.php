<?php

class Plano {

    private $id;
    private $plano;
    private $valor;
    private $duracao;
    private $status;

    function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function getPlano() {
        return $this->plano;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getStatus() {
        return $this->status;
    }
    public function getDuracao(){
        return $this->duracao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPlano($plano) {
        $this->plano = $plano;
    }
    
    public function setValor($valor) {
        $this->valor = $valor;
    }
    
    public function setStatus($status) {
        $this->status = $status;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

}

?>