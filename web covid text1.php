<?php
    include 'aset/header.php';
    include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tes Kesehatan</title>
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
    <!--===============================================================================================-->
    </head>
    <body>
    <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">

                <h2 align="center">Selamat Datang di IndoCOVID</h2><br>
                <h3 align="center">Berikut terdapat beberapa pertanyaan untuk 
                    pengecekan mandiri apakah anda terjangkit virus corona atau 
                    tidak</h3><br>
                <h3 align="center">Silahkan isi beberapa pertanyaan berikut dengan 
                    jujur</h3><br>

                <div class="form1">
                    <p class="tulisan">Silahkan Jawab</p>

                    <form method="post">
                        <label>1. Apakah anda mengalami kesulitan bernafas yang parah, nyeri dada yang parah dan beberapa masalah pernafasan lain?</label><br>
                        <input type="text" name='t1' placeholder="jawab ya/tidak dan" class="form_login"><br>

                        <label>2. Apakah anda mengalami nafas pendek kitika istirahat, ketidakmampuan untuk berbaring karena kesulitan bernafas, kondisi kronis lain terasa lebih parah karena kesulitan bernafas?</label><br>
                        <input type="text" name='t2' placeholder="jawab ya/tidak dan" class="form_login"><br>

                        <label>3. Apakah anda mengalami demam, batuk, bersin, sakit tenggorokan, sulit bernafas?</label><br>
                        <input type="text" name='t3' placeholder="jawab ya/tidak dan" class="form_login"><br>

                        <label>4. berapa suhu padan anda sekarang?</label><br>
                        <input type="text" name='t4' placeholder="jawab ya/tidak dan" class="form_login"><br>

                        <label>5. Apakah anda pernah muncul gejala sekitar 14 hari setelah traveling  ke luar negri? (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota yang terjangkit? </label><br>
                        <input type="text" name='t5' placeholder="jawab ya/tidak dan" class="form_login"><br>

                        <label>6. Apahak anda pernah merawat atau melakukan kontak dekat dengan seseorang yang mungkin bahkan terjangkit COVID-19?</label><br>
                        <input type="text" name='t6' placeholder="jawab ya/tidak dan" class="form_login"><br>

                        <label>7. Apakah anda memiliki kontak dengan seseorang yang bepergian ke luar negri dalam 14 hari terakhir? </label><br>
                        <input type="text" name='t7' placeholder="jawab ya/tidak dan" class="form_login"><br>

                        <input class="submit" type="submit" name='simpan' value="Kirim">

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    include 'koneksi.php';
    if(@$_POST['simpan']){
        $t1 = @$_POST['t1'];
        $t2 = @$_POST['t2'];
        $t3 = @$_POST['t3'];
        $t4 = @$_POST['t4'];
        $t5 = @$_POST['t5'];
        $t6 = @$_POST['t6'];
        $t7 = @$_POST['t7'];

        $query = mysqli_query($koneksi, "INSERT INTO `jawaban` (t1, t2, t3, t4, t5, t6, t7)
            VALUES ('$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7')");

        if($query){
            echo "<div class='form1'>
                <h3>berhasil mengirim jawaaban, terimakasih telah mnegisi pertanyaan dengan jujur!</h3>
                <br/>Klik untuk <a href='akhir.php'>selesai</a>
            </div>";
        }else{
            echo "<div class= 'form'>
                <h3>silahkan coba lagi</h3>
            </div>";
        }
    }
    
?>
