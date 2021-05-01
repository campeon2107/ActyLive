<?php
    $usuario="root";
    $password="";
    $servidor="localhost";
    $basededatos="actylive";
    //creación de la conexion de la base de datos con mysql_connect()
    $conexion=mysqli_connect($servidor,$usuario,$password,$basededatos)or die
    ("No se ha podido conectar al servidor de base de datos");
    if(!$conexion){
        die ("Fallo en la conexion");
    }else{
        echo ("ACTYLIVE<br>");
    }