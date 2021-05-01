
<?php
//ejemplo de conexion base de datos MySQL CON PHP
//
// DATOS DE LA BASE DE DATOS

/*$query="SELECT *FROM actividad";

$resultado=mysqli_query($conexion,$query) or die(
"Algo ha ido mal en la consulta de base de datos");
echo "<table border='2'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>DES</th>";
echo "<th>EDAD</th>";
echo "<th>TELEFONO</th>";
echo "<th>EDAD</th>";
echo "<th>USUARIO</th>";
echo "<th>PASSWORD</th>";
echo "</tr>";
while($columna=mysqli_fetch_array($resultado))
{
	echo "<tr>";
    echo "<td>".$columna['id_usuario']."</td><td>".
    $columna['nombre_usuario']."</td><td>".
    $columna['edad_usuario']."</td><td>".
    $columna['telefono_usuario']."</td><td>".
    $columna['ciudad_usuario']."</td><td>".
    $columna['user_usuario']."</td><td>".
    $columna['pass_usuario']."</td><td>";
	echo "</tr>";  
}
echo"</table>";
mysqli_close($conexion);
?>
*/

include ("crud/connect.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actylive</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/24f823807a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
include('header.php');
?><br><br><br><br>

	<form class="busqueda" method="get" action="buscar.php">
		<input type="text" name="ced">
		<input type="submit" name="">
	</form><br><br>
<div>
<table class="table table-dark table-hover" id="table">
    <thead id="move">
      <tr>
      <th class="text text-info">ID</th>
      <th class="text text-info">TITULO</th>
        <th class="text text-info">DESCRIPCION</th>
        <th class="text text-info">FECHA</th>
        <th class="text text-info">ID USUARIO</th>
      </tr>
    </thead>
  <?php
  $query = "SELECT * FROM actividad";
  $result = mysqli_query($conexion,$query);
  while($row = mysqli_fetch_array($result)){
  ?>
    <tbody>
      <tr>
      <td><?php echo $row['id_actividad']?></td>
      <td><?php echo $row['titulo_actividad']?></td>
        <td><?php echo $row['descripcion_actividad']?></td>
        <td><?php echo $row['fecha_actividad']?></td>
        <td><?php echo $row['id_usuario_actividad']?></td>

        <!--EDIT/DELETE BUTTON-->
        <td>
        <a class="text text-success" href = "update_actividad.php?id=<?php echo $row['id_usuario_actividad']?>"
        class="btn" onclick="form()">
        <i class="fas fa-pen sm"></i>
        </a>
        <a  class="text text-danger" href = "crud/delete_actividad.php?id=<?php echo $row['id_usuario_actividad']?>"
        class="btn btn-danger sm"  onclick="form()">
        <i class="far fa-trash-alt"></i>
        </a>
        </td>
        </tr>
      </tr>
  <?php } ?>

    </tbody>
    </table>
  </div>
    </body>
</html>