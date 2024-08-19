<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: login.php');
    exit();
} else {
    echo("Zalogowany");
}
?>
<html>
<head>
    <title>Oceny</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="logout.php">Wyloguj</a>
<h1>Oceny</h1>
<pre>
5   super szkolenie Marian
5   ekstra! Wiola
</pre>
</body>
</html>

