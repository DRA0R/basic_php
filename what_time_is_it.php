<?php


$segundos =readline("Ingresa el timepo en segundo: ");

$horas = (int) ($segundos / 3600);
$segundos %= (int) (3600);
$minutos = (int) ($segundos / 60);
$segundos %= (int) 60;

if ($horas == 1){
    $x = "hora";
}else{
    $x= "horas";
}

if ($minutos == 1){
    $y = "minuto";
}else{
    $y= "minutos";
}

if ($segundos == 1){
    $z = "segundo";
}else{
    $z= "segundos";
}

echo "Son $horas $x, $minutos $y y  $segundos $z";

echo "\n";