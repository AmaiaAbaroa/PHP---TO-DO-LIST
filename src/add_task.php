<?php
require_once "config.php";

// Obtener los datos del formulario
$user = $_POST['user'];
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$priority = $_POST['priority'];
$completed = isset($_POST['completed']) ? 1 : 0;
$created_date = $_POST['created_date'];
$finished_date = $_POST['finished_date'];

// Crear la consulta SQL para insertar la tarea
$query = "INSERT INTO tasks (user, title, description, category, priority, completed, created_date, finished_date) 
          VALUES ('$user', '$title', '$description', '$category', '$priority', '$completed', '$created_date', '$finished_date')";

// Ejecutar la consulta
if ($conn->query($query) === TRUE) {
    // echo "Tarea agregada correctamente";

    // Redirigir a index.php después de agregar la tarea
    header('Location: ../public/index.php');
    exit();
} else {
    echo "Error al agregar la tarea: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>