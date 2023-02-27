<?php
//mengambil data siswa dari database
$query = mysqli_query($con,
    "SELECT * FROM view_guru WHERE id_guru='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<section class="content-header">
    <h1>Edit Data Guru</h1>
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
                <form action="?hal=guru_update" method="post" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="id_guru" value="<?= $data['id_guru'] ?>">
                            <label for="nama_guru">Nama Guru</label>
                            <input type="text" class="form-control" name="nama_guru" id="nama_guru" placeholder="Nama Guru" value="<?= $data['nama_guru'] ?>" required>
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
                                <label for="id_mapel">Mata Pelajaran</label>
                                <select class="form-control" name="id_mapel" id="id_mapel" required>
                                    <option value=""> - Pilih Mata Pelajaran - </option>
                                    <?php
                                    $query_mapel=mysqli_query($con,"SELECT * FROM view_mapel");
                                    while ($j=mysqli_fetch_array($query_mapel)){
                                        echo "<option value='$j[id_mapel]'";
                                        if ($j['id_mapel'] == $data['id_mapel'])
                                            echo "selected";

                                        echo "> $j[nama_mapel] | $j[nama_kelas] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $data['username'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?= $data['password'] ?>" required>
                            </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                            <a class="btn btn-sm btn-primary" href="?hal=guru_tampil">Batal</a>
                        </div>
                    </div>
                </form>

                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
</section>


