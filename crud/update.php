<?php 
include ("connect.php");

//if(isset($_POST['actualizar_usuario'])){
$id_usuari= $_POST['id_usuari'];
$nombre_usuari= $_POST['nombre_usuari'];
$edad_usuari= $_POST['edad_usuari'];
$telefono_usuari= $_POST['telefono_usuari'];
$ciudad_usuari= $_POST['ciudad_usuari'];
$user_usuari= $_POST['user_usuari'];
$pass_usuari= $_POST['pass_usuari'];


		$sql="UPDATE usuario SET
		id_usuario ='$id_usuari',
		nombre_usuario = '$nombre_usuari',
        edad_usuario = '$edad_usuari'
		telefono_usuario ='$telefono_usuari',
		ciudad_usuario = '$ciudad_usuari',
		user_usuario = '$user_usuari',
        pass_usuario = '$pass_usuari'
       
		
		WHERE id_usuario= '$id_usuari'";

	
	$consulta = mysqli_query($conexion,$sql);
if (!$consulta) {
	echo "No es posible actualizar el usuario";

}else{
	
	header("location:../listarUsuario.php");
}




 ?>
