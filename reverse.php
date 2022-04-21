<?php

$h = readline("Ingresa tus horas: ");
$m = readline("Ingresa tus minutos: ");
$s = readline("Ingresa tus segundos: ");


$hs = $h * 3600;

$ms = $m * 60;

$ts = $hs + $ms + $s;

echo "Tu hora ingresada corresponde a $ts segundos";
echo "\n";