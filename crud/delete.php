
<?php
/*$conexion = mysqli_connect("localhost", "root", "", "practica");
 $id = "3";
 mysqli_query($conexion, "DELETE FROM usuario WHERE id = " . $id);
echo "su registro ha sido eliminado";
header ("location:list.php");
mysqli_close($conexion);*/

include("connect.php");
//if(isset($_POST['id_usuario'])){
    $id_usuario = $_POST['id_usuario'];
    $query = "DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = '$id_usuario'";
    $result = mysqli_query($conexion, $query);
    if (!$result){
        die("Query failed");
    }
$_SESSION['message'] = 'Task Removed Successfully';
$_SESSION['message_type'] = 'danger';
header('location: ../listarUsuario.php');


?>
