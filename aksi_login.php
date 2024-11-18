<?php
   session_start();


    include'koneksi.php';

     $username = $_POST['user'];
     $password = $_POST['password'];

     $data = mysqli_query($koneksi,"SELECT * FROM user WHERE username=$username AND password='$password'");

     $cek = mysqli_mun_row($data);

     if($cek > 0 ){
        header("location:anggota.php");
     }esle{
        header("location:login.php");
     }

?>