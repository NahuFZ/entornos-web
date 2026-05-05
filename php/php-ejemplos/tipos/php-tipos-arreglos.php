<?php

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

// a partir de PHP 5.4
$array1 = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array1);

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$array2 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array2);

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$array3 = array("foo", "bar", "hello", "world");
var_dump($array3);

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//---------------------------------------------------------------------

$array4 = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);
var_dump($array4["foo"]);
var_dump($array4[42]);
var_dump($array4["multi"]["dimensional"]["array"]);

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$arr = array(5 => 1, 12 => 2);
$arr[] = 56;    // Esto es lo mismo que $arr[13] = 56;
$arr["x"] = 42; // Esto agrega un nuevo elemento a el array con la clave "x"
unset($arr[5]); // Esto elimina el elemento del array
unset($arr);    // Esto elimina el array completo

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Crear un array simple.
$array = array(1, 2, 3, 4, 5);
print_r($array);
echo '<br>';

// Ahora elimina cada elemento, pero deja el mismo array intacto:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);
echo '<br>';

// Agregar un elemento (note que la nueva clave es 5, en lugar de 0).
$array[] = 6;
print_r($array);
echo '<br>';

// Re-indexar:
$array = array_values($array);
$array[] = 7;
print_r($array);
echo '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$colors = array('rojo', 'azul', 'verde', 'amarillo');

foreach ($colors as $color) {
    echo "¿Le gusta el $color?", "<br>";
}
