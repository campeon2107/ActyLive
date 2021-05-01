
<?php
/*$conexion = mysqli_connect("localhost", "root", "", "practica");
 $id = "3";
 mysqli_query($conexion, "DELETE FROM usuario WHERE id = " . $id);
echo "su registro ha sido eliminado";
header ("location:list.php");
mysqli_close($conexion);*/

include("connect.php");
if(isset($_GET['id_actividad'])){
    //$id_actividad = $_POST['id_actividad'];
    $query = "DELETE FROM actividad WHERE id_actividad =$id_actividad";
    $result = mysqli_query($conexion, $query);
    if (!$result){
        die("Query failed");
    }else{
$_SESSION['message'] = 'Task Removed Successfully';
$_SESSION['message_type'] = 'danger';
header('location: ../listarActividades.php');
}
}

?>