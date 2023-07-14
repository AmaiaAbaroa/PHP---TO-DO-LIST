<?php 

require_once "../src/Task.php";
require_once "../src/config.php";

// Obtener todas las tareas
$tasks = Task::getAllTasks();

// Mostrar las tareas en una lista
echo "<h2>Tareas existentes:</h2>";
echo "<ul>";
foreach ($tasks as $task) {
echo "<li>";
echo "Título: " . $task->getTittle() . "<br>";
echo "Descripción: " . $task->getDescription() . "<br>";
// Mostrar otros detalles de la tarea según sea necesario
echo "</li>";
}
echo "</ul>";

?>