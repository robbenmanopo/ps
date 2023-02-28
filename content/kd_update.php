<?php
//menampung nilai variable $_POST
$id_kd = $_POST['id_kd'];
$nama_kd = $_POST['nama_kd'];
//memasukkan data ke dalam database
$q="UPDATE kd SET
nama_kelas='$nama_kelas',
WHERE id_kd='$id_kd'
      ";
$query=mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data siswa berhasil ditambah');
    window.location.href='?hal=kelas_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Maaf, Data gagal diperbarui');
    window.location.href='?hal=kelas_tampil';
    </script>";
}
?>