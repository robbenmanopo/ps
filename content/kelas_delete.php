<?php
include "library/config.php";

//menghapus data sesuai id_siswa yang dipilih
$q = "DELETE FROM data_kelas WHERE id_kelas='$_GET[id]'";
$query = mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data kelas berhasil dihapus');
    window.location.href='?hal=kelas_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Maaf, Data kelas gagal dihapus');
    window.location.href='?hal=kelas_tampil';
    </script>";
}
?>
