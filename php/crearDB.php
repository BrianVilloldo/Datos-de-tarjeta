<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
//la pc que estas usando
$servername = "localhost";
//el usuario por defecto root
$username = "root";
//por defecto en blanco
$password = "";

// Crea la conexión
$conn = mysqli_connect($servername, $username, $password);
// chequa la conexión
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Crea la tabla
$sql = "CREATE DATABASE tarjeta";
if (mysqli_query($conn, $sql)) {
echo "BASE DE DATOS CREADA CORRECTAMENTE";
} else {
echo "ERROR AL CREAR LA BASE DE DATOS: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
