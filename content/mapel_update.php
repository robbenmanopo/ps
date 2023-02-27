<?php
//menampung nilai variable $_POST
$id_mapel = $_POST['id_mapel'];
$nama_kelas = $_POST['nama_kelas'];
$id_kelas = $_POST['id_kelas'];

//memasukkan data ke dalam database
$q="UPDATE mapel SET
nama_mapel='$nama_mapel',
id_kelas='$id_kelas'
WHERE id_mapel='$id_mapel'
      ";
$query=mysqli_query($con,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Mata Pelajaran berhasil ditambah');
    window.location.href='?hal=mapel_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Maaf, Data Mata Pelajaran gagal diperbarui');
    window.location.href='?hal=mapel_tampil';
    </script>";
}
?>
