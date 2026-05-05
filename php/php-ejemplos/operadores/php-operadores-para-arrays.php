<?php

/*
$a + $b   Unión         Unión de $a y $b.
$a == $b  Igualdad      TRUE si $a y $b tienen las mismas parejas clave/valor.
$a === $b Identidad     TRUE si $a y $b tienen las mismas parejas clave/valor
                        en el mismo orden y de los mismos tipos.
$a != $b  Desigualdad   TRUE si $a no es igual a $b.
$a <> $b  Desigualdad   TRUE si $a no es igual a $b.
$a !== $b No-identidad  TRUE si $a no es idéntica a $b.
*/

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$a = array("a" => "manzana", "b" => "banana");
$b = array("a" => "pera", "b" => "frutilla", "c" => "cereza");

$c = $a + $b; // Unión de $a y $b
echo 'Unión de $a y $b:', '<br>';
print_r($c);
echo '<br>';

$c = $b + $a; // Unión de $b y $a
echo 'Unión de $b y $a:', '<br>';
print_r($c);
echo '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$a = array("manzana", "banana");
$b = array(0 => "manzana", '1' => "banana");
$c = array(1 => "banana", 0 => "manzana");

echo var_dump($a == $b), '<br>';    // bool(true)
echo var_dump($a === $b), '<br>';   // bool(true)
echo var_dump($a == $c), '<br>';    // bool(true)
echo var_dump($a === $c), '<br>';   // bool(false)
