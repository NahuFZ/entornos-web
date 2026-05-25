<!-- Aquí recibimos todos los datos del formulario enviados -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Datos enviados</title>
</head>
<body>
    <main class="main">
        <h1 class="title">Tus datos enviados:</h1>
        <?php
            // var_dump($_POST);
            $nropost = 0;
            
            $nombre = htmlspecialchars($_POST['nombre']);
            $email = htmlspecialchars($_POST['email']);
            $nivel = htmlspecialchars($_POST['nivel']);
            $ubicacion = htmlspecialchars($_POST['ubicacion']);

            if (isset($_POST['servicios'])){
                $servicios = $_POST['servicios'];
            } else {
                $servicios = null;
            }

            $mensaje = htmlspecialchars($_POST['mensaje']);
            $aceptar_condiciones = htmlspecialchars($_POST['aceptar-condiciones']);
            
            if (!empty($nombre)){
                echo '<p>Tu nombre: ', $nombre, '</p>';
                $nropost++;
            }
            if (!empty($nivel)){
                echo '<p>Tu nivel educativo: ', $nivel, '</p>';
                $nropost++;
            }
            if (!empty($ubicacion)){
                echo '<p>Resides en la ciudad de: ', $ubicacion, '</p>';
                $nropost++;
            }
            if (!empty($servicios)){
                echo '<p>Servicio elegido: ', join(", ", $servicios), '</p>';
                $nropost++;
            }
            if (!empty($mensaje)){
                echo '<p>Tu mensaje enviado: ', $mensaje, '</p>';
                $nropost++;
            }

            if ($aceptar_condiciones == "true"){
                echo '<p>Además, aceptaste nuestros términos y condiciones.</p>';
                $nropost++;
            }
        ?>
        <p>Número de datos enviados: <?= $nropost ?></p>
    </main>
</body>
</html>