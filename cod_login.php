<?php

include ("crud/connect.php");
//print_r($_POST);   
  session_start();
  
   
if(isset($_POST['validar_login'])){

  $usuario = $_POST['user'];
  $pass = $_POST['pass'];

  $query = "SELECT *FROM usuario WHERE 
  user_usuario = '$usuario' AND pass_usuario = '$pass'";
  $resultado = mysqli_query($conexion, $query);
  $row = mysqli_num_rows($resultado);
  if($row == 1){
    echo $_SESSION['userid']= $usuario;
      echo "<p style= color: white>Bienvenido $usuario</p>";
      header('location: session.php');
  }else{
    
    echo "<script>
               alert('Usuario o password invalida');
               window.location= 'login.php'
   </script>";
    
  }
  
}

?>