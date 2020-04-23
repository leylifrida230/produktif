<?php
    $db_host="127.0.0.1";
    $db_user="root";
    $db_pass="";
    $db_name="covid-19";
    $koneksi=mysqli_connect("127.0.0.1", "root", "", "covid-19");
    //check connection
    if(mysqli_connect_errno()){
        echo "koneksi database gagal".mysqli_connect_error();
    }else{
        echo "koneksi database berhasil";
    }
?>
