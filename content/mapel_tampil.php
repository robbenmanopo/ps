<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Mata Pelajaran
        <!--<small>advanced tables</small>-->
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a class="btn btn-md btn-primary" href="?hal=mapel_tambah">Tambah</a>
                    <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Kelas</th>
                            <th class="
<?php
//fungsi untuk menyembunyikan tombol aksi jika rolenya operator
if ($_SESSION['role']==2 or $_SESSION['role']==3){
    echo "hidden";
}
?>
">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $tampil = "SElECT * FROM view_mapel";
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
                                <td class="
<?php
//fungsi untuk menyembunyikan tombol aksi jika rolenya operator
if ($_SESSION['role']==2 or $_SESSION['role']==3){
    echo "hidden";
}
?>
">
                                    <!-- Modifikasi tombol edit dan hapus-->
                                    <a class="btn btn-sm btn-warning"
                                       href="?hal=mapel_edit&id=<?= $data['id_mapel'] ?>"> Edit </a>
                                    <a class="btn btn-sm btn-danger"
                                       href="?hal=mapel_delete&id=<?= $data['id_mapel'] ?>"> Hapus </a>
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