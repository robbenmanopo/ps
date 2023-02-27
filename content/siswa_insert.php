<?php

//menampung nilai variable $_POST
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$id_kelas = $_POST['id_kelas'];

//memasukkan data ke dalam database
$q="INSERT INTO data_siswa SET
nis='$nis',
nama_siswa='$nama_siswa',
jk='$jk',
tgl_lahir='$tgl_lahir',
alamat='$alamat',
id_kelas='$id_kelas'";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data siswa berhasil ditambah');
    window.location.href='?hal=siswa_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Maaf, Data siswa gagal ditambah');
    window.location.href='?hal=siswa_tampil';
    </script>";
}
?>