  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <?php include "brand.php" ?>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <?php //include "message.php" ?>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <?php //include "notif.php" ?>
          <!-- Tasks Menu -->
          <?php //include "task.php" ?>
          <!-- User Account Menu -->
          <?php include "user.php" ?>
          <!-- Control Sidebar Toggle Button -->
          <?php //include "gear.php" ?>
        </ul>
      </div>
    </nav>
  </header>