<?php

include ("./index.php");

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacao = $_POST['operacao'];

if ($operacao == '+') {
    $calculo = $num1 + $num2;
    echo $num1 . " + " . $num2 . " = " . $calculo;
}

if ($operacao == '-') {
    $calculo = $num1 - $num2;
    echo $num1 . " - " . $num2 . " = " . $calculo;
}

if ($operacao == 'x') {
    $calculo = $num1 * $num2;
    echo $num1 . " x " . $num2 . " = " . $calculo;
}

if ($operacao == '/') {
    if ($num2 == 0) {
        echo "ERRO: divisor tem que ser diferente de 0";
    } else {
        $calculo = $num1 / $num2;
        echo $num1 . " / " . $num2 . " = " . $calculo;
    }
}





?>