<section class="content-header">
    <h1>Tambah Data Siswa</h1>
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
                <form action="?hal=siswa_insert" method="post" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nis">No. Induk Siswa</label>
                            <input type="text" class="form-control"
                                   name="nis"
                                   id="nis"
                            placeholder="No. Induk Santri" required>
                        </div>
                        <div class="box-footer">
                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa" required>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jk" id="jk" value="L" required> Laki-laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jk" id="jk" value="P"> Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                   name="tgl_lahir"
                                   id="tgl_lahir"
                                   placeholder="Tanggal Lahir" required>
                        </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control"
                                       name="alamat"
                                       id="alamat"
                                       placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="id_kelas">Nama Kelas</label>
                                <select class="form-control" name="id_kelas" id="id_kelas" required>
                                    <option value=""> - Pilih Kelas - </option>
                                    <?php
                                    $query_kelas=mysqli_query($con,"SELECT * FROM data_kelas");
                                    while ($j=mysqli_fetch_array($query_kelas)){
                                        echo "<option value='$j[id_kelas]'> $j[nama_kelas] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                            <a class="btn btn-sm btn-primary" href="?hal=siswa_tampil">Batal</a>
                        </div>
                    </div>
                </form>

                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
</section>

