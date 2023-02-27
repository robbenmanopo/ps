<?php
include "library/config.php";

//menghapus data sesuai id_siswa yang dipilih
$q = "DELETE FROM data_siswa WHERE id_siswa='$_GET[id]'";
$query = mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil dihapus');
    window.location.href='?hal=siswa_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Data gagal dihapus');
    window.location.href='?hal=siswa_tampil';
    </script>";
}
?>
