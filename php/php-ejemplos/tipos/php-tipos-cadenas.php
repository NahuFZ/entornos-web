<?php

// Comillas simples

echo 'Esto es una cadena sencilla', '<br>';

echo 'También puede incluir nuevas líneas en
cadenas de esta forma ya que es
correcto hacerlo así', '<br>';

// Resultado: Arnold una vez dijo: "I'll be back"
echo 'Arnold una vez dijo: "I\'ll be back"', '<br>';

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\\*.*?', '<br>';

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\*.*?', '<br>';

// Resultado: Esto no se expandirá: \n una nueva línea
echo 'Esto no se expandirá: \n una nueva línea', '<br>';

// Resultado: Las variables $tampoco se $expandiran
echo 'Las variables $tampoco se $expandiran', '<br>';


// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\\\\\\*.*?', '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Comillas dobles

$jugo = "manzana";
echo "Él tomó algo de jugo de $jugo.";
