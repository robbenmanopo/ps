<?php
//script final
// select ((avg(n_harian) * 2)+ avg(n_uts) + avg(n_uas)) / 4
// from data_nilai where id_mapel=1 and id_siswa=3

//script persiapan
// SELECT
// id_siswa,
// id_mapel,
// avg(n_harian) rata_harian,
// avg(n_uts) rata_uts,
// avg(n_uas) rata_uas
// from data_nilai where id_mapel=1 and id_siswa=3

//script awal
// Select * from data_nilai where id_mapel=1 and id_siswa=3

/** 
 * mengambil seluruh data id_siswa berdasarkan mapel tertentu dan disimpan dalam array id_siswa
 * melakukan perulanagan query untuk mendapatkan nilai akhir per-mapel untuk seluruh id_siswa sebelumnya dengan mapel tertentu:
select ((avg(n_harian) * 2)+ avg(n_uts) + avg(n_uas)) / 4
from data_nilai where id_mapel=1 and id_siswa=3
 * melakukan query insert nilai akhir kedalam tabel nilai alkhir (masuk dlm perulanagn sebelumnya)

 */

$id_kelas=$_GET['id_kelas'];
$id_mapel=$_GET['id_mapel'];

$query="SELECT id_siswa FROM data_siswa WHERE id_kelas=$id_kelas";

$ids=mysqli_query($con,$query);
//menyimpan seleksi data kedalam varibel array
$data= array();
while ($row = mysqli_fetch_array($ids)){
    $data[] = $row;
}


//===================================
//query mencari nilai akhir dan memasukkan ke dalam variabel $data_nilai_akhir
//===================================

foreach($data as $data_id_siswa => $row){
    $q="SELECT ((avg(n_harian) * 2)+ avg(n_uts) + avg(n_uas)) / 4 from data_nilai where id_mapel=$id_mapel and id_siswa=$row[0]";
$na=mysqli_query($con,$q);
$nilai_akhir=array();
while ($dna= mysqli_fetch_row($na)){
    $data_nilai_akhir[] = $dna;
}

//===================================
//query insert data rata-rata
//===================================

// $ids=mysqli_query($con,$q);


}


//melakukan perulangan untuk insert data
$sql="DELETE * FROM data_nilai_akhir WHERE id_na='$_GET[id]";
$u=0;
 foreach($data AS $id) {
//      $data[]="('".$_POST['id_siswa'][$i]."','".$_POST['id_mapel'][$i]."','".
//      $_POST['id_kd'][$i]."','".$_POST['n_tugas'][$i]."','".$_POST['n_harian'][$i]."','".$_POST['n_uts'][$i]."','".$_POST['n_uas'][$i]."')";

      $sql .= "(".$id['id_siswa'].",".$id_mapel.",".floor($data_nilai_akhir[$u][0])."),";
      
    //   echo $id['id_siswa'];
    //   echo "<br>";
    //   echo $id_mapel;
    //   echo "<br>";
    //   echo $data_nilai_akhir[$u][0];
      $u++;
  }

$sql = rtrim($sql, ',');
// echo $sql;

$proses_nilai=mysqli_query($con,$sql);

//membuat status nilai bernilai 1(sudah di proses)
// $query_status="UPDATE data_nilai SET status_nilai=1 WHERE id_mapel=$id_mapel";
$query_status="UPDATE mapel SET status_nilai=1 WHERE id_mapel=$id_mapel";

$proses_status=mysqli_query($con,$query_status);

//allert status nilai
if ($proses_nilai=true and $proses_status=true){
    // mod : menambah alert jika query berhasil
        echo "<script>
        window.alert('Alhamdulillah, Nilai Akhir berhasil di proses');
        window.location.href='?hal=nilai_tampil_mapel';
        </script>";
    } else {
    // mod : menambah alert jika query gagal
        echo "<script>
        window.alert('Maaf, Nilai Akhir gagal diproses.\nSilahkan Ulangi kembali atau Hubungi Admin.');
        window.location.href='?hal=nilai_tampil_mapel';
        </script>";
    }
// $q="SELECT ((avg(n_harian) * 2)+ avg(n_uts) + avg(n_uas)) / 4
//     FROM data_nilai WHERE $i[$id_kelas], $i[$id_mapel]";

// $q="INSERT INTO data_nilai_akhir SET
// nilai_akhir="$nilai_akhir"
// ";

// if($saldo_awal - $nominal<= 10000){
//     echo "<script>
//     window.alert('Maaf , Penarikan gagal!\\nSisa saldo minimal adalah Rp. 10.000,-');
//     window.location.href='?hal=nasabah_tampil';
//     </script>";
// } else{


?>