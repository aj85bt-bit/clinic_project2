<?php
session_start();
include 'db.php';

if(isset($_POST['send'])){

    $disease=$_POST['disease'];
    $description=$_POST['description'];

    $user_id=$_SESSION['user_id'];

    mysqli_query($conn,
    "INSERT INTO consultations(
    user_id,
    disease,
    description,
    status)

    VALUES(
    '$user_id',
    '$disease',
    '$description',
    'pending'
    )");

    echo "Consultation Sent";
}
?>

<link rel="stylesheet" href="style.css">

<form method="POST">

<h2>Consultation</h2>

<input type="text"
name="disease"
placeholder="Disease">

<textarea
name="description"
placeholder="Description">
</textarea>

<button type="submit"
name="send">
Send
</button>

</form>