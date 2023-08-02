<?php
   
   

   

    // Fetch semua data user dari database
    $result = mysqli_query($varkoneksi, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir | Lowongan Kerja</title>
    <link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
<div style=" margin-left:30%;width:43%;color:white;" class="px-2 bg-light "><marquee class="py-3" direction="right" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="11">
        <h1>Pekerjaan Tentang Informasi Berbagi - Information Job Sharing - LunarLoker Website di Datang Selamat</h1>
        </marquee></div>
        <h2 style="color:white;"><center>Data Akun Anda</center></h2>

<center>
        <table width='80%' border=1>
            <tr>
                <th>Kode Daftar</th> 
                <th>Nama Lengkap</th> 
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>  
            </tr>

            <?php

        while ($user_data = mysqli_fetch_array($result)) {
    ?>

        <tr>
            <td> <?php echo $user_data['nama_daftar'] ?></td>
            <td> <?php echo $user_data['nama_user']?></td>
            <td> <?php echo $user_data['username']?>
            <td> <?php echo $user_data['password'] ?></td>
            <td> <?php echo $user_data['email'] ?></td>
        </tr>

    <?php
        }
    ?>
        </table>

    
    <a style="color:white; text-decoration:none;font-family: Verdana, Geneva, Tahoma, sans-serif;" href="logout.php"><h3>LOGOUT</h3></a>

    </center>
</body>
</html>