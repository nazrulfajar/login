<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $name = "login";
  $koneksi = mysqli_connect($host,$user,$pass) or die ("Koneksi ke database gagal");
  mysqli_select_db($koneksi,$name);

?>