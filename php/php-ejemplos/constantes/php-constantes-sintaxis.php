<?php

define("CONSTANTE1", "Hola mundo.");
echo CONSTANTE1; // muestra "Hola mundo."

// Nombres de constantes incorrectos
// define("2FOO", "algo");
// echo 2FOO, '<br>';

// Esto es válido, pero debe evitarse:
// PHP podría proporcionar una constante mágica que rompiera el script
define("__FOO__", "algo");

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Funciona desde PHP 5.3.0
const CONSTANTE2 = 'Hola mundo.';
echo CONSTANTE2, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

const ANIMALES1 = array('perro', 'gato', 'pájaro');
echo ANIMALES1[1], '<br>'; // muestra "gato"

// Funciona a partir de PHP 7
define('ANIMALES2', array(
    'perro',
    'gato',
    'pájaro'
));
echo ANIMALES2[1], '<br>'; // muestra "gato"

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

define("AMBITO", "Disponible");

function pruebaAmbito()
{
    echo AMBITO, '<br>';
}
pruebaAmbito();

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

if (true) {
    define('PRUEBA1', 'Valor 1'); // válido
}
echo PRUEBA1, '<br>';

// if (true) {
    // const PRUEBA2 = 'Valor 2'; // inválido
// }
// echo PRUEBA2, '<br>';
