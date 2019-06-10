<?php

class Carro{

    public $motor;
    public $cor;
    public $pneus;
    public $pecas;
    public $painel;
    public $CV;
    public $valor;
    public $mylink;

    
    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getMotor(){
        return $this->motor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setPneus($pneus){
        $this->pneus = $pneus;
    }

    public function getPneus(){
        return $this->pneus;
    }

    public function setPecas($pecas){
        $this->pecas = $pecas;
    }
    public function getPecas(){
        return $this->pecas;
    }
    public function setPainel($painel){
        $this->painel = $painel;
    }
    public function getPainel(){
        return $this->painel;
    }
    public function setCV($CV){
        $this->CV = $CV;
    }
    public function getCV(){
        return $this->CV;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setMylink($mylink){
        $this->mylink= $mylink;
    }
    public function getMylink(){
        return $this->mylink;
    }


}