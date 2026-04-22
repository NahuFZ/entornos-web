<?php

/*
Una variable es considerada null si:
  - se le ha asignado la constante NULL.
  - no se le ha asignado un valor todavía.
  - se ha destruido con unset().
*/

$a = null;
var_dump($a);
echo '<br>';

var_dump($b);
echo '<br>';

$c = 'algo';
unset($c);
var_dump($c);
echo '<br>';
