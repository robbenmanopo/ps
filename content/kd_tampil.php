<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Kompetensi Dasar
        <!--<small>advanced tables</small>-->
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a class="btn btn-md btn-primary" href="?hal=kd_tambah">Tambah</a>
                    <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Nama Kelas</th>
                            <th>Kode. KD</th>
                            <th>Deskripsi. KD</th>
                            <th class="
<?php
//fungsi untuk menyembunyikan tombol aksi jika rolenya selain Admin
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
                        }
                            ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama_mapel']; ?></td>
                                <td><?= $data['nama_kelas']; ?></td>
                        <?php
                        $tampil1 = "SElECT * FROM view_kd";
                        $query = mysqli_query($con,$tampil1);
                        $no=0;
                        while ($data = mysqli_fetch_array($query)) {
                            //        var_dump($data);
                            $no++;
                        }
                            ?>

                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['kode_kd']; ?></td>
                        <td><?= $data['deskripsi']; ?></td>
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
                                       href="?hal=kelas_edit&id=<?= $data['id_kelas'] ?>"> Edit </a>
                                    <a class="btn btn-sm btn-danger"
                                       href="?hal=kelas_delete&id=<?= $data['id_kelas'] ?>"> Hapus </a>
                                </td>
                            </tr>
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