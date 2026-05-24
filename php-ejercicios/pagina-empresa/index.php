<!--
    Página de empresa

    Realizar una página que publique la información de una empresa.
    Los datos a mostrar son los siguientes: nombre, descripción, dirección, localidad, código postal, país, teléfono y correo electrónico.
    Cargar la información en variables PHP y luego mostrarla con HTML.
-->
<?php include 'info-empresa.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title><?= Empresa::$nombre ?> | Sobre nosotros</title>
</head>
<body>
    <main class="main">
        <h1 class="main__titulo">Sobre nosotros</h1>
        <p class="main__presentacion">Nosotros somos <?= Empresa::$nombre ?>, <?= Empresa::$descripcion ?>.</p>
        <p class="main__ubicacion">Nuestra fábrica se encuentra en <?= Empresa::$direccion ?>, 
        en la localidad de <?= Empresa::$localidad ?>, dentro de la provincia de <?= Empresa::$provincia ?> en <?= Empresa::$pais ?>.</p>
        <p>Si necesita contactarnos, puede hacerlo a través de los siguientes medios:<p>
        <dl class="contacto">
            <dt class="contacto__title">E-mail</dt>
                <dd class="contacto__data"><?= Empresa::$email ?></dd>
            <dt class="contacto__title">Correo</dt>
                <dd class="contacto__data">código postal: <?= Empresa::$codigo_postal ?></dd>
                <dd class="contacto__data">Localidad: <?= Empresa::$localidad ?></dd>
            <dt class="contacto__title">Teléfono</dt>
                <dd class="contacto__data">número: <?= Empresa::$telefono ?></dd>
                <dd class="contacto__data">Horario de atención: <?= Empresa::$horario ?></dd>
        </dl>
    </main>

</body>
</html>