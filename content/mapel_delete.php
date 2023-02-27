<?php
include "library/config.php";

//menghapus data sesuai id_siswa yang dipilih
$q = "DELETE FROM mapel WHERE id_mapel='$_GET[id]'";
$query = mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Mata Pelajaran berhasil dihapus');
    window.location.href='?hal=mapel_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Maaf, Data Mata Pelajaran gagal dihapus');
    window.location.href='?hal=mapel_tampil';
    </script>";
}
?>
