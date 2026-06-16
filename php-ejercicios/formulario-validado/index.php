<!--
    Formulario validado
        Enviar información desde un formulario y validar los datos a nivel de servidor.
        En caso de error, mostrar los mensajes correspondientes y los datos recargados en el formulario.
        Si los datos son correctos, redireccionar a otra página e informar que fueron recibidos.
        Implementar una clase que gestione los datos, incluida desde otro archivo PHP.
        Datos:
        -	Nombre: requerido, hasta 50 caracteres.
        -	Dirección: requerido, hasta 100 caracteres.
        -	Teléfono: requerido, hasta 20 caracteres.

    Formulario validado (con espacios de nombres)
        Implementar espacios de nombres en el ejercicio "Formulario validado".

-->
<?php 
    function mostrarError ($mensajeError) {
        echo '<span class="error">ERROR: ', $mensajeError;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>
    <main class="main">
        <h1 class="title">Formulario de envío de datos personales</h1>
        <form class="formulario" action="muestra_datos_ingresados.php" method="POST">
            
            <p><label class="formulario__label">Nombre <input class="formulario__name-field" name="nombre" type="text" placeholder="Nombre"></label></p>
            <?php ?>
            <p><label class="formulario__label">Dirección <input class="formulario__adress-field" name="direccion" type="adress" placeholder="calle 123"></label></p>
            
            <p><label class="formulario__label">Teléfono <input class="formulario__phone-field" name="telefono" type="email" placeholder="12345678"></label></p>
        </form>
    </main>

</body>
</html>