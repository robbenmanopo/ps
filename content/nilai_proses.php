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
?>
<pre>
    <?php
    print_r ($data);
    ?>
</pre>



<?php

//===================================
//query mencari nilai akhir dan memasukkan ke dalam variabel $data_nilai_akhir
//===================================

foreach($data as $data => $row){
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
?>
<pre>
    <?php
    print_r ($data_nilai_akhir);
    ?>
</pre>

<?php

//melakukan perulangan untuk insert data
$sql="INSERT INTO data_nilai_akhir (id_siswa, id_mapel, nilai_akhir) VALUES";

 foreach($data AS $data) {
//      $data[]="('".$_POST['id_siswa'][$i]."','".$_POST['id_mapel'][$i]."','".
//      $_POST['id_kd'][$i]."','".$_POST['n_tugas'][$i]."','".$_POST['n_harian'][$i]."','".$_POST['n_uts'][$i]."','".$_POST['n_uas'][$i]."')";

    //   $sql .= "('".$data[$i][$0]."','".$id_mapel."','".$data_nilai_akhir[$i][0]."')";
      echo $data[$id][0];
      echo $id_mapel;
      echo $data_nilai_akhir[$i][0];
  }
// $sql = rtrim($sql, ',');


// $q="SELECT ((avg(n_harian) * 2)+ avg(n_uts) + avg(n_uas)) / 4
//     FROM data_nilai WHERE $i[$id_kelas], $i[$id_mapel]";

// $q="INSERT INTO data_nilai_akhir SET
// nilai_akhir="$nilai_akhir"
// ";



?>