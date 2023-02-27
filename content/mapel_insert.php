
<?php
//print_r($_POST);
include "library/config.php";
//menampung nilai variable $_POST
$nama_mapel = $_POST['nama_mapel'];
$id_kelas = $_POST['id_kelas'];

//memasukkan data ke dalam database
$q="INSERT INTO mapel SET
nama_mapel='$nama_mapel',
id_kelas='$id_kelas'
";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Mata Pelajaran berhasil ditambah');
    window.location.href='?hal=mapel_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Maaf, Data Mata Pelajaran kelas gagal ditambah');
    window.location.href='?hal=mapel_tampil';
    </script>";
}
?>