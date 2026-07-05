<?php
require 'validacion/validacion-form.php';
use Validacion\ValidacionForm as vf;

$DEBUG = 1?>

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
if($DEBUG) {
    var_dump($_SERVER['REQUEST_METHOD']);
    echo "<hr>\n";
    var_dump($_POST);
    echo "<hr>\n";
}

// Verificamos que haya llegado a esta página por POST (por medio del formulario presente en esta página).
// TODO: Verificar que el formulario haya llegado por esta página y no por otra. 
$isPost = $_SERVER['REQUEST_METHOD'] == 'POST';

// Inicializo todo
$maxChar = vf::getMaxChar();
$nombre = '';
$direccion = '';
$telefono = '';
$errores = [];

if ($isPost) {
    $camposForm = new vf($_POST);
    // TODO: hace falta sacar $errores del if? lo digo por el scope y el uso del array $errores más abajo
    $errores = $camposForm -> validar();
    var_dump(empty($errores)); echo '<hr>';
    // Validacion
    if($DEBUG == 1) var_dump($errores); echo "<hr>\n";
    if (empty($errores)){
        echo 'No hay errores';
        header('Location: exito.html', true, 200);
        exit;
    }

    // TODO: verificar que pasa si el formulario se manda vacio. Lo digo por su uso más abajo. Ver de hacer una funcion getCampos para ValidacionForm.
    $nombre = $_POST['nombre'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <main class="main">
        <h1 class="title">Formulario de contacto</h1>

        <!-- TODO: probar el espacio en nombre en la redirección del formulario -->
        <form class="formulario" action="index.php" method="POST">
            <!-- Inicializo todas las variables primero -->
            <input type="hidden" name="nombre" value="">
            <input type="hidden" name="direccion" value="">
            <input type="hidden" name="telefono" value="">

            <!-- Ingreso de nombre -->
            <p><label class="formulario__label">Nombre <input class="formulario__name-field" name="nombre" type="text" placeholder="Nombre" value="<?= htmlspecialchars($nombre) ?>"></label></p>
            <?php if ($isPost && !empty($errores['nombre'])) {?>
            <p class="formulario__message--error"><?= htmlspecialchars($errores['nombre']) ?></p>
            <?php } else {?>
            <p class="formulario__message--info">Máximo <?= htmlspecialchars($maxChar['nombre'])?> caracteres</p>
            <?php }?>
            
            <!-- Ingreso de dirección -->
            <p><label class="formulario__label">Dirección <input class="formulario__adress-field" name="direccion" type="address" placeholder="calle 123" value="<?= htmlspecialchars($direccion) ?>"></label></p>
            <?php if ($isPost && !empty($errores['direccion'])) {?>
            <p class="formulario__message--error"><?= htmlspecialchars($errores['direccion']) ?></p>
            <?php } else {?>
            <p class="formulario__message--info">Máximo <?= htmlspecialchars($maxChar['direccion'])?> caracteres</p>
            <?php }?>
            
            <!-- Ingreso del número de teléfono -->
            <p><label class="formulario__label">Teléfono <input class="formulario__phone-field" name="telefono" type="tel" placeholder="(555) 123-4567" value="<?= htmlspecialchars($telefono) ?>"></label></p>
            <?php if ($isPost && !empty($errores['telefono'])) {?>
            <p class="formulario__message--error"><?= htmlspecialchars($errores['telefono']) ?></p>
            <?php } else {?>
            <p class="formulario__message--info">Máximo <?= htmlspecialchars($maxChar['telefono'])?> caracteres</p>
            <?php }?>

            <p><input class="formulario__boton-envio" type="submit" value="Enviar"></p>
        </form>
    </main>
</body>
</html>