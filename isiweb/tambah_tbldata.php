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

    <title>Table Data</title>
    <link rel="stylesheet" type="text/css" href="tbldata.css">


</head>

<body>


<?php
            include '../koneksi.php';
            
        
        ?>

<div class="login">
        <h1 class="judul">Tambah Pendaftaran</h1><hr>
        <div class="masuk">
<form method="post" action="tambah_tbldata_aksi.php" >

                    <input type="hidden" name="no">
                
                    <h3>Kode Pendaftar</h3><br>
                    <select name="kd_daftar" >
                                <option>Masukkan Kode Daftar</option>
                                <?php
                                    $kddaftar_query = mysqli_query($varkoneksi,"select * from data_pekerja");
                                    while($kddaftar_data = mysqli_fetch_array($kddaftar_query))
                                    {
                                ?>     
                                    <option value="<?php echo $kddaftar_data['kd_daftar']?>">
                                        <?php echo $kddaftar_data['kode_daftar']?>
                                    </option>    
                                <?php
                                    }
                                ?>
                            </select>
                
                    <h3>Nama Lengkap</h3><br>
                    <input type="text" name="nama_daftar" placeholder="Masukkan Nama Lengkap">
                
                    <h3>Posisi yang Diinginkan</h3><br>
                    
                    <select name="posisi_kerja" >
                                <option>Masukkan Kode</option>
                                <?php
                                    $posisi_query = mysqli_query($varkoneksi,"select * from posisi");
                                    while($posisi_data = mysqli_fetch_array($posisi_query))
                                    {
                                ?>     
                                    <option value="<?php echo $posisi_data['posisi_kerja']?>">
                                        <?php echo $posisi_data['rm_padang']?>
                                    </option>    
                                <?php
                                    }
                                ?></select>
               
                    <h3>Tempat Kerja yang Diinginkan</h3><br>
                    <select name="tempat_kerja" >
                                <option>Daftar</option>
                                <?php
                                    $tempat_query = mysqli_query($varkoneksi,"select * from tempat");
                                    while($tempat_data = mysqli_fetch_array($tempat_query))
                                    {
                                ?>     
                                    <option value="<?php echo $tempat_data['tempat_kerja']?>">
                                        <?php echo $tempat_data['tpt_kerja']?>
                                    </option>    
                                <?php
                                    }
                                ?></select>
                </div>
                    <a href="../dashboard.php?page=kerja" onclick="return confirm('Apa Anda yakin ingin kembali?')">Back</a>
                    <input class="sub" type="submit" name="Submit" value="Submit" onclick="return confirm('Apa Anda yakin akan mengirimkan data?')">
</form>
</div>

</body>

</html>