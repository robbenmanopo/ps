<?php
//menampung nilai variable $_POST
$sql="INSERT INTO data_nilai (id_siswa, id_mapel, id_kd, n_tugas, n_harian, n_uts, n_uas) VALUES";
  $urut=0;

  for ($i=0; $i < count($_POST['id_siswa']); $i++) {
//      $data[]="('".$_POST['id_siswa'][$i]."','".$_POST['id_mapel'][$i]."','".
//      $_POST['id_kd'][$i]."','".$_POST['n_tugas'][$i]."','".$_POST['n_harian'][$i]."','".$_POST['n_uts'][$i]."','".$_POST['n_uas'][$i]."')";

      $sql .= "('".$_POST['id_siswa'][$i]."','".$_POST['id_mapel'][$i]."','".
          $_POST['id_kd'][$i]."','".$_POST['n_tugas'][$i]."','".$_POST['n_harian'][$i]."','".$_POST['n_uts'][$i]."','".$_POST['n_uas'][$i]."'),";
  }
$sql = rtrim($sql, ',');
//echo $sql;
    //$query=mysqli_query($con, $sql.$data);



//memasukkan data ke dalam database
//$q="INSERT INTO data_kelas SET
//nama_kelas='$nama_kelas'";

$query=mysqli_query($con,$sql);

//aksi jika query sukses maupun gagal
if ($query){
//    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Nilai berhasil ditambah');
    window.location.href='?hal=nilai_tampil_mapel';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Maaf, Data Nilai gagal ditambah');
    window.location.href='?hal=nilai_tampil_mapel';
    </script>";
}
?>

