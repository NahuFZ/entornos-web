<!--
    Calculadora
        Hacer un formulario que permita ingresar dos valores y realizar la suma, resta,
        multiplicación o división de los mismos.  
        Mostrar en otra página la operación realizada y el resultado obtenido.
        Implementar una clase que gestione los datos y cálculos, incluida desde otro archivo PHP.
        Validar números y operación ingresada.
-->
<?php
    include 'calculadora.php';
    $calc = new Calculadora($_POST['value1'], $_POST['value2']);
    $operacion = $_POST['operacion'];
?>
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
                //TODO: no ingresar números
                if(empty($calc)){
                    throw new Exception('ERROR: debe ingresar números.');
                }
                //TODO: probar operación vacio o no array
                // si $operacion está vacio o no es un array...
                if(empty($operacion) || !is_array($operacion)){
                    throw new Exception('ERROR: El formato de operación no es válido.');
                }
            ?>
        </p>
        <p class="main__resultado">
            <?php 
                $resultado = 0;
                switch ($operacion):
                    case 'sumar':
                        $resultado = $calc -> sumar();
                        break;
                    case 'restar':
                        $resultado = $calc -> restar();
                        break;
                    case 'multiplicar':
                        $resultado = $calc -> multiplicar();
                        break;
                    case 'dividir':
                        $resultado = $calc -> dividir();
                        // TODO: Probar denominador igual a 0. 
                        if (empty($resultado)){
                            throw new Exception('ERROR: división sobre cero inválida.');
                        }
                        break;
                    default:
                        throw new Exception('ERROR: la operación no es válida.');
                        break;
            ?>

    </main>
</body>
</html>