<?php

$host = "localhost:3307";
$user = "root";
$pass = "";
$dbname = "ajaxdemo";

$conn = mysqli_connect(
    $host,
    $user,
    $pass,
    $dbname
);

if (!$conn)
{
    die("Database Connection Failed");
}
?>