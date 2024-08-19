<?php
session_start();
$_SESSION['user'] = '';
// log out the user
session_destroy();

header('Location: index.php');
?>