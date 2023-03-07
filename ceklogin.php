<?php
session_start();
include "library/config.php";
$role = $_POST['id_role'];
$username = $_POST['username'];
$password = $_POST['password'];

if($role==4){
    $query = mysqli_query($con, "SELECT * FROM data_siswa JOIN role USING(id_role) WHERE
                       username='$username' AND
                       password='$password' AND
                       id_role='$role'");
$data = mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);
// mod-multiple-role
if ($jml > 0) {
    $_SESSION['nama_siswa'] = $data['nama_siswa'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['id_role'];
    $_SESSION['nama_role'] = $data['nama_role'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nis'] = $data['nis'];
    $_SESSION['id_kelas'] = $data['id_kelas'];
    $_SESSION['id_siswa'] = $data['id_siswa'];
    header('location: index.php');
} else {
    echo "<script>
            window.alert('Maaf, username dan password anda salah');
            window.location.href='login.php';
            </script>";
}
}else {
    $query = mysqli_query($con, "SELECT * FROM view_user WHERE
                       username='$username' AND
                       password='$password' AND
                       id_role='$role'");
$data = mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);
// mod-multiple-role
if ($jml > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['id_role'];
    $_SESSION['nama_role'] = $data['nama_role'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nik'] = $data['nik'];
    header('location: index.php');
} else {
    echo "<script>
            window.alert('Maaf, username dan password anda salah');
            window.location.href='login.php';
            </script>";
}
}
?>