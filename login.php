<?php
  
  session_start();
  if(isset($_SESSION['userid'])){
      header('location:session.php');
  }
/*if(isset($_POST[''])){
    $_SESSION['userid']=$_POST['user'];
    echo "BIENVENIDO has iniciado sesion".$_POST['user'];
 }else{
     if(isset($_SESSION['usuario_login'])){
         echo "Has iniciado sesion:" .$_SESSION['user'];
     }
        
 }

 ?>

 <?php
     
        /*if(!isset($_SESSION['userid']))
        {
            if(isset($_POST['validar_login']))
            {
                if(verificar_login($_POST['user_usuario'],$_POST['pass_usuario'],$result) == 1)
                {
                    $_SESSION['userid'] = $result->idusuario;
                    //header("location:crud/session.php");
                }
                else
                {
                    echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
                }
            }
     
        if (!($iden=mysqli_connect("localhost","root","","actylive"))) 
             die("Error:No se pudo conectar");
         if (!mysqli_select_db("actylive",$iden)) 
           die("Error:No existe la base de datos");
     
         $sentencia="SELECT * FROM usuario WHERE user_usuario = '$user' AND pass_usuario = '$password'";
     
         $resultado=mysqli_query($sentencia,$iden);
     
         $sql = "SELECT * FROM usuario WHERE user_usuario = '$user' AND pass_usuario = '$password'";
         $rec = mysqli_query($sql);
         $count = 0;
     
     
      
         while($row = mysqli_fetch_object($rec))
         {
             $count++;
             $result = $row;
         }
      
         if($count == 1)
         {
             return 1;
         }
      
         else
         {
             return 0;
         }
     }
     
      
    

    
    $usuario = $_POST['usuario_login'];
    $pass = $_POST['pass_login'];
    $rol = $_POST['rol_login'];

    $query = "SELECT *FROM login WHERE 
    usuario_login = '$usuario' AND pass_login = '$pass'";
    $resultado = mysqli_query($connect, $query);

     */
    
?>


    


<!DOCTYPE html>
<html lang="es">
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
    <form action="cod_login.php" method="POST">
    <label for="user">Usuario</label>
    <input type="text" name="user" placeholder="Ingrese Email Usuario" required>
    <label for="pass">Password</label>
    <input type="password" name="pass" placeholder="Ingrese Password"required>
    <input type="submit" name="validar_login" value="INGRESAR">
    <a href="ingresarUsuario.php">No tienes cuenta? Registrate</a>
    </div>
    <?php
    include( 'footer.php');
    ?>

</body>

</html>