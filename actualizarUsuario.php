<?php
    include ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ActyLive</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<body>
<div class="login-box">
    <img class="imagen" src="img/logo.png" alt="">
    <h1>ACTYLIVE<h1>
    <form class="" action="crud/update.php" method="POST">
    <label for="id_usuari">Identificacion</label>
    <input type="text" name="id_usuari" placeholder="Ingrese Identificacion">
    <label for="nombre_usuari">Nombre</label>
    <input type="text" name="nombre_usuari" placeholder="Ingrese Nombre">
    <label for="edad_usuari">Edad</label>
    <input type="text" name="edad_usuari" placeholder="Ingrese Edad">
    <label for="telefono_usuari">Telefono</label>
    <input type="text" name="telefono_usuari" placeholder="Ingrese Telefono">
    <label for="ciudad_usuari">ciudad</label>
    <input type="text" name="ciudad_usuari" placeholder="Ingrese ciudad">
    <label for="user_usuari">Usuario</label>
    <input type="text" name="user_usuari" placeholder="Ingrese Usuario">
    <label for="pass_usuari">Password</label>
    <input type="password" name="pass_usuari" placeholder="Ingrese Password">
    <input type="submit" name="actualizar_usuario" value="Actualizar Usuario">
 
    </form>
    </div>
</body>
</html>