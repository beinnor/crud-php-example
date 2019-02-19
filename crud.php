<?php

$dbPath = "db.sqlite";
$tableName = "users";

// Connect
$db = new SQLite3($dbPath, SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

// Create table
$db->query("CREATE TABLE IF NOT EXISTS '$tableName' (
  'id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  'username' VARCHAR,
  'age' INTEGER
)");

// Insert (create)
if (isset($_POST['create'])) {

  $id = (int) $_POST['id'];
  $username = $_POST['username'];
  $age = (int) $_POST['age'];

  if ($_POST['id'] == "") {
    $db->query("INSERT INTO '$tableName' (username, age) VALUES ('$username', '$age')");  
  } else {
    $db->query("INSERT INTO '$tableName' (id, username, age) VALUES ('$id', '$username', '$age')");
  }

  header("Location: index.php");
}

// Delete
if (isset($_POST['delete'])) {

  $id = (int) $_POST['id'];
  $username = $_POST['username'];
  $age = (int) $_POST['age'];

  $db->query("DELETE FROM $tableName WHERE id='$id' OR username='$username' OR age='$age'");
  
  header("Location: index.php");
}

// Update
if (isset($_POST['update'])) {

  $id = (int) $_POST['id'];
  $username = $_POST['username'];
  $age = (int) $_POST['age'];

  if ($_POST['username'] == '') {
    $db->query("UPDATE $tableName SET age = '$age' WHERE id='$id';");
  } else if ($_POST['age'] == '') {
    $db->query("UPDATE $tableName SET username = '$username' WHERE id='$id';");
  } else {
    $db->query("UPDATE $tableName SET username = '$username', age = '$age' WHERE id='$id';");
  }
  
  header("Location: index.php");
}