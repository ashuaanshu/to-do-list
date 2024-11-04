<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO</title>
</head>
<body>
    <h1> To Do List</h1>
    <form action="add_task.php" method="POST">
        <input type="text" name="task" placeholder="Enter your task" required>
        <button type="submit">Add Task</button>
    </form>
    <h2> Tasks </h2>
<ul>
    <?php
    $tasks=file("task.txt", FILE_IGNORE_NEW_LINES);
    foreach($tasks as $index =>$task) {
        echo "<li> $task <a href='delete_task.php?index=$index'> Delete </a> </li>";
    }
    ?>
    </ul>
</body>
</html>