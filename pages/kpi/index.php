<?php
include_once('../authen.php');
$sql = "SELECT k.*,d.dep_name 
      FROM kpi_all k 
      LEFT OUTER JOIN department d on d.dep_id = k.dep_id   ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HAsatuek</title>
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

            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../dashboard">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">KPI</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">ทีมนำงานคุณภาพ</h3>
            <section class="content-header">
              <h1>
                ตัวชี้วัดหน่วยงาน
                <small>&nbsp;</small>
                <a href="kpi63.php" class="btn btn-success"><i class="fa fa-bars"></i>ผลงานตัวชี้วัดทั้งหมด</a>
                <a href="form-create.php" class="btn btn-warning"><i class="fa fa-plus"></i> เพิ่มตัวชี้วัด</a>

            </section>
          </div>
        </div><!-- /.box-header -->
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table-bordered table-responsive-xl">
            <thead>
              <tr class="text-center bg-secondary">
                <th>No.</th>
                <th>ชื่อ</th>
                <th>คำนิยามตัวชี้วัด</th>
                <th>templete</th>
                <th>เพิ่มข้อมูล</th>
                <th>หน่วยงานรับผิดชอบ</th>
            </thead>

            <tbody>
              <?php
              $num = 0;
              while ($row = $result->fetch_assoc()) {
                $num++; ?>
                <tr>
                  <td><?php echo $num; ?></td>
                  <td><a href="from-data.php?kpi_id=<?php echo $row['kpi_id'];?>"><?php echo $row['kpi_name'];?></a></td>
                  <td><?php echo $row['kpi_detail']; ?></td>
                  <td>
                    <a href="../../assets/file/ผลลัพธ์SARpart4.xlsx" class="btn btn-sm btn-danger text-white">
                      <i class="far fa-file-pdf"></i>
                    </a>
                  </td>
                  <td>
                    <a href="from-data.php?kpi_id=<?php echo $row['kpi_id']; ?>" class="btn btn-sm btn-warning">
                      <i class="fas fa-edit"></i>เพิ่มข้อมูล
                    </a>
                  </td>
                  <td>
                    <a href="" class="btn btn-info">
                      <i class="fas fa-home"></i><?php echo $row['dep_name']; ?></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
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