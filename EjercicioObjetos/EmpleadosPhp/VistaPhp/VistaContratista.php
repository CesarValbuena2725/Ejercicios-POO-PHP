<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <?php
    include "../ModeloPhp/Empleado.php";
    include "../ModeloPhp/Contratista.php";
    include "../VistaPhp/FormularioContratista.php";
    $formulario = new FormularioContratista();
    $formulario->mostrar();
    ?>
</body>

</html>