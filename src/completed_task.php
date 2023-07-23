<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task_id']) && isset($_POST['completed'])) {
    $task_id = $_POST['task_id'];
    $completed = $_POST['completed'];
    
    // Actualizar el estado de completado en la base de datos
    $query = "UPDATE tasks SET completed = '$completed' WHERE id_task = '$task_id'";
    if ($conn->query($query) === TRUE) {
        // Redirigir a la página principal después de actualizar el estado
        header('Location: ../public/index.php');
        exit();
    } else {
        echo "Error al marcar la tarea como completada: " . $conn->error;
    }
}

$conn->close();
?>