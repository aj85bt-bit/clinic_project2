<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
?>

<link rel="stylesheet" href="style.css">

<h2>Patient Page</h2>

<a href="consultation.php">
Request Consultation
</a>

<br><br>

<a href="logout.php">
Logout
</a>