<?php
//print_r($_POST);
include "library/config.php";
//menampung nilai variable $_POST
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$id_kelas = $_POST['id_kelas'];

//memasukkan data ke dalam database
$q="INSERT INTO data_siswa SET
nis='$nis',
nama='$nama',
jk='$jk',
id_kelas='$id_kelas'";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil ditambah');
    window.location.href='?hal=siswa_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data gagal ditambah');
    window.location.href='?hal=siswa_tampil';
    </script>";
}
?>