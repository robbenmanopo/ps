<?php
//mengambil data siswa dari database
$query = mysqli_query($con,
"SELECT * FROM view_siswa WHERE id_siswa='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Data Siswa
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
                <form role="form" action="?hal=siswa_update" method="post">
                    <div class="box-body">

                        <!-- Input nis -->
                        <div class="form-group">
                            <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>">
                            <label for="nis">No. Induk Siswa</label>
                            <input type="text" name="nis" class="form-control" id="nis" placeholder="No. Induk Siswa"  value="<?= $data['nis'] ?>" readonly required>
                        </div>

                        <!-- Input nama-->
                        <div class="form-group">
                            <label for="nama_siswa">Nama</label>
                            <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Siswa" value="<?= $data['nama_siswa'] ?>" required>
                        </div>

                        <!-- Input jk -->
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jk" id="jk" value="L" required
                                    <?php
                                    if ($data['jk']=="L"){echo "checked";}
                                    ?>
                                    > Laki-laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jk" id="jk" value="P"
                                    <?php
                                    if ($data['jk']=="P"){echo "checked";}
                                    ?>
                                    > Perempuan
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control"
                                       name="tgl_lahir"
                                       id="tgl_lahir"
                                       placeholder="Tanggal Lahir" value="<?= $data['tgl_lahir'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control"
                                       name="alamat"
                                       id="alamat"
                                       placeholder="Alamat" value="<?= $data['alamat'] ?>" required>
                            </div>
                        </div>

                        <!-- Input kelas -->
                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                            <select class="form-control" name="id_kelas" id="id_kelas" required>
                                <option value=""> - Pilih Kelas - </option>
                                <?php
                                $query_kelas=mysqli_query($con,"SELECT * FROM data_kelas");
                                while ($j=mysqli_fetch_array($query_kelas)){
                                    echo "<option value='$j[id_kelas]'";
                                    if ($j['id_kelas'] == $data['id_kelas'])
                                        echo "selected";

                                    echo "> $j[nama_kelas] </option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-md btn-success">Simpan</button>
                        <button type="reset" class="btn btn-md btn-warning">Reset</button>
                        <a  class="btn btn-md btn-danger" href="?hal=siswa_tampil">Batal</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
