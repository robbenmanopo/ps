<section class="content-header">
    <h1>Tambah Data Kompetensi Dasar</h1>
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
                <form action="?hal=kd_insert" method="post" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id_mapel">Mata Pelajaran</label>
                            <select class="form-control" name="id_mapel" id="id_mapel" required>
                                <option value=""> - Pilih Mata Pelajaran - </option>
                                <?php
                                $query_kelas=mysqli_query($con,"SELECT * FROM view_mapel");
                                while ($j=mysqli_fetch_array($query_kelas)){
                                    echo "<option value='$j[id_mapel]'> $j[nama_mapel] |  $j[nama_kelas] </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode_kd">Kode. KD</label>
                            <input type="text" class="form-control" name="kode_kd" id="kode_kd" placeholder="Kode. KD" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" required>
                        </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                                <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                                <a class="btn btn-sm btn-primary" href="?hal=kd_tampil">Batal</a>
                            </div>
                        </div>
                </form>

                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
</section>

