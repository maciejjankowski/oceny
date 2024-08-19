<?php
session_start();

if (!isset($_SESSION['user'])){
    $_SESSION['user'] = 'admin'; // this is temporary
} else {
    // header('Location: admin.php');
}
?>

<html>
<head>
    <title>Logowanie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Logowanie</h1>
<form method="post" action="admin.php">
<label for="login">Login:</label><br>
    
<input type="text" name="login"><br>
<label for="password">Password:</label><br>
    
    <input type="password" name="password"><br>
    <input type="submit">
</form>

