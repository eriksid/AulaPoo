<?php

require_once 'Animal.php';
class Mamifero extends Animal {
    //put your code here
    protected $cordopelo;
    public function locomover() {
       print "<p>correndo</p>";
    }
    public function alimentar() {
        print"<p>mamando</p>";
    }
    public function emitirsom() {
        print "<p>som de mamifero</p>";
    }
}
