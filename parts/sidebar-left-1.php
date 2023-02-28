  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/admin.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Administrator</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DAFTAR MENU</li>
        <!-- Optionally, you can add icons to the links -->
          <li><a href="?hal=dashboard"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
          <li class="treeview">
              <a href="#"><i class="fa fa-bookmark"></i><span>Master Data</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="?hal=kelas_tampil"><i class="fa fa-users"></i> Data kelas</a></li>
                  <li><a href="?hal=mapel_tampil"><i class="fa fa-building"></i> Data Mata Pelajaran</a></li>
                  <li><a href="?hal=kd_tampil"><i class="fa fa-building"></i> Data KD</a></li>
                  <li><a href="?hal=guru_tampil"><i class="fa fa-building"></i> Data Guru</a></li>
                  <li><a href="?hal=siswa_tampil"><i class="fa fa-building"></i> Data Siswa</a></li>
              </ul>
          </li>
          <li><a href="?hal=nilai_tampil_mapel"><i class="fa fa-building"></i><span>Data Nilai</span></a></li>
          <li><a href="?hal=user_tampil"><i class="fa fa-building"></i><span>Data User</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>