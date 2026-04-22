<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="utf-8">
    <title>Sintaxis: HTML - PHP</title>
</head>
<body>

    <p>Esto va a ser ignorado por PHP y mostrado por el navegador.</p>
    <p><?php echo 'Mientras que esto va a ser interpretado.'; ?></p>
    <p>Esto también será ignorado por PHP y mostrado por el navegador.</p>  

    <?php
    $expresion = true;
    if ($expresion == true) :
    ?>
    <p>Esto se mostrará si la expresión es verdadera.</p>
    <?php else : ?>
    <p>En caso contrario se mostrará esto.</p>
    <?php endif; ?>

</body>
</html>