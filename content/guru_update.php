<?php
//print_r($_POST);
include "library/config.php";
//menampung nilai variable $_POST
$nama_guru = $_POST['nama_guru'];
$id_mapel = $_POST['id_mapel'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$id_kelas = $_POST['id_kelas'];

//memasukkan data ke dalam database
$q="INSERT INTO data_guru SET
nama_guru='$nama_guru',
id_mapel='$id_mapel',
jk='$jk',
username='$username',
id_kelas='$id_kelas'";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Guru berhasil ditambah');
    window.location.href='?hal=guru_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Maaf, Data guru gagal ditambah');
    window.location.href='?hal=guru_tampil';
    </script>";
}
?>