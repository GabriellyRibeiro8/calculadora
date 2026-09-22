<?php

function soma($num1, $num2){
    $res1= $num1 + $num2;
    return $res1;

}

function subt($num1, $num2){
    $res2= $num1 - $num2;
    return $res2;

}

function div($num1, $num2){
         if($n2==0){
            $res3 = "Não é possivel dividir por 0";
         }else{
            $res3= $num1 / $num2;
         }
    return $res3;

}

function mult($num1, $num2){
    $res4= $num1 * $num2;
    return $res4;

}