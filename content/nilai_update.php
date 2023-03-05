<?php
//menampung nilai variable $_POST
//$id_nilai = $_POST['id_nilai'];

$id_nilai=$_POST['id_nilai'];
$n_tugas=$_POST['n_tugas'];
$n_harian=$_POST['n_harian'];
$n_uts=$_POST['n_uts'];
$n_uas=$_POST['n_uas'];



for ($i=0; $i < count($id_nilai); $i++) {
//    echo $id_nilai[$i];
//    echo $n_tugas[$i];
//    echo $n_harian[$i];
//    echo $n_uts[$i];
//    echo $n_uas[$i]."<hr>";
    $sql="UPDATE data_nilai SET ";
    $data ="n_tugas=$n_tugas[$i], n_harian=$n_harian[$i], n_uts=$n_uts[$i], n_uas=$n_uas[$i] WHERE id_nilai=$id_nilai[$i]";
    $query=mysqli_query($con, $sql.$data);

}


//
//
//$sql="UPDATE data_nilai SET (n_tugas, n_harian, n_uts, n_uas)
//                  WHERE id_nilai='$id_nilai'
//      ";
//$urut=0;
//
//for ($i=0; $i < count($_POST['id_nilai']); $i++) {
////      $data[]="('".$_POST['id_siswa'][$i]."','".$_POST['id_mapel'][$i]."','".
////      $_POST['id_kd'][$i]."','".$_POST['n_tugas'][$i]."','".$_POST['n_harian'][$i]."','".$_POST['n_uts'][$i]."','".$_POST['n_uas'][$i]."')";
//
//    $sql .= "('".$_POST['n_harian'][$i]."','".$_POST['n_uts'][$i]."','".$_POST['n_uas'][$i]."'),";
//}
//$sql = rtrim($sql, ',');
////echo $sql;
////$query=mysqli_query($con, $sql.$data);
//
//
//
////memasukkan data ke dalam database
////$q="INSERT INTO data_kelas SET
////nama_kelas='$nama_kelas'";
//echo $sql;
////$query=mysqli_query($con,$sql);
//
////aksi jika query sukses maupun gagal
if ($query){
//    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, Data Nilai berhasil diedit');
    window.location.href='?hal=nilai_tampil_mapel';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Maaf, Data Nilai gagal diedit');
    window.location.href='?hal=nilai_tampil_mapel';
    </script>";
}
?>


