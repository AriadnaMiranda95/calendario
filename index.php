<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once 'Calendario.php';
?>


    <h1>Calendario</h1>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method='POST'>

<input type="text" placeholder="Mes" name="mes" >
<input type="text" placeholder="Año" name="anio">
<input type="submit" value="Enviar" name="enviar">

</form>

<div class="calendario">
<?php


if(isset($_POST) && !empty($_POST['mes']) && !empty($_POST['anio'])){
    calendario($nombreDias);
}

?>
</div>


</body>
</html>