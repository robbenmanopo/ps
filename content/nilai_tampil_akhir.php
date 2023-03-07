<!-- Content Header (Page header) -->
<section class="content-header">
    <center>
    <h1>
        Data Nilai Siswa
        <!--<small>advanced tables</small>-->
    </h1>
    </center>
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
                            <th>Nilai Akhir</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        switch($_SESSION['role']){
                            case 1:
                                $tampil = "SELECT * FROM mapel JOIN data_kelas USING(id_kelas)";
                                break;
                            case 2:
                                $tampil = "SELECT * FROM view_mapel_proses WHERE nik='$_SESSION[nik]'";
                                break;
                            case 3:
                                $tampil = "SELECT * FROM view_mapel_proses WHERE nik='$_SESSION[nik]'";
                                break;
                            case 4:
                                $tampil = "SELECT * FROM data_nilai_akhir JOIN mapel USING(id_mapel) WHERE id_kelas='$_SESSION[id_kelas]' and id_siswa='$_SESSION[id_siswa]'";
                                break;

                        }
                        // $tampil = "SElECT * FROM view_mapel_proses WHERE nik='$_SESSION[nik]'";
                        $query = mysqli_query($con,$tampil);
                        $no=0;
                        while ($data = mysqli_fetch_array($query)) {
//        var_dump($data);
                            $no++;
                            ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama_mapel']; ?></td>
                                <td><?= $data['nilai_akhir']; ?></td>
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
