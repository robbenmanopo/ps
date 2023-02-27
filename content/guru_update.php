<?php
//print_r($_POST);
include "library/config.php";
//menampung nilai variable $_POST
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$id_mapel = $_POST['id_mapel'];
$username = $_POST['username'];
$password = $_POST['password'];
$id_guru= $_POST['id_guru'];

//memasukkan data ke dalam database
$q="UPDATE data_guru SET
nama_guru='$nama_guru',
jk='$jk',
id_mapel='$id_mapel',
username='$username',
password='$password'
WHERE id_guru = '$id_guru'
";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Guru berhasil diedit');
    window.location.href='?hal=guru_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Maaf, Data guru gagal diedit');
    window.location.href='?hal=guru_tampil';
    </script>";
}
?>