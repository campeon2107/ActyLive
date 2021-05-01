<?php
include ("connect.php");

if(isset($_POST['crear_usuario'])){
$id_usuario = $_POST['id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$edad_usuario = $_POST ['edad_usuario'];
$telefono_usuario = $_POST ['telefono_usuario'];
$ciudad_usuario = $_POST ['ciudad_usuario'];
$user_usuario = $_POST ['user_usuario'];
$pass_usuario = $_POST ['pass_usuario'];

$query = "INSERT INTO usuario(id_usuario, nombre_usuario, edad_usuario, telefono_usuario, ciudad_usuario,user_usuario, pass_usuario) 
VALUES ('$id_usuario', '$nombre_usuario', '$edad_usuario' , '$telefono_usuario' , '$ciudad_usuario' , '$user_usuario' , '$pass_usuario')";
$resultado = mysqli_query($conexion, $query);
if(!$resultado){
    echo "No se ha podido registrar";
}else{
echo "Su registro ha sido agregado";
}
//include('baseDatos2.php');
header('location: ../listarUsuario.php');
}

?>

