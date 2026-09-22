<?php
//funções
/* function soma($num1, $num2){
    $res1= $num1 + $num2;
    return $res1;

}

function subt($num1, $num2){
    $res2= $num1 - $num2;
    return $res2;

}

function div($num1, $num2){
    $res3= $num1 / $num2;
    return $res3;

}

function mult($num1, $num2){
    $res4= $num1 * $num2;
    return $res4;

}
    
ou:*/

include "funcao.php";

//variaveis
$n1= $_POST["n1"];
$n2= $_POST["n2"];
$op= $_POST["operacao"];

switch ($op){
    case "+":
        echo "Resultado:" .soma($n1,$n2);
        break;
    
    case "-":
        echo "Resultado:" .subt($n1,$n2);
        break;
    
    case "/":
        echo "Resultado:" .div($n1,$n2);
        break;

    case "*":
       echo "Resultado:" .mult($n1,$n2);
        break;

    default:
        echo "só rezando";
}



