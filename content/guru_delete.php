<?php

//menghapus data sesuai id_siswa yang dipilih
$q = "DELETE FROM data_guru WHERE id_guru='$_GET[id]'";
$query = mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Guru berhasil dihapus');
    window.location.href='?hal=guru_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Maaf, Data Guru gagal dihapus');
    window.location.href='?hal=guru_tampil';
    </script>";
}
?>
