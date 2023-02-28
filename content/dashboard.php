<?php
if (!defined('INDEX')) die("");

$jml_siswa = mysqli_num_rows(mysqli_query($con,"SELECT * FROM data_siswa"));
$jml_kelas = mysqli_num_rows(mysqli_query($con,"SELECT * FROM data_kelas"));
$jml_guru = mysqli_num_rows(mysqli_query($con,"SELECT * FROM data_guru"));
$jml_mapel = mysqli_num_rows(mysqli_query($con,"SELECT * FROM mapel"));
$jml_kd = mysqli_num_rows(mysqli_query($con,"SELECT * FROM kd"));

?>

<section class="content-header">
    <h1>Dashboard</h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Siswa</span>
                    <span class="info-box-number"><?= $jml_siswa ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa  fa-university"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Kelas</span>
                    <span class="info-box-number"><?= $jml_kelas ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Guru</span>
                    <span class="info-box-number"><?= $jml_guru ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-pencil-square-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Mata Pelajaran</span>
                    <span class="info-box-number"><?= $jml_mapel?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-pencil-square-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Kompetensi Dasar</span>
                    <span class="info-box-number"><?= $jml_kd?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>