<?php
include 'db.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn,
    "INSERT INTO users(
    name,email,password,role)

    VALUES(
    '$name',
    '$email',
    '$password',
    'patient'
    )");

    echo "Registered Successfully";
}
?>

<link rel="stylesheet" href="style.css">

<form method="POST">

<h2>Register</h2>

<input type="text"
name="name"
placeholder="Name">

<input type="email"
name="email"
placeholder="Email">

<input type="password"
name="password"
placeholder="Password">

<button type="submit"
name="register">
Register
</button>

</form>