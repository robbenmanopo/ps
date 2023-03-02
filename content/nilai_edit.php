<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Nilai Siswa
        <!--<small>advanced tables</small>-->
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="?hal=nilai_update" method="post">
                        <table  class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Nilai Tugas</th>
                                <th>Nilai Harian</th>
                                <th>Nilai UTS</th>
                                <th>Nilai UAS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $tampil = "SElECT * FROM data_nilai JOIN data_siswa USING (id_siswa) WHERE id_mapel=$_GET[id_mapel] AND id_kd=$_GET[id_kd]";
                            $query = mysqli_query($con,$tampil);
                            $no=0;
                            while ($data = mysqli_fetch_array($query)) {
//        var_dump($data);
                                $no++;
                                ?>

                                <tr>
                                    <input type="hidden" name="id_nilai" value="<?= $data['id_nilai'] ?>">
                                    <td><?= $no; ?></td>
                                    <td><?= $data['nis']; ?></td>
                                    <td><?= $data['nama_siswa']; ?></td>
                                    <td>
                                        <input type="number" class="form-control" value="<?= $data['n_tugas']; ?>">
                                    </td>
                                    <td><input type="number" class="form-control" value="<?= $data['n_harian']; ?>"></td>
                                    <td><input type="number" class="form-control" value="<?= $data['n_uts']; ?>"></td>
                                    <td><input type="number" class="form-control" value="<?= $data['n_uas']; ?>"></td>


                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="box-footer pull-right">
                            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                            <a class="btn btn-sm btn-primary" href="?hal=nilai_tampil_kd&id=<?= $_GET['id_mapel'] ?>">Batal</a>
                        </div>
                    </form>
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
