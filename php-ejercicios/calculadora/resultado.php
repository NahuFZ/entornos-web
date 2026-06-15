<!--
    Calculadora
        Hacer un formulario que permita ingresar dos valores y realizar la suma, resta,
        multiplicación o división de los mismos.  
        Mostrar en otra página la operación realizada y el resultado obtenido.
        Implementar una clase que gestione los datos y cálculos, incluida desde otro archivo PHP.
        Validar números y operación ingresada.
-->
<!-- ======================= BLOQUE DE PHP INICIAL ======================= -->
<?php
    $DEBUG = 0;
    include 'calculadora.php';

    // Le escondemos los errores al usuario
    ini_set('display_errors', '0');
    // Interruptor para el modo debug
    if ($DEBUG == 1){
        var_dump($_POST);
        // Mostramos los errores
        ini_set('display_errors', '1');
    }

    // Tira error: lo muestra en pantalla y hace una excepción para detener las lineas a continuación
    function tirarError($mensaje_error){
        echo '<span class="error">', $mensaje_error, '</span>';
        throw new Exception($mensaje_error);
    }
    
    // Tomo los valores pasados por POST y los transformo de mixed a string.
    $val1 = htmlspecialchars($_POST['value1']);
    $val2 = htmlspecialchars($_POST['value2']);
    $operacion = htmlspecialchars($_POST['operacion']);

    // Remplazo las comas por puntos 
    $val1 = str_replace(",", ".", $val1);
    $val2 = str_replace(",", ".", $val2);
    
?>

<!-- ======================= INICIA HTML ======================= -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora primitiva - resultado</title>
</head>
<body>
    <main class="main">
        <a class="main__return" href="index.html"><-- Volver</a>
        <h1 class="main__title">Calculadora primitiva</h1>
        <p class="main__error">
            <?php
                // Defino los valores de la clase calculadora. Si no se ingresaron numeros, tira error.
                try {
                    $calc = new Calculadora($val1, $val2);
                } catch (Exception $e) {
                    tirarError('ERROR: debe ingresar números en ambos campos.');
                }
                // si $operacion está vacio o no es un array, tiramos un error
                if(empty($operacion) || !is_string($operacion)){
                    tirarError('ERROR: El formato de operación no es válido.');
                }
            ?>
        </p>
        
        <?php 
            $resultado = 0;
            $mensaje ='';
            switch ($operacion){
                case 'sumar':
                    $resultado = $calc -> sumar();
                    $mensaje = 'suma: ' . $resultado;
                    break;
                case 'restar':
                    $resultado = $calc -> restar();
                    $mensaje = 'resta: ' . $resultado;
                    break;
                case 'multiplicar':
                    $resultado = $calc -> multiplicar();
                    $mensaje = 'multiplicación: ' . $resultado;
                    break;
                case 'dividir':
                    $resultado = $calc -> dividir();
                    $mensaje = 'división: ' . $resultado;
                    // $resultado es vacio si se divide por cero.
                    if (empty($resultado)){
                        echo '<img class="explosion" src="assets/explode.gif" alt="quemaste la computadora">';
                        throw new Exception ('ERROR: División sobre cero.');
                    }
                    break;
                default:
                    tirarError('ERROR: la operación no es válida.');
                    break;
            }
        ?>
        <p class="main__resultado">Resultado de la <?= $mensaje ?></p>
    </main>
</body>
</html>