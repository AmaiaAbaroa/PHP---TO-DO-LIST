<?php 

require_once "../src/Task.php";
require_once "../src/config.php";


// Obtener todas las tareas
$tasks = Task::getAllTasks();

// Mostrar las tareas en una lista
echo "<div>";
    echo "<ul>";
    foreach ($tasks as $task) {
        echo "<li>";
            // Mostrar los detalles de la tarea 
            echo '<input type="radio" name="completed" value="1" ' . ($task->getCompleted() ? 'checked' : '') . ' onchange="markCompleted(' . $task->getIdTask() . ', this) ">';
            echo '<span id="taskTitle_' . $task->getIdTask() . '" style="text-decoration: ' . ($task->getCompleted() ? 'line-through' : 'none') . ';">' . "Task: " . $task->getTitle() . "<br>" .'</span>';
            // echo "Task: " . $task->getTitle() . "<br>";
            echo "Description: " . $task->getDescription() . "<br>";
            echo "User: " . $task->getUser() . "<br>";
            echo "Category: " . $task->getCategory() . "<br>";
            echo "Priority: " . $task->getPriority() . "<br>";
            echo "Created Date: " . $task->getCreatedDate() . "<br>";

            // Agregar botón "Borrar" con un formulario para enviar el ID de la tarea
            echo '<form method="POST" action="../src/delete_task.php">';
            echo '<input type="hidden" name="task_id" value="' . $task->getIdTask() . '">';
            echo '<input type="submit" value="Borrar">';
            echo '</form>';

            // Agregar botón "Editar" que redirige a la página de edición con el ID de la tarea
            echo '<form method="GET" action="../src/edit_task.php">';
            echo '<input type="hidden" name="task_id" value="' . $task->getIdTask() . '">';
            echo '<input type="submit" value="Editar">';
            echo '</form>';
        echo "</li>";
        }
    echo "</ul>";
echo "</div>";

?>

<script src="../src/completed.js"></script>