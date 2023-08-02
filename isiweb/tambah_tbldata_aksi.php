
<?php
//mulai session
session_start();

//konek database
include '../koneksi.php';

// cek ketika klik submit, insert form data ke tbl_user.
if(isset($_POST['Submit'])) 
{
    $no=$_POST['no'];
    $kd_daftar=$_POST['kd_daftar'];
    $nama_daftar=$_POST['nama_daftar'];
    $posisi_kerja=$_POST['posisi_kerja'];
    $tpt_kerja=$_POST['tpt_kerja'];
   
        $insertdata=mysqli_query($varkoneksi,"insert into tabel_data (no,kd_daftar,nama_daftar,posisi_kerja,tpt_kerja) VALUES('$no','$kd_daftar','$nama_daftar','$posisi_kerja','$tpt_kerja')");


    // Tambahkan pesan ketika berhasil ditambahkan
    header("location:../dashboard.php");
}

   
?>