<?php 

class Task {
    private $task_id;
    private $user;
    private $tittle;
    private $description;
    private $category;
    private $priority;
    private $completed;
    private $created_date;
    private $finished_date;


public function __construct($task_id, $user, $tittle, $description, $category, $priority, $completed, $created_date, $finished_date){
    $this->task_id = $task_id;
    $this->user = $user;
    $this->tittle = $tittle;
    $this->description = $description;
    $this->category = $category;
    $this->priority = $priority;
    $this->completed = $completed;
    $this->created_date = $created_date;
    $this->finished_date = $finished_date;
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
                $row['task_id'],
                $row['user'],
                $row['tittle'],
                $row['description'],
                $row['category'],
                $row['priority'],
                $row['completed'],
                $row['created_date'],
                $row['finished_date']
            );
            $tasks[] = $tasks;
        }
    }

    return $tasks;
}

}
?>