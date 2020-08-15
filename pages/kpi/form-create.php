<?php include_once('../authen.php');

$sql = "SELECT * FROM department ";
$sql2 = "SELECT * FROM kpi_year  ";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);



?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>เพิ่มตัวชี่้วัด</title>
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
              <h5>เพิ่มตัวชี่้วัด</h5>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">เพิ่มตัวชี่้วัด</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="create.php" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="kpi_name">ชื่อตัวชี้วัด</label>
                    <input type="text" class="form-control" name="kpi_name" id="kpi_name" placeholder="ชื่อตัวชี้วัด" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="kpi_detail">คำนิยาม</label>
                    <input type="text" class="form-control" name="kpi_detail" id="kpi_detail" placeholder="คำนิยามตัวชี้วัด" required>
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label>เลือกแผนกที่รับผิดชอบ</label>
                    <select class="form-control" id="dep_id" name="dep_id">
                      <option value=" " disableed select Permission>เลือกแผนกที่รับผิดชอบ</option>
                      <?php

                      while ($row = $result->fetch_assoc()) {

                      ?>
                        <option value="<?php echo $row["dep_id"]; ?>"><?php echo $row["dep_id"]; ?>.<?php echo $row["dep_name"]; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label>เลือกปีงบประมาณ</label>
                  <select class="form-control" id="y_id" name="y_id">
                    <option value=" " disableed select Permission>เลือกปีงบประมาณ</option>
                    <?php
                    while ($row2 = $result2->fetch_assoc()) { ?>
                      <option value="<?php echo $row2["y_id"]; ?>"><?php echo $row2["y_name"]; ?></option>
                    <?php } ?>

                  </select>
                </div>

              </div>
            </div>
            <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-success btn btn-block">บันทึก</button>
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
    $(function() {
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