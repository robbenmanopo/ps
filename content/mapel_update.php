<?php
//menampung nilai variable $_POST
$id_siswa = $_POST['id_siswa'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$id_kelas = $_POST['id_kelas'];

//memasukkan data ke dalam database
$q="UPDATE data_siswa SET
nis='$nis',
nama='$nama',
jk='$jk',
id_kelas='$id_kelas'
WHERE id_siswa='$id_siswa'
      ";
$query=mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil diperbarui');
    window.location.href='?hal=siswa_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Data gagal diperbarui');
    window.location.href='?hal=siswa_tampil';
    </script>";
}
?>
