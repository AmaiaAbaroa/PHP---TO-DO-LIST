<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "to-do-list";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// // Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} 

echo "Conectada!";

?>