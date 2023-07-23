<?php
require_once "../src/Task.php";
require_once "../src/config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['task_id'])) {
    $task_id = $_GET['task_id'];
    
    // Crea una función en "Task.php" para obtener una tarea por su ID
    function getTaskById($id_task) {
        global $conn;
        $query = "SELECT * FROM tasks WHERE id_task = '$id_task' LIMIT 1";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Task(
                $row['id_task'],
                $row['user'],
                $row['title'],
                $row['description'],
                $row['category'],
                $row['priority'],
                $row['completed'],
                $row['created_date'],
                $row['finished_date']
            );
        } else {
            return null;
        }
    }
    
    // Obtén la tarea por su ID
    $task = getTaskById($task_id);
    
    if ($task) {
        // Aquí puedes mostrar el formulario para editar la tarea con los valores prellenados
        
        echo '<h1>Edit Task Here:</h1>';
        echo '<form method="POST" action="../src/update_task.php">'; // Modificamos aquí la acción
        echo '<input type="hidden" name="task_id" value="' . $task->getIdTask() . '">';
        echo 'Title: <input type="text" name="title" value="' . $task->getTitle() . '"><br>';
        echo 'Description: <input type="text" name="description" value="' . $task->getDescription() . '"><br>';
        echo 'User: <input type="text" name="user" value="' . $task->getUser() . '"><br>';
        echo 'Category: <input type="text" name="category" value="' . $task->getCategory() . '"><br>';
        echo 'Priority: <input type="text" name="priority" value="' . $task->getPriority() . '"><br>';
        echo 'Created Date: <input type="date" name="created_date" value="' . $task->getCreatedDate() . '"><br>';
        // ... Otros campos para editar ...
        echo '<input type="submit" value="Save Changes">';
        echo '</form>';
        
    } else {
        echo 'Tarea no encontrada.';
    }
}
?>