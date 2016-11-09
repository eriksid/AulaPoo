<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author eriks
 */
abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;
    
    abstract function locomover();
    abstract function  alimentar();
    abstract function emitirsom();
    function getPeso() {
        return $this->peso;
    }

    function getIdade() {
        return $this->idade;
    }

    function getMembros() {
        return $this->membros;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setMembros($membros) {
        $this->membros = $membros;
    }

 
}
