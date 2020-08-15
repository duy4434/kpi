<?php include_once('../authen.php');
 $sql = "SELECT * FROM department ";
 $result = $conn->query($sql);  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>จัดการผู้ใช้งาน</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
 <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@600&display=swap" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>เพิ่มผู้ใช้งาน</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../admin">เพิ่มผู้ใช้งาน</a></li>
              <li class="breadcrumb-item active">Admin Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">จัดการผู้ใช้งาน</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="create.php" method="post">
          <div class="card-body">
             <div class ="row">
                <div class = "col-4">
                  <div class="form-group">
                   <label for="firstName">ชื่อ</label>
                     <input type="text" class="form-control" name= "first_name" id="first_name" placeholder="FirstName" required>
                  </div>
                </div>
                <div class = "col-4">
                  <div class="form-group">
                   <label for="lastName">นามสกุล</label>
                     <input type="text" class="form-control" name= "last_name" id="last_name" placeholder="LastName" required>
                  </div>
                </div>
             <div class = "col-4">
                  <div class="form-group">
                   <label for="email">E-mail</label>
                     <input type="text" class="form-control" name= "email" id="email" placeholder="Email" required>
                  </div>
                </div>
             </div>
             <div class ="row">
                <div class = "col-6">
                  <div class="form-group">
                   <label for="cid">หมายเลขบัตรประชาชน</label>
                     <input type="text" class="form-control" name= "cid"  id="cid" placeholder="cid" required>
                  </div>
                </div>
             <div class = "col-6">
                  <div class="form-group">
                   <label for="tel">เบอร์โทรศัพท์</label>
                     <input type="text" class="form-control" name= "tel" id="tel" placeholder="tel" required>
                  </div>
                </div>
             </div>
             
            <div class="form-group">
              <label for="username">ชื่อเข้าใช้งาน</label>
              <input type="text" class="form-control" name= "username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่านเข้าใช้งาน</label>
                <input type="password" class="form-control" name= "password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label>เลือกแผนก</label>
              <select class="form-control" required name ="status">
              <option value=" "disableed >เลือกแผนก</option>
                    
                    <?php
                        while($row =$result->fetch_assoc()) {
                          ?>
                        <option value="<?php echo $row["dep_id"];?>"><?php echo $row["dep_id"];?>.<?php echo $row["dep_name"];?></option>
                        <?php }?>
              </select>
            </div>
            <div class="form-group">
              <label>เลือกสถานะ</label>
                  <select class="form-control" required name ="status">
                    <option value=" "disableed select Permission>เลือกสถานะ</option>
                    <option value="admin"> Admin</option>
                      <option value="user">user</option>
                  </select>
            </div>
          </div>
          <div class="card-footer">
              <button type="submit" name ="submit" class="btn btn-primary">บันทึก</button>
          </div>
        </form>
      </div>    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>

</body>
</html>
