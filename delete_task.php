<?php
if (isset($_GET['index'])) {
    $index = (int)$_GET['index'];
    
    // Read tasks into an array, remove the task at the specified index, and rewrite the file
    $tasks = file('task.txt', FILE_IGNORE_NEW_LINES);
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
        file_put_contents('task.txt', implode(PHP_EOL, $tasks) . PHP_EOL);
    }
}

// Redirect back to index.php
header("Location: index.php");
exit();
?>
