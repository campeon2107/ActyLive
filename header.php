<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>actylive</title>
<link rel="stylesheet" href="css/menu.css">
</head>
<body>
<header class="header">
<div class="container">
<div class="btn-menu">
<label for="btn-menu">☰</label>
</div>
<div class="logo">
<h1>ACTYLIVE</h1>
</div>
<nav class="menu">
<a href="session.php">Inicio</a>
<a href="listarActividades.php">Actividades</a>
<a href="actividades.php">crear Actividades</a>


</nav>

</header>
<div class="capa"></div>

<input type="checkbox" id="btn-menu">
<div class="container-menu">
<div class="cont-menu">
<nav>
<a href="#">USUARIO</a>
<a href="listarUsuario.php">Listar Usuario</a>
<a href="ingresarUsuario.php">crear Usuario</a>
<a href="actualizarUsuario.php">Actualizar Usuario</a>
<a href="eliminarUsuario.php">Eliminar Usuario</a>
<a href="crud/logout.php">Cerrar Sesion</a>


</nav>
<label for="btn-menu">✖️</label>
</div>
</div>
</body>
</html>