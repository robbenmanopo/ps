<?php
//menampung nilai variable $_POST
$id_kd = $_POST['id_kd'];
$deskripsi = $_POST['deskripsi'];

//memasukkan data ke dalam database
$q="UPDATE kd SET
deskripsi='$deskripsi'
WHERE id_kd='$id_kd'
      ";
$query=mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Kompetensi Dasar berhasil diperbarui');
    window.location.href='?hal=kd_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Maaf, Data Kompetensi Dasar gagal diperbarui');
    window.location.href='?hal=kd_tampil';
    </script>";
}
?>