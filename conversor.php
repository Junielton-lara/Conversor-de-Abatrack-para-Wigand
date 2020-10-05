<?php
$Abatrack=$_POST['Abatrack'];

// // Conversão de decimal para hexadecimal
dechex(10);
dechex($Abatrack);
$Abatrack = dechex($Abatrack);

$Abatrack = $Abatrack;

//Conversão de hexadecimal para decimal

hexdec($decimal);
$decimal = hexdec($decimal);

// Pegar apenas os 4 ultimos numeros hexa
$ultimos = substr($Abatrack, - 4);

// convertendo os 4 ultimos numeros hexa em decimal
hexdec($ultimos);
$ultimos = hexdec($ultimos);

// resultado final numero wigand
echo "o numero Wigand e   $ultimos \n";
//var_dump($ultimos);
//var_dump($Abatrack);

