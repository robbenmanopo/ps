<?php
//mengambil data siswa dari database
$query = mysqli_query($con,
    "SELECT * FROM data_kelas WHERE id_kelas='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Data Kelas
        <!--<small>advanced tables</small>-->
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <!--<h3 class="box-title">Data Siswa</h3>-->
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="?hal=kelas_update" method="post">
                    <div class="box-body">

                        <!-- Input nama-->
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="hidden" name="id_kelas" value="<?= $data['id_kelas'] ?>">
                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="Nama Kelas" value="<?= $data['nama_kelas'] ?>" required>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-md btn-success">Simpan</button>
                        <button type="reset" class="btn btn-md btn-warning">Reset</button>
                        <a  class="btn btn-md btn-danger" href="?hal=kelas_tampil">Batal</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
