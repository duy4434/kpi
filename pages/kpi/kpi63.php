<?php include_once('../authen.php') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>kpi view</title>
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
                <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">kpi</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">ตัวชี้วัดโรงพยาบาลสตึก
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped  table-responsive-xl">
              <thead>
                <tr class="bg-secondary  ">
                  <th rowspan='3' class="text-center">ที่</th>
                  <th rowspan='3' class="text-center">ตัวชี้วัด</th>
                  <th colspan='3' scope='col' class='text-center'>ต.ค.</th>
                  <th colspan='3' scope='col' class='text-center'>พ.ย.</th>
                  <th colspan='3' scope='col' class='text-center'>ธ.ค.</th>
                  <th colspan='3' scope='col' class='text-center'>ม.ค.</th>
                  <th colspan='3' scope='col' class='text-center'>ก.พ.</th>
                  <th colspan='3' scope='col' class='text-center'>มี.ค.</th>
                  <th colspan='3' scope='col' class='text-center'>เม.ย.</th>
                  <th colspan='3' scope='col' class='text-center'>พ.ค.</th>
                  <th colspan='3' scope='col' class='text-center'>มิ.ย.</th>
                  <th colspan='3' scope='col' class='text-center'>ก.ค.</th>
                  <th colspan='3' scope='col' class='text-center'>ส.ค.</th>
                  <th colspan='3' scope='col' class='text-center'>ก.ย.</th>

                </tr>
                <tr class="bg-warning ">
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                  <th scope='col' class='text-center'>A</th>
                  <th scope='col' class='text-center'>B</th>
                  <th scope='col' class='text-center'>ผลงาน</th>
                </tr>
              </thead>
              <?php
              $sql = "SELECT ka.kpi_id 
                      ,ka.kpi_name as name,
                      sum(IF(`m_id` = '1' ,kpi_a1 ,0)) AS month10,
                      sum(IF(`m_id` = '2' ,kpi_a1 ,0)) AS month11,
                      sum(IF(`m_id` = '3' ,kpi_a1 ,0)) AS month12,
                      sum(IF(`m_id` = '4' ,kpi_a1 ,0)) AS month01,
                      sum(IF(`m_id` = '5' ,kpi_a1 ,0)) AS month02,
                      sum(IF(`m_id` = '6' ,kpi_a1 ,0)) AS month03,
                      sum(IF(`m_id` = '7' ,kpi_a1 ,0)) AS month04,
                      sum(IF(`m_id` = '8' ,kpi_a1 ,0)) AS month05,
                      sum(IF(`m_id` = '9' ,kpi_a1 ,0)) AS month06,
                      sum(IF(`m_id` = '10',kpi_a1 ,0)) AS month07,
                      sum(IF(`m_id` = '11',kpi_a1 ,0)) AS month08,
                      sum(IF(`m_id` = '12',kpi_a1 ,0)) AS month09,
                      sum(IF(`m_id` = '1' ,kpi_b1 ,0)) AS monthb10,
                      sum(IF(`m_id` = '2' ,kpi_b1 ,0)) AS monthb11,
                      sum(IF(`m_id` = '3' ,kpi_b1 ,0)) AS monthb12,
                      sum(IF(`m_id` = '4' ,kpi_b1 ,0)) AS monthb01,
                      sum(IF(`m_id` = '5' ,kpi_b1 ,0)) AS monthb02,
                      sum(IF(`m_id` = '6' ,kpi_b1 ,0)) AS monthb03,
                      sum(IF(`m_id` = '7' ,kpi_b1 ,0)) AS monthb04,
                      sum(IF(`m_id` = '8' ,kpi_b1 ,0)) AS monthb05,
                      sum(IF(`m_id` = '9' ,kpi_b1 ,0)) AS monthb06,
                      sum(IF(`m_id` = '10',kpi_b1 ,0)) AS monthb07,
                      sum(IF(`m_id` = '11',kpi_b1 ,0)) AS monthb08,
                      sum(IF(`m_id` = '12',kpi_b1 ,0)) AS monthb09,
                      sum(IF(`m_id` = '1' ,total ,0)) AS monthc10,
                      sum(IF(`m_id` = '2' ,total ,0)) AS monthc11,
                      sum(IF(`m_id` = '3' ,total ,0)) AS monthc12,
                      sum(IF(`m_id` = '4' ,total ,0)) AS monthc01,
                      sum(IF(`m_id` = '5' ,total ,0)) AS monthc02,
                      sum(IF(`m_id` = '6' ,total ,0)) AS monthc03,
                      sum(IF(`m_id` = '7' ,total ,0)) AS monthc04,
                      sum(IF(`m_id` = '8' ,total ,0)) AS monthc05,
                      sum(IF(`m_id` = '9' ,total ,0)) AS monthc06,
                      sum(IF(`m_id` = '10' ,total ,0)) AS monthc07,
                      sum(IF(`m_id` = '11' ,total ,0)) AS monthc08,
                      sum(IF(`m_id` = '12' ,total ,0)) AS monthc09
                      
                          FROM kpi_all ka
                          LEFT OUTER JOIN kpi_data k on ka.kpi_id = k.kpi_id
                             GROUP BY ka.kpi_name 
                             ORDER BY ka.kpi_id ASC";
              $result = $conn->query($sql);
              ?>
              <?php
              $num = 0;
              while ($row = $result->fetch_assoc()) {
                $num++; ?>
                <tbody>
                  <tr>
                    <td class="table-info"><?php echo $num; ?></td>
                    <td class="table-info"><?php echo $row['name']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month10']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb10']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc10']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month11']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb11']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc11']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month12']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb12']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc12']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month01']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb01']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc01']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month02']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb02']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc02']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month03']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb03']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc03']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month04']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb04']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc04']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month05']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb05']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc05']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month06']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb06']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc06']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month07']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb07']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc07']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month08']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb08']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc08']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['month09']; ?></td>
                    <td scope='col' class="table-warning text-right"><?php echo $row['monthb09']; ?></td>
                    <td scope='col' class="table-Success text-right text-danger"><?php echo $row['monthc09']; ?></td>
                  </tr>
                </tbody>
              <?php } ?>
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

 
<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>

 
<script type="text/javascript">
    $(document).ready(function() {
        $('#FlagsExport').DataTable({
            "pageLength": 50,
            dom: 'Bfrtip',
            buttons: ['copy','csv','excel','pdf','print']
        });
    });
</script>

</body>

</html>