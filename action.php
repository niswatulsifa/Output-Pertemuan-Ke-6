<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "output_pertemuan_6";
$koneksi = mysqli_connect("localhost", "root", "", "output_pertemuan_6");
$id_mhs = $_POST['id_mhs'];
$prodi_mhs = $_POST['id_prodi'];
$nama_mhs = $_POST['nama_mhs'];
$alamat_mhs = $_POST['alamat_mhs'];
$sql = "INSERT INTO tbl_mhs VALUES ('$id_mhs','$prodi_mhs','$nama_mhs','alamat_mhs')";
$hasil = mysqli_query($koneksi, $sql);

if (!$hasil) {
	echo "Tambah Data Mahasiswa Gagal";
} else {
	echo "Tambah Data Mahasiswa Berhasil <br>";
	echo "<a href = 'output6.php'>Show Data</a>";
}

?>