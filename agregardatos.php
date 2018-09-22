<?php

$_nombre=$_POST['nombre'];

$_apellido=$_POST['apellido'];

$_numero=$_POST['num1']. $_POST['num2'] . $_POST['num3'] . $_POST['num4'];

$_codigo=$_POST['codigo'];

$server="localhost";

$user="root";

$pass="";

$db="tarjeta";

$conn=new mysqli($server,$user,$pass,$db);

if($conn -> connect_error){

die("conexion establecida" . $conn -> connect_error);

}

$sql="SELECT id, nombre, apellido, numerotar, codseguridad  FROM usuariosT";

$result = $conn -> query($sql);

$sql="INSERT INTO usuariosT(nombre, apellido, numerotar, codseguridad) VALUES ('" . $_nombre . "','" .  $_apellido . "','" .  $_numero . "','" .  $_codigo . "')";

if($conn -> query($sql) === TRUE){

echo "NUEVO REGISTRO";

}else{

echo "ERROR" . $sql . "<br>" . $conn -> error;

}

$conn -> close();
header("Location:index.html"); 
?>
