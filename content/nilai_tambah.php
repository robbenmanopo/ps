<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Input Nilai Siswa
        <!--<small>advanced tables</small>-->
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a class="btn btn-md btn-primary
<?php
                    //fungsi untuk menyembunyikan tombol aksi jika rolenya operator
                    if ($_SESSION['role']==2 or $_SESSION['role']==3){
                        echo "hidden";
                    }
                    ?>
" href="?hal=siswa_insert">Tambah</a>
                    <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="?hal=nilai_insert" method="post">
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
                            $tampil = "SElECT * FROM view_siswa WHERE id_kelas=$_GET[id_kelas]";
                            $query = mysqli_query($con,$tampil);
                            $no=0;
                            while ($data = mysqli_fetch_array($query)) {
//        var_dump($data);
                                $no++;
                                ?>

                                <tr>
                                    <input type="hidden" name="id_siswa[]" value="<?= $data['id_siswa'] ?>" >
                                    <input type="hidden" name="id_mapel[]" value="<?= $_GET['id_mapel'] ?>" >
                                    <input type="hidden" name="id_kd[]" value="<?= $_GET['id_kd'] ?>" >
                                    <td><?= $no; ?></td>
                                    <td><?= $data['nis']; ?></td>
                                    <td>
                                        <?= $data['nama_siswa']; ?>
                                    </td>
                                    <td>
                                        <input type="number" name="n_tugas[]" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" name="n_harian[]" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" name="n_uts[]" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" name="n_uas[]" class="form-control">
                                    </td>

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
