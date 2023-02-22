<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Siswa
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
                <form role="form" action="?hal=siswa_insert" method="post">
                    <div class="box-body">

                        <!-- Input nis -->
                        <div class="form-group">
                            <label for="nis">No. Induk Siswa</label>
                            <input type="text" name="nis" class="form-control" id="nis" placeholder="No. Induk Siswa" required>
                        </div>

                        <!-- Input nama-->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                        </div>

                        <!-- Input jk -->
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

                        <!-- Input kelas -->
                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
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
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-md btn-warning">Reset</button>
                        <a  class="btn btn-md btn-danger" href="?hal=siswa_tampil">Batal</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>