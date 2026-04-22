<?php

// Error intencional de archivo
$my_file = @file('non_existent_file') or die('La apertura de archivo ha fallado.');

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------
     
// No emitirá un aviso si el índice $key no existe.
$value = @$cache[$key];
var_dump($value);
