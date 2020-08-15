<?php 
    $uri=$_SERVER['REQUEST_URI'];
    $array = explode('/', $uri);
    $key = array_search("pages",$array);
    $name = $array[$key + 1 ];
?>
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-warning elevation-4 bg-drak ">
    <!-- Brand Logo -->
    
    <a href="#" class="brand-link">
      <span class="brand-text font-blode-light text-center d-block">HASATUEKHOS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['first_name'].'  '.$_SESSION['last_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../dashboard" class="nav-link <?php echo $name == 'dashboard' ? 'active': '' ?>">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>หน้าหลัก</p>
            </a>
          </li>
          <?php if ($_SESSION['status'] == 'admin'){ ?>
          <li class="nav-item">
            <a href="../admin" class="nav-link <?php echo $name == 'admin' ? 'active': '' ?>">
              <i class="fas fa-users-cog nav-icon"></i>
              <p>เพิ่มผู้ใช้งานระบบ</p>
            </a>
          </li>  
            <li class="nav-item">
            <a href="../department" class="nav-link <?php echo $name == 'department' ? 'active': '' ?>">
                <i class="fas fa-home nav-icon "></i>
              <p>เพิ่มแผนก</p>
            </a>
          </li> 
          <?php }?>
          <li class="nav-item">
            <a href="../kpi" class="nav-link <?php echo $name == 'kpi' ? 'active': '' ?>">
              <i class="fas fa-chart-bar nav-icon"></i>
              <p>ตัวชี้วัด </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../information" class="nav-link <?php echo $name == 'information' ? 'active': '' ?>">
              <i class="fas fa-chart-bar nav-icon"></i>
              <p>คืนข้อมูล (Data export) </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="../team" class="nav-link <?php echo $name == 'team' ? 'active': '' ?>">
              <i class="fas fa-user  nav-icon"></i>
              <p>ระดับทีมนำ</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="../download" class="nav-link <?php echo $name == 'download' ? 'active': '' ?>">
              <i class="fas fa-download nav-icon"></i>
              <p>เอกสารงานงานคุณภาพ</p>
            </a>
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>