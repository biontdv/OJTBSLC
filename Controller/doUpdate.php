
<?php
include('../connection.php');
$id=$_POST['id'];
$name=$_POST['name'];
$nim=$_POST['nim'];
$email=$_POST['email'];

$query="update users set NAME='$name',NIM='$nim',EMAIL='$email' where id=$id";
$conn->query($query);
header("Location:../viewUsers.php");
?>

