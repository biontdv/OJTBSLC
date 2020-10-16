<?php
include("../connection.php");
$id=$_POST['id'];

$query="Delete from users where ID=$id";
$conn->query($query);
header("Location:../viewUsers.php");
?>