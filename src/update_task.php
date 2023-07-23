<?php
require_once "Task.php";
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task_id'])) {
    $task_id = $_POST['task_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    // ... Obtén los otros campos para editar ...
    
    // Crear la consulta SQL para actualizar la tarea
    $query = "UPDATE tasks SET title = '$title', description = '$description' WHERE id_task = '$task_id'";
    // ... Agregar los otros campos para actualizar ...
    
    // Ejecutar la consulta
    if ($conn->query($query) === TRUE) {
        // echo "Tarea actualizada correctamente";

        // Redirigir a index.php después de agregar la tarea
        header('Location: ../public/index.php');
    exit();
    } else {
        echo "Error al actualizar la tarea: " . $conn->error;
    }
    
    // Cerrar la conexión
    $conn->close();
}