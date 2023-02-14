<?php

include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $task = trim($_POST['task']);
    $date = $_POST['due'];
    $status = ($_POST['done'] ?? 0) === "on" ? 1 : 0;
    $delete = $_POST['delete'] ?? 0;
    $id = $_POST['id'];

    if ($delete) {
        $dbconnection->query("DELETE  FROM `TODO` WHERE `ID` = '$id' ;");
    } else {
        $dbconnection->query("UPDATE `TODO`  SET `TASK` = '$task' , `DUE_DATE` = '$date' , `STATUS` = '$status'  WHERE `ID` = '$id'; ");
    }
}

header("Location: index.php");

?>