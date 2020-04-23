<?php
    include 'aset/header.php';
    include 'koneksi.php';

    $email = (@$_POST ['email']);
    $password = (@$_POST ['password']);

    $query ="SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $sql = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($sql)){
        session_start();
        $_SESSION['email'] = $email;
       echo "<h3>berhasil login</h3>
       <br/>klik untuk <a href = 'text1.php'>cek kesehatan</a> ";
    }else{
        echo "<h3> email atau password anda Salah !!";
        echo "<div class= 'from' >
                <h3>
                <br/> Klik untuk <a href='login.php'>Login lagi</a>
                </h3>
            </div>";
    }
?>
