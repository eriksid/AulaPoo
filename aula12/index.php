<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Mamifero.php';
        $gato = new Mamifero;
        $gato->setIdade(2);
        $gato->setPeso(1);
        $gato->setCordopelo("branco");
        $gato->alimentar();
        $gato->locomover();
        $gato->emitirsom();
        
        print_r($gato);
        ?>
        </pre>
    </body>
</html>
