<?php
    require_once("Animal.php");
    require_once("Mamifero.php");

    $mamifero = new Mamifero();
    $mamifero->getCorDePelos();
    echo "<br>";
    $mamifero->setCorDePelos("Azul");
    echo "<br>";
    $mamifero->getCorDePelos();
?>