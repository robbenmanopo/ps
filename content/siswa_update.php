<?php
//print_r($_POST);
include "library/config.php";
//menampung nilai variable $_POST
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$id_kelas = $_POST['id_kelas'];
$id_siswa = $_POST['id_siswa'];

//memasukkan data ke dalam database
$q="UPDATE data_siswa SET
nis='$nis',
nama_siswa='$nama_siswa',
jk='$jk',
tgl_lahir='$tgl_lahir',
alamat='$alamat',
id_kelas='$id_kelas'
WHERE id_siswa=$id_siswa
";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data siswa berhasil diperbaharui');
    window.location.href='?hal=siswa_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Maaf, Data siswa gagal diperbaharui');
    window.location.href='?hal=siswa_tampil';
    </script>";
}
?>