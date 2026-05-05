<?php

// Arreglo vacío

$arreglo = array();
print_r($arreglo);
$arreglo = null;
echo '<br><br>';

$arreglo = [];
print_r($arreglo);
$arreglo = null;
echo '<br><br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Matriz vacía

$matriz = array(array());
print_r($matriz);
$matriz = null;
echo '<br><br>';

$matriz = [[]];
print_r($matriz);
$matriz = null;
echo '<br><br>';

$matriz[] = [];
print_r($matriz);
$matriz = null;
echo '<br><br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

/*
Matriz de datos

id    nombre    email
--    ------    -----
1     Carlos    carlos@gmail.com
2     Pedro     pedro@hotmail.com
3     José      jose85@gmail.com
4     Juan      juan@live.com

*/

$matriz = array(
    array('id' => '1', 'nombre' => 'carlos', 'email' => 'carlos@gmail.com'),
    array('id' => '2', 'nombre' => 'Pedro', 'email' => 'pedro@hotmail.com'),
    array('id' => '3', 'nombre' => 'José', 'email' => 'jose85@gmail.com'),
    array('id' => '4', 'nombre' => 'Juan', 'email' => 'juan@live.com')
);
print_r($matriz);
$matriz = null;
echo '<br><br>';

$matriz = [
    array('id' => '1', 'nombre' => 'carlos', 'email' => 'carlos@gmail.com'),
    array('id' => '2', 'nombre' => 'Pedro', 'email' => 'pedro@hotmail.com'),
    array('id' => '3', 'nombre' => 'José', 'email' => 'jose85@gmail.com'),
    array('id' => '4', 'nombre' => 'Juan', 'email' => 'juan@live.com')
];
print_r($matriz);
$matriz = null;
echo '<br><br>';

$matriz[] = array('id' => '1', 'nombre' => 'carlos', 'email' => 'carlos@gmail.com');
$matriz[] = array('id' => '2', 'nombre' => 'Pedro', 'email' => 'pedro@hotmail.com');
$matriz[] = array('id' => '3', 'nombre' => 'José', 'email' => 'jose85@gmail.com');
$matriz[] = array('id' => '4', 'nombre' => 'Juan', 'email' => 'juan@live.com');
print_r($matriz);
$matriz = null;
echo '<br><br>';

$matriz[] = ['id' => '1', 'nombre' => 'carlos', 'email' => 'carlos@gmail.com'];
$matriz[] = ['id' => '2', 'nombre' => 'Pedro', 'email' => 'pedro@hotmail.com'];
$matriz[] = ['id' => '3', 'nombre' => 'José', 'email' => 'jose85@gmail.com'];
$matriz[] = ['id' => '4', 'nombre' => 'Juan', 'email' => 'juan@live.com'];
print_r($matriz);
$matriz = null;
echo '<br><br>';

$matriz = array(
    0 => array('id' => '1', 'nombre' => 'carlos', 'email' => 'carlos@gmail.com'),
    1 => array('id' => '2', 'nombre' => 'Pedro', 'email' => 'pedro@hotmail.com'),
    2 => array('id' => '3', 'nombre' => 'José', 'email' => 'jose85@gmail.com'),
    3 => array('id' => '4', 'nombre' => 'Juan', 'email' => 'juan@live.com')
);
print_r($matriz);
$matriz = null;
echo '<br><br>';

$matriz[0] = ['id' => '1', 'nombre' => 'carlos', 'email' => 'carlos@gmail.com'];
$matriz[1] = ['id' => '2', 'nombre' => 'Pedro', 'email' => 'pedro@hotmail.com'];
$matriz[2] = ['id' => '3', 'nombre' => 'José', 'email' => 'jose85@gmail.com'];
$matriz[3] = ['id' => '4', 'nombre' => 'Juan', 'email' => 'juan@live.com'];
print_r($matriz);
$matriz = null;
echo '<br><br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Mostrar datos

$matriz = array(
    array('id' => '1', 'nombre' => 'carlos', 'email' => 'carlos@gmail.com'),
    array('id' => '2', 'nombre' => 'Pedro', 'email' => 'pedro@hotmail.com'),
    array('id' => '3', 'nombre' => 'José', 'email' => 'jose85@gmail.com'),
    array('id' => '4', 'nombre' => 'Juan', 'email' => 'juan@live.com')
);
print_r($matriz[2]);
echo '<br><br>';
echo $matriz[2]['nombre'];
echo '<br><br>';
