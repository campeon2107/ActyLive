<?php 
include ("connect.php");

if(isset($_POST['actualizar_actividad'])){
	//$id_usuario_actividad= $_POST['id_usuario_actividad'];
	$titulo_actividad= $_POST['titulo_actividad'];
	$descripcion_actividad= $_POST['descripcion_actividad'];
	$fecha_actividad= $_POST['fecha_actividad'];
	$id_usuario_actividad = $_POST ['id_usuario_actividad'];


		$sql="UPDATE actividad SET
		titulo_actividad = '$titulo_actividad',
		descripcion_actividad ='$descripcion_actividad',
		fecha_actividad = '$fecha_actividad',
		id_usuario_actividad ='$id_usuario_actividad',
		
		WHERE id_usuario_actividad= '$id_usuario_actividad'";

	
	$consulta = mysqli_query($conexion,$sql);
}
print_r($consulta);
if ($consulta) {
	echo "bien";
	header("location:../listarActividades.php");
}else{
	echo "mal";
}




 ?>