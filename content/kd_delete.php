<?php
include "library/config.php";

//menghapus data sesuai id_siswa yang dipilih
$q = "DELETE FROM kd WHERE id_kd='$_GET[id]'";
$query = mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Kompetensi Dasar berhasil dihapus');
    window.location.href='?hal=kd_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Maaf, Data Kompetensi Dasar gagal dihapus');
    window.location.href='?hal=kd_tampil';
    </script>";
}
?>

