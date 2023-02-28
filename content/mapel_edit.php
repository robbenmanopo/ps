<?php
//mengambil data mapel dari database
$query = mysqli_query($con,
    "SELECT * FROM mapel WHERE id_mapel='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<section class="content-header">
    <h1>Edit Data Mata Pelajaran</h1>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- gene l form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <!--  <h3 class="box-title">Quick Example</h3>-->
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="?hal=mapel_update" method="post" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_mapel">Nama Mata Pelajaran</label>
                            <input type="hidden" name="id_mapel" value="<?= $data['id_mapel'] ?>">
                            <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" placeholder="Mata Pelajaran" value="<?= $data['nama_mapel'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="id_kelas">Nama Kelas</label>
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
                        <div class="box-footer">
                            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                            <a class="btn btn-sm btn-primary" href="?hal=mapel_tampil">Batal</a>
                        </div>
                    </div>
                </form>

                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
</section>

