<?php

abstract class SerVivo{
    
    private $vivo;
    private $pontosDeVida;
    private $poderDeAtaque;
    private $superAtaque;
    private $fraqueza;
    private $maxPontosDeVida = 100;
    private $maxPontosDeAtaque = 30;
    
    
    function __construct(){
        $this->vivo = true;
        $this->pontosDeVida = rand(0,$this->maxPontosDeVida);
        $this->poderDeAtaque = rand(5,$this->maxPontosDeAtaque);    
        $this->superAtaque = rand(0,$this->maxPontosDeAtaque);
        $this->fraqueza = rand(0,$this->maxPontosDeAtaque);
    }
    
        
    public function setPontosDeVida($pontosDeVida){
        $this->pontosDeVida = $pontosDeVida;
    }
    
    function getPontosDeVida(){
        return $this->pontosDeVida;
    }

    function setVivo($vivo){
        return $this->vivo;
    }
    
    function getVivo(){
        return $this->vivo;
    }
        
    function  setPoderDeAtaque($poderDeAtaque){
        return $this->poderDeAtaque;
    }
    
    function  getPoderDeAtaque(){
        return $this->poderDeAtaque;
    }
    
    function  setSuperAtaque($superAtaque){
        return $this->superAtaque;
    }

    function  getSuperAtaque(){
        return $this->superAtaque;
    }

    function  setFraqueza($fraqueza){
        return $this->fraqueza;
    }

    function  getFraqueza(){
        return $this->fraqueza;
    }

}

?>
