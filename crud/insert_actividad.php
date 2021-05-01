<?php
include ("connect.php");

if(isset($_POST['crear_actividad'])){
$titulo_actividad = $_POST['titulo_actividad'];
$descripcion_actividad = $_POST['descripcion_actividad'];
$fecha_actividad = $_POST ['fecha_actividad'];
$id_usuario_actividad = $_POST ['id_usuario_actividad'];


$query = "INSERT INTO actividad(titulo_actividad, descripcion_actividad, fecha_actividad, id_usuario_actividad) 
VALUES ('$titulo_actividad', '$descripcion_actividad', '$fecha_actividad' , '$id_usuario_actividad')";
$resultado = mysqli_query($conexion, $query);
if(!$resultado){
    echo "No se ha podido registrar";
}else{
echo "Su registro ha sido agregado";
header('location: ../listarActividades.php');
}

}

?>