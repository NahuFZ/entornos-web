<?php

// La versión actual de PHP.
echo PHP_VERSION, '<br>';

// El sistema operativo para el que se compiló PHP.
echo PHP_OS, '<br>';

// El entero más grande soportado.
echo PHP_INT_MAX, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Directorio del fichero.
echo __DIR__, '<br>';

// Ruta completa y nombre del fichero.
echo __FILE__, '<br>';

// El número de línea actual en el fichero.
echo __LINE__, '<br>';

function miFuncion()
{
    // El nombre de la función.
    return __FUNCTION__;
}
echo miFuncion(), '<br>';
