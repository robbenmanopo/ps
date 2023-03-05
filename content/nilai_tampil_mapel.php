<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Nilai
        <!--<small>advanced tables</small>-->
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <!--<a class="btn btn-md btn-primary" href="?hal=nilai_tambah">Tambah</a>-->
                    <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $tampil = "SElECT * FROM view_mapel_guru WHERE nik='$_SESSION[nik]'";
                        $query = mysqli_query($con,$tampil);
                        $no=0;
                        while ($data = mysqli_fetch_array($query)) {
//        var_dump($data);
                            $no++;
                            ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama_mapel']; ?></td>
                                <td><?= $data['nama_kelas']; ?></td>
                                <td>
                                    <!-- Modifikasi tombol edit dan hapus-->
                                    <a class="btn btn-sm btn-success"
                                       href="?hal=nilai_tampil_kd&id=<?= $data['id_mapel'] ?>">Detail</a>
                                    <a class="btn btn-sm btn-danger
<?php
//fungsi untuk menyembunyikan tombol aksi jika rolenya operator
if ($_SESSION['role']==3){
    echo "hidden";
}
?>
"
                                       href="?hal=nilai_proses&id_kelas=<?= $data['id_kelas'] ?>&id_mapel=<?= $data['id_mapel'] ?>">Proses</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
