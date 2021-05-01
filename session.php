 
<?php
    
    session_start();
    if(!isset($_SESSION['userid'])){
       header('location:login.php');
    }elseif(isset($_SESSION['userid'])){

    }
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>actylive</title>

    </head>
    <body>
    <?php include ('header.php'); ?>
    <br><br><br><br><br><br><br><br><br>
    <center><h1>ACTYLIVE</h1>
    <h2>A un CLICK de lograr tus metas y objetivos</h2><br><br><br>
    <?php
   
   if(isset($_SESSION['userid'])){
    $userId = $_SESSION['userid'];
    echo "<h1>Has iniciado sesion: $userId</h1><br><br>";
        echo "<p><a href='crud/logout.php'>CERRRAR SESION</a></p></center>";
    }
    ?>
    </body>

    </html>