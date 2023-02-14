<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todolist";

$dbconnection = new mysqli($servername, $username, $password, $dbname);

if ($dbconnection->connect_error) {
    die("Connection failed: " . $dbconnection->connect_error);
}

function check_login()
{
    return isset($_COOKIE["username"]);
}
function getusername()
{
    return $_COOKIE["username"];
}

?>