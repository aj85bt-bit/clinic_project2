<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
    "SELECT * FROM users
    WHERE email='$email'
    AND password='$password'");

    if(mysqli_num_rows($query)>0){

        $user = mysqli_fetch_assoc($query);

        $_SESSION['email']=$email;
        $_SESSION['role']=$user['role'];
        $_SESSION['user_id']=$user['id'];

        if($user['role']=="doctor"){
            header("Location: doctor.php");
        }else{
            header("Location: patient.php");
        }

    }else{
        echo "Wrong Email or Password";
    }
}
?>

<link rel="stylesheet" href="style.css">

<form method="POST">

<h2>Login</h2>

<input type="email"
name="email"
placeholder="Email">

<input type="password"
name="password"
placeholder="Password">

<button type="submit"
name="login">
Login
</button>

</form>