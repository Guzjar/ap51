<?php
function dameNumero(){
    $aleatorio=[
    "0"=>rand(1,49),
    "1"=>rand(1,49),
    "2"=>rand(1,49),
    "3"=>rand(1,49),
    "4"=>rand(1,49),
    "5"=>rand(1,49)
    ];
    return $aleatorio;
};
$numeros = dameNumero();

echo $numeros[0] . " ";
echo $numeros[1] . " ";
echo $numeros[2] . " ";
echo $numeros[3] . " ";
echo $numeros[4] . " ";
echo $numeros[5];