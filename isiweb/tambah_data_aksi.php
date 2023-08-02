
<?php
//mulai session
session_start();

//konek database
include '../koneksi.php';

// cek ketika klik submit, insert form data ke tbl_user.
if(isset($_POST['Submit'])) 
{
    $kode_daftar=$_POST['kode_daftar'];
    $nama=$_POST['nama'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $jenkel=$_POST['jenkel'];
    $pdd_terakhir=$_POST['pdd_terakhir'];
    $email=$_POST['email'];

   
        $insertdata=mysqli_query($varkoneksi,"insert into data_pekerja (kode_daftar,nama,tanggal_lahir,alamat,jenkel,pdd_terakhir,email) VALUES('$kode_daftar','$nama','$tanggal_lahir','$alamat','$jenkel','$pdd_terakhir','$email')");


    // Tambahkan pesan ketika berhasil ditambahkan
    header("location:../dashboard.php");
    
echo '<script type ="text/JavaScript">';  
echo 'alert("Berhasil")';  
echo '</script>';  

}

   
?>