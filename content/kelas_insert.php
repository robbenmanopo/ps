
<?php
//print_r($_POST);
include "library/config.php";
//menampung nilai variable $_POST
$nama_kelas = $_POST['nama_kelas'];

//memasukkan data ke dalam database
$q="INSERT INTO data_kelas SET
nama_kelas='$nama_kelas'";

$query=mysqli_query($con,$q);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil ditambah');
    window.location.href='?hal=kelas_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data gagal ditambah');
    window.location.href='?hal=kelas_tampil';
    </script>";
}
?>