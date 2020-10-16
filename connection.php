<?php
     //buat koneksi dengan database mysql
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "ojtit";
     $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

      //periksa koneksi, tampilin pesan jika gagal konek
    if(!$conn){
        die ("Koneksi dengan database gagal: ".mysqli_connect_errorno()."-".mysqli_connect());
    }

?>
