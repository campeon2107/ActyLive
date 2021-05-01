<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actylive</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="login-box">
    <img class="imagen" src="img/logo.png" alt="">
    <h1>ACTYLIVE<h1>
    <form class="" action="crud/insert_actividad.php" method="POST">
    <label for="titulo_actividad">Titulo Actividad</label>
    <input type="text" name="titulo_actividad" placeholder="Ingrese Actividad">
    <label for="descripcion_actividad">Descripcion Actividad</label>
    <input type="textarea" name="descripcion_actividad" placeholder="Ingrese Descripcion">
    <label for="fecha_actividad">Fecha a Realizar Actividad</label>
    <input type="date" name="fecha_actividad" placeholder="Ingrese Fecha Actividad">
    <label for="id_usuario_actividad">Id Usuario Actividad</label>
    <input type="text" name="id_usuario_actividad" placeholder="Ingrese Identificacion">
    <br><br>
    <input type="submit" name="crear_actividad" value="crear Actividad">
</body>
</html>