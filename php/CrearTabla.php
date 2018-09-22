<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarjeta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE usuariosT (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellido VARCHAR(30) NOT NULL,
numerotar VARCHAR(16),
codseguridad VARCHAR(3)
)";

if ($conn->query($sql) === TRUE) {
echo "TABLA CREADA CORRECTAMENTE";
} else {
echo "ERROR AL CREAR LA TABLA: " . $conn->error;
}

$conn->close();
?>
