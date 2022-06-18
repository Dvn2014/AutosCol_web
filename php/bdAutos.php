<?php

//Conectar servidor de la bd

$host ="localhost";
 $user ="root";
 $pass ="";
 $db="autos_colombia";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");



 //recuperar las variables
 $nombre=$_POST['nombre'];
 $cedula=$_POST['cedula'];
 $direccion=$_POST['direccion'];
 $telefono=$_POST['telefono'];
 $placa=$_POST['placa'];
 $modelo=$_POST['modelo'];
 $color=$_POST['color'];
 $estado=$_POST['estado'];


 //setencia SQl

 $sql="INSERT INTO datos VALUES (' $nombre','$cedula','$direccion','$telefono','$placa','$modelo','$color','$estado') ";

 //Ejecutamos las secuencias
 $ejecutar=mysqli_query($con,$sql);

 //verificar  la ejecucion

 if(!$ejecutar){
    echo "Hubo un error";
 }else {
    echo " Datos guardados correctamente <br><a href='usuarios.html'>Volver</a>";
  }


 ?>