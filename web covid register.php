<?php
    include 'aset/header.php';
    include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!--<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">   
        <title>register</title>-->
        <link rel="stylesheet" type="text/css" href="style.css">

        <title>=REGISTRASI=</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
	    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
	    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
	    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="css/util.css">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">

                <div class="form">
                    <p class="tulisan">Silahkan Daftar</p>

                    <form method="post">

                        <label>Id User</label><br>
                        <input type="int" name='id_user' placeholder="id..." class="form_login"><br>
                    
                        <label>Nama</label><br>
                        <input type="text" name='nama' placeholder="nama..." class="form_login"><br>

                        <label>Email</label><br>
                        <input type="text" name='email' placeholder="email..." class="form_login" ><br>

                        <label>Password</label><br>
                        <input type="text" name='password' placeholder="password..." class="form_login"><br>

                        <input class="submit" type="submit" name='simpan' value="Daftar">

                    </form>              
                </div>
            </div>
	    </div>
    </body>
</html>

<?php
    include 'koneksi.php';
    if(@$_POST['simpan']){
        $id_user = @$_POST['id_user'];
        $nama = @$_POST['nama'];
        $email = @$_POST['email'];
        $password = @$_POST['password'];
    

        $query = mysqli_query($koneksi, "INSERT INTO `user` (id_user, nama, email, password)
            VALUES ('$id_user', '$nama', '$email', '$password')");

        if($query){
            echo "<div class='form'>
                <h3>berhasil registrasi akun!</h3>
                <br/>Klik untuk <a href='login.php'>login</a>
            </div>";
        }else{
            echo "<div class= 'form'>
                <h3>silahkan coba lagi</h3>
            </div>";
        }
    }
    
?>



