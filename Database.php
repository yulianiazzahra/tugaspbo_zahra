<?php
    error_reporting(0);
    $koneksi = mysqli_connect("localhost","root","","pbo2");
 
    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi Database Gagal : " . mysqli_connect_error();
    }
