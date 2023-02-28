<?php

//menampung nilai variable $_POST
$id_mapel = $_POST['id_mapel'];
$kode_kd = $_POST['kode_kd'];
$deskripsi = $_POST['deskripsi'];


//memasukkan data ke dalam database
$q="INSERT INTO kd SET
id_mapel='$id_mapel',
kode_kd='$kode_kd',
deskripsi='$deskripsi'";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Kompetensi Dasar berhasil ditambah');
    window.location.href='?hal=kd_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Maaf, Data Kompetensi Dasar gagal ditambah');
    window.location.href='?hal=kd_tampil';
    </script>";
}
?>
