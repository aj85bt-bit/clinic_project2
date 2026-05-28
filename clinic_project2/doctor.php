<?php
session_start();
include 'db.php';

if(isset($_POST['reply'])){

    $id=$_POST['id'];
    $reply=$_POST['doctor_reply'];

    mysqli_query($conn,
    "UPDATE consultations
    SET doctor_reply='$reply',
    status='done'
    WHERE id='$id'");
}

$result=mysqli_query($conn,
"SELECT * FROM consultations");
?>

<link rel="stylesheet" href="style.css">

<h2>Doctor Dashboard</h2>

<?php
while($row=mysqli_fetch_assoc($result)){
?>

<form method="POST">

<b>Disease:</b>
<?php echo $row['disease']; ?>

<br><br>

<b>Description:</b>
<?php echo $row['description']; ?>

<br><br>

<b>Status:</b>
<?php echo $row['status']; ?>

<br><br>

<textarea
name="doctor_reply"><?php
echo $row['doctor_reply'];
?></textarea>

<input type="hidden"
name="id"
value="<?php echo $row['id']; ?>">

<button type="submit"
name="reply">
Send Reply
</button>

</form>

<br><hr><br>

<?php } ?>