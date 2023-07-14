<?php 

require_once "../src/Task.php";
require_once "../src/config.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>TO-DO List</title>
</head>
<body>
    <h1>TO-DO LIST</h1>
    <h2>Create a new TO-DO List</h2>
    <form method="POST" action="../src/add_task.php">
        <label>What´s up, </label>
        <input type="text" name="user" required>
        <br><br>

        <label>What´s on your list?</label>
        <input type="text" name="tittle" required>
        <br><br>

        <label>Give a short description:</label>
        <input type="text" name="description">
        <br><br>

        <label>Pick a category:</label>
        <select id="" name="category">
            <option value="null"> -- </option>
            <option value="personal">Personal</option>
            <option value="home">Home</option>
            <option value="business">Business</option>
            <option value="sports">Sports</option>
            <option value="studies">Studies</option>
        </select>
        <br><br>

        <label>Priority:</label>
        <select id="" name="priority">
            <option value="null"> -- </option>
            <option value="will do">Will DO</option>
            <option value="lets start">Let´s start</option>
            <option value="urgent">Urgent</option>
            <option value="asap">ASAP</option>
        </select>
        <br><br>

        <label>Completed:</label>
        <input type="checkbox" name="completed">
        <br><br>

        <label>Created on:</label>
        <input type="date" name="created_date">
        <br><br>

        <label>Finished on:</label>
        <input type="date" name="finished_date">
        <br><br>


        <input type="submit" value="ADD TASK">
    </form>
</body>
</html>