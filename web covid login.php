<?php
    include 'aset/header.php';
    include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="style.css">

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
        
    </head>
    <body>
        <div class="limiter">
		    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
           
                <div class="form">
                    <p class="tulisan">Silahkan Login</p>

                    <form action="cek_login.php" method="post">

                        <label>Email</label><br>
                        <input type="text" name='email' placeholder="Email..." class="form_login" ><br>

                        <label>Password</label><br>
                        <input type="text" name='password' placeholder="password..." class="form_login"><br>

                        <input type="submit" name='simpan' value="Login" class=submit><hr>
                    </form>

                    <a href="register.php" class="submit">Daftar</a>
                </div>
            </div>
        </div>

    </body>
</html>
