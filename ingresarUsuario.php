<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ActyLive</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="login-box">
    <img class="imagen" src="img/logo.png" alt="">
    <h1>ACTYLIVE<h1>
    <form action="crud/insert.php" method="POST">
    <label for="id_usuario">Identificacion</label>
    <input type="text" name="id_usuario" placeholder="Ingrese Identificacion">
    <label for="nombre_usuario">Nombre</label>
    <input type="text" name="nombre_usuario" placeholder="Ingrese Nombre">
    <label for="edad_usuario">Edad</label>
    <input type="text" name="edad_usuario" placeholder="Ingrese Edad">
    <label for="telefono_usuario">Telefono</label>
    <input type="text" name="telefono_usuario" placeholder="Ingrese Telefono">
    <label for="ciudad_usuario">ciudad</label>
    <input type="text" name="ciudad_usuario" placeholder="Ingrese ciudad">
    <label for="user_usuario">Usuario</label>
    <input type="text" name="user_usuario" placeholder="Ingrese Usuario">
    <label for="pass_usuario">Password</label>
    <input type="password" name="pass_usuario" placeholder="Ingrese Password">
    <input type="submit" name="crear_usuario" value="crear Usuario">
    
    </form>
    </div>
</body>
</html>