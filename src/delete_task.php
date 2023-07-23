<?php
require_once "Task.php";
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task_id'])) {
    $task_id = $_POST['task_id'];
    
    // Crear la consulta SQL para eliminar la tarea
    $query = "DELETE FROM tasks WHERE id_task = '$task_id'";
    
    // Ejecutar la consulta
    if ($conn->query($query) === TRUE) {
        // echo "Tarea borrada correctamente";

        // Redirigir a index.php después de agregar la tarea
        header('Location: ../public/index.php');
        exit();

    } else {
        echo "Error al borrar la tarea: " . $conn->error;
    }
    
    // Cerrar la conexión
    $conn->close();
}

?>