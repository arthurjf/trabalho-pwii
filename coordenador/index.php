<?php
include_once("classes/Verurl.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Área do Coordenador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon.ico">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <script src='../js/bootstrap.bundle.js'></script>
</head>

<body>
    <?php
    $red = new Verurl();
    $red->trocarUrl(@$_GET['secao']);
    ?>
</body>

</html>