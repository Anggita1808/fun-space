<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css1/beranda.css">
    <title>Beranda</title>
</head>
<body>
<div class="list">
                <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="dashboard.php?page=kerja">Daftar Pekerjaan</a></li>
                <li><a href="dashboard.php?page=data">Data Dikirim</a></li>
                <li><a href="isiweb/tambah_data.php">Tambah Data</a></li>
                <li><a href="isiweb/tambah_tbldata.php">Tambah Daftar Kerja</a></li>
                </ul>
            </div>
	<div class="all">
    <div style=" margin-left:30%;width:43%;" class="px-2 bg-light "><marquee class="py-3" direction="right" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="11">
        <h1>Pekerjaan Tentang Informasi Berbagi - Information Job Sharing - LunarLoker Website di Datang Selamat</h1>
        </marquee></div>
        <form action="" method="get">
            <input class="cari" type="text" name="keyword">
            <input class="cari2" type="submit" name="cari" value="Cari">
        </form>    

<div class="animate-text">
        <span>INFO <br> LOWONGAN <br>KERJA</span>
        <span>TEMUKAN <br> PEKERJAAN<br> ANDA</span>
        <span style="margin-left:33%;">PEMBUKAAN <br>PENDAFTARAN <br>KERJA</span>
    </div>  
 
 <div class="tbl">
                    <tbody>
                        <?php 
                        include 'koneksi.php';

                            if(isset($_POST['cari'])){
                                $search = $_POST['keyword'];

                                $query = mysqli_query($varkoneksi, "SELECT * FROM pekerjaan2 WHERE tempat_bekerja LIKE '%$search%' ORDER BY id_pekerjaan ASC");
                            } else {
                                $query = mysqli_query($varkoneksi, "SELECT * FROM pekerjaan2 ORDER BY id_pekerjaan ASC");
                            }

                            $no = 1;

                            while($row = mysqli_fetch_assoc($query)) {
                        ?>
                        
                        <?php } ?>
    </div>
    </div>
    <img width: 5%;
    height: 50px; class="icon4" src="isiweb/imgasset/el.png" >
    <a href="dashboard.php?page=user"><img width: 5%;
    height: 50px; class="icon3" src="isiweb/imgasset/iniorang.png" ></a><br>
    <div class="nama">𝐔𝐍𝐀𝐑 𝐋𝐎𝐊𝐄𝐑</div>
</body>
</html>