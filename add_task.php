<?php
if ($_SERVER ['REQUEST_METHOD']=='POST'){
$task=htmlspecialchars($_POST ['task']);

file_put_contents('task.txt', $task .PHP_EOL, FILE_APPEND);

header('Location: index.php');
exit();
}
?>