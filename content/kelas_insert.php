
<?php
//print_r($_POST);
include "library/config.php";
//menampung nilai variable $_POST
$nama_kelas = htmlspecialchars($_POST['nama_kelas']);

//memasukkan data ke dalam database
$q="INSERT INTO data_kelas SET
nama_kelas='$nama_kelas'";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data siswa berhasil ditambah');
    window.location.href='?hal=kelas_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data kelas gagal ditambah');
    window.location.href='?hal=kelas_tampil';
    </script>";
}
?>