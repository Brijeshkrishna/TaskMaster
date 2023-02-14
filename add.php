<?php
include 'dbconnect.php';


if (isset($_POST['submit'])) {

    if (empty($_POST['task'])) {
        $errors = "You must fill in the task";
    } else {
        $task = trim($_POST['task']);
        $due = $_POST['due'];
        $user = getusername();

        echo $dbconnection->query("INSERT INTO `todo` (`id`, `task`, `due_date`, `status`, `user_name`) VALUES (NULL, '$task', '$due', '0', '$user');");

    }
}

$dbconnection->query("select * from todo");

header("Location: index.php");
exit;
?>