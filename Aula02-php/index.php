<?php
    $n1ex1 = mt_rand(0,50);
    $n2ex1 = mt_rand(0,50);
    echo "Exercicio 1: <br>";

    if($n1 > $n2){
        echo "O maior número é n1, sendo que $n1ex1 é o valor da maior variavel";
    } else {
        echo "O maior número é n2, sendo que $n2ex1 é o valor da maior variavel";
    }

    echo "<br>";
    echo "Exercicio 2: <br>";

    $n1ex2 = mt_rand(1,5);
    if($n1ex2 ==3 || $n1ex2 == 5){
       echo $n1ex2;
    }

    echo "<br>";
    echo "Exercicio 3: <br>";

    if($n1ex2 != 3){
        echo "O numero NÃO é 3";
    } else {
        echo $n1ex2;
    }

    echo "<br>";
    echo "Exercicio 4: <br>";

    $n1ex4 = mt_rand(1,100);
    if($n1ex4 > 50 ){
        echo "O número é maior que 50";
    } else {
        echo "O número é menor que 50";
    }

    echo "<br>";
    echo "Exercicio 5: <br>";

    $n1ex5 = mt_rand(0,100);
    $parOuImpar = n1ex5 % 2;
    if($n1ex5 > 50 && $parOuImpar = 0 ){
        echo "O número é maior que 50 e par";
    } else if($n1ex5 > 50 && $parOuImpar = 0){
        echo "O número é maior que 50 e impar";
    } else if($n1ex5 < 50 && $parOuImpar = 1){
        echo "O número é menor que 50 e par";
    } else{
        echo "O número é menor que 50 e impar";
    }
    echo "<br>";
    echo $n1ex5;

    
?>