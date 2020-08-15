<?php 
      include_once('../authen.php');
      $sql = "SELECT k.kpi_id,k.kpi_name,ka.kpi_a1,ka.kpi_b1,ka.total
      FROM kpi_all k 
      LEFT OUTER JOIN kpi_data ka on ka.kpi_id = k.kpi_id
      group by k.kpi_name
      ORDER BY k.kpi_id ASC ";
      $result = $conn->query($sql);
    

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>view</title>
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
            <h4>ตัวชี้วัดโรงพยาบาลสตึก</h4>
                <div class="panel-body">
                <form class="form-inline" role="form" method="post" name="search_form" action="" onsubmit="return check()">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="index.php"  class="btn btn-sm btn-warning">
                            <i class="fas fa-home"></i>กลับหน้าหลัก </a>
                        </div>
                    </div>
                </form>
         </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <div class="box-body">
                <table class="table table-bordered table-hover table-sm">
					<thead>
					  <tr class="bg-secondary  ">
                            <th rowspan='1' class="text-center">ที่</th>
                            <th colspan='1' scope='col' class='text-center'>ชื่อตัวชีวัด</th>
                            <th colspan='1' scope='col' class='text-center'>ปี2559</th>
                            <th colspan='1' scope='col' class='text-center'>ปี2560</th>
                            <th colspan='1' scope='col' class='text-center'>ปี2561</th>
                            <th colspan='1' scope='col' class='text-center'>ปี2562</th>
                            <th colspan='1' scope='col' class='text-center'>ปี2563</th>
					  </tr>
				
					</thead>
                <tbody>
               
              <?php 
                    $num = 0;
                    while ($row =$result->fetch_assoc()) {
                    $num ++; ?>
                    <tr>
                        <td><?php echo $num;?>.</td>
                        <td><?php echo $row ['kpi_name']; ?></td>
                        <td>na</td>
                        <td>na</td>
                        <td>na</td>
                        <td>na</td>
                        <td></td>
                    </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>


<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      dom: 'Bfrtip',
      buttons: [
        // 'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
  });
  function deleteItem (id) { 
    if( confirm('คุณจะลบข้อมูลจริงหรือไม่') == true){
      window.location=`delete.php?id=${id}`;
      // window.location='delete.php?id='+id;
    }
  };
</script>

</body>
</html>
