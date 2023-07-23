<?php 

class Task {
    private $id_task;
    private $user;
    private $title;
    private $description;
    private $category;
    private $priority;
    private $completed;
    private $created_date;
    private $finished_date;


public function __construct($id_task, $user, $title, $description, $category, $priority, $completed, $created_date, $finished_date){
    $this->id_task = $id_task;
    $this->user = $user;
    $this->title = $title;
    $this->description = $description;
    $this->category = $category;
    $this->priority = $priority;
    $this->completed = $completed;
    $this->created_date = $created_date;
    $this->finished_date = $finished_date;
}

// Métodos para obtener los datos de la tarea
public function getIdTask() {
    return $this->id_task;
}
public function gettitle() {
    return $this->title;
}
public function getDescription() {
    return $this->description;
}
public function getUser() {
    return $this->user;
}
public function getCategory() {
    return $this->category;
}
public function getPriority() {
    return $this->priority;
}
public function getCompleted() {
    return $this->completed;
}
public function getCreatedDate() {
    return $this->created_date;
}
public function getFinishedDate() {
    return $this->finished_date;
}

//ESTA FUNCION A TASKCONTROLER.PHP
// listar todas las tareas

public static function getAllTasks(){

    global $conn;
    $query = "SELECT * FROM tasks";
    $result = $conn->query($query);

    $tasks = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $task = new Task(
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
            $tasks[] = $task;
        }
    }

    return $tasks;
}

}
?>