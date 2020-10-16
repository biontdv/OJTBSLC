<?php
    include("../connection.php");
    $nama = $_POST['name'];
    $nim = $_POST['nim'];
    $email  = $_POST['email'];
    
   
    $query = "INSERT into users (NIM,NAME,EMAIL) VALUES ('$nim','$nama','$email')";
    $result=$conn->query($query);
    header("Location:../index.php");
?>
