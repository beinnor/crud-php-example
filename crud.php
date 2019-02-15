<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "crud_php";
$tableName = "users";

$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName) or die(mysqli_error($mysqli));

if (isset($_POST['create'])) {

  $id = $_POST['id'];
  $username = $_POST['username'];
  $age = $_POST['age'];
  

  echo "id: " . $_POST['id'] . ", username: " . $_POST['username'] . ", age: "  . $_POST['age'];
  $mysqli->query("INSERT INTO $tableName (id, username, age) VALUES ('$id', '$username', '$age')") or
    die($mysqli->error);
}