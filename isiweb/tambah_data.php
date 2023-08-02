<?php
    //mulai session
    session_start();

    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:login.php?pesan=belum_login");
    }

    // koneksi ke database
    include '../koneksi.php';

?>

<!DOCTYPE html>

<html>

<head>

 <title>Data Pekerja</title>
 <link rel="stylesheet" type="text/css" href="data.css">

</head>

<body>


<div class="login">
        <h1 class="judul">Tambah Pendaftaran</h1><hr>
        <div class="masuk">


<form method="post" action="tambah_data_aksi.php" enctype="multipart/form-data" >

                
                    <input type="hidden" name="kd_daftar"></td>
                
                    <h3>Kode Pendaftaran<br>
                        (DAFTARtanggallahir)</h3><br>
                    <input type="text" name="kode_daftar" placeholder="contoh 'DAFTAR180805'">
                
                    <h3>Nama Lengkap</h3><br>
                    <input type="text" name="nama" placeholder="Enter Your Name'">
                
                    <h3>Tanggal Lahir</h3><br>
                   <label for="Date of Birth">
                    <input type="date" name="tanggal_lahir" placeholder="dd/mm/yyyy"></label>
                
                    <h3>Alamat</h3><br>
                    <input type="text" name="alamat" placeholder="Enter Your Address">
                </div>
                
                   
                    <h3>Jenis Kelamin</h3><br>
                    <input type="radio" name="jenkel" value="Laki-laki">Laki-laki<br>
                    <input type="radio" name="jenkel" value="Perempuan">Perempuan
                    

                    <div class="masuk2">
                    <h3>Pendidikan Terakhir</h3><br>
                    <input type="text" name="pdd_terakhir" placeholder="Last Education">
                
                    <h3>Email</h3><br>
                    <input type="text" name="email" placeholder="Enter Your Email"><br>
                    </div>

                    <a href="../dashboard.php?page=kerja" onclick="return confirm('Apa Anda yakin ingin kembali?')">Back</a>
                    <input class="sub" type="submit" name="Submit" value="Submit" onclick="return confirm('Apa Anda yakin akan mengirimkan data?')">
                    <a href="tambah_tbldata.php" onclick="return confirm('Apa Anda yakin ingin lanjut?')">Next</a>
                
</form>
</div>

</body>

</html>