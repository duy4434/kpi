      <?php include_once('../authen.php');
         $sql_team = "SELECT * FROM team";
         $result_team = $conn->query($sql_team);

         $sql_admin = "SELECT * FROM `admin`"; 
         $result_admin = $conn->query($sql_admin);

         $sql_kpi_all = "SELECT * FROM `kpi_all`"; 
         $result_kpi_all = $conn->query($sql_kpi_all); 

         $sql="SELECT kpi_name,count(dep_id) as total
          from kpi_all
          GROUP BY dep_id
          ORDER BY dep_id ASC ";
          $result=$conn->query($sql);

     //echo $query;
    // $datax = array();
    
    // foreach ($result as $k) {
    //  $datax[] = "['".$k['kpi_name']."'".", ".$k['total']."]";
    //     }
    // //cut last commar
    //     $datax = implode(",", $datax);
      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HASATUEK</title>
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
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- fullCalendar -->
        <link rel="stylesheet" href="../../plugins/fullcalendar/main.min.css">
        <link rel="stylesheet" href="../../plugins/fullcalendar-daygrid/main.min.css">
        <link rel="stylesheet" href="../../plugins/fullcalendar-timegrid/main.min.css">
        <link rel="stylesheet" href="../../plugins/fullcalendar-bootstrap/main.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
       <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Athiti:wght@600&display=swap" >
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
      
        <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                  
        <script type="text/javascript">
                  google.charts.load('current', {'packages':['corechart']});
                        
                  google.charts.setOnLoadCallback(drawChart);
                  function drawChart() {

                  var data = google.visualization.arrayToDataTable([
                  ['Task', ' kpi_name'],
                            
                  <!- ?php echo $datax;? -->
                  <!-- ]);
       
                  var options = {
                  title: 'department'
                  };      
                  var chart = new google.visualization.PieChart(document.getElementById('piechart'));        
                  chart.draw(data, options);
                    }
               </script> --> 

      </head>
      <body class="hold-transition sidebar-mini">
      <div class="wrapper">

        <!-- Navbar -->
        <?php include_once('../includes/sidebar.php') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text">ระบบเก็บข้อมูลศูนย์งานคุณภาพโรงพยาบาลสตึก</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col-md-4 ">
                  <div class="small-box bg-info">
                    <div class="inner">
                    <h3><?php echo $result_team->num_rows; ?></h3>
                      <p>ทีมนำคุณภาพ</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer"><i class=""></i></a>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $result_kpi_all->num_rows; ?></h3>
                         <p>จำนวนตัวชี้วัด</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                        <a href="#" class="small-box-footer"> <i class=""></i></a>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="small-box bg-secondary">
                    <div class="inner">
                          <h3><?php echo $result_admin->num_rows; ?></h3>
                          <p>จำนวนขอใช้งานข้อมูล</p>
                    </div>
                    <div class="icon">
                         <i class="ion-forward"></i>
                    </div>
                         <a href="#" class="small-box-footer"> <i class=""></i></a>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="small-box bg-danger">
                    <div class="inner">
                         <h3><?php echo $result_admin->num_rows; ?></h3>
                      <p>Hosxp-Downtime</p>
                    </div>
                    <div class="icon">
                         <i class="ion-laptop"></i>
                    </div>
                    <a href="#" class="small-box-footer"> <i class=""></i></a>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="small-box bg-primary">
                    <div class="inner">
                        <h3><?php echo $result_admin->num_rows; ?></h3>
                         <p>จำนวนผู้ใช้งาน</p>
                    </div>
                    <div class="icon">
                         <i class="ion ion-person-add"></i>
                    </div>
                      <a href="#" class="small-box-footer"> <i class=""></i></a>
                  </div>
                </div>    
                <div class="col-md-4 ">
                  <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $result_admin->num_rows; ?></h3>
                         <p>จำนวนเอกสารงานคุณภาพ</p>
                    </div>
                    <div class="icon">
                         <i class="ion ion-document"></i>
                    </div>
                         <a href="#" class="small-box-footer"> <i class=""></i></a>
                  </div>
                </div>
           <!-- /.row -->      
                    <!-- <div id="piechart" style="width: 900px; height: 500px;"></div> -->
          </section>
      <!-- /.content -->
      </div> 
  <!-- /.content-wrapper -->
        <!-- footer -->
        <?php include_once('../includes/footer.php') ?>
      <!-- jQuery -->
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- jQuery UI -->
      <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../dist/js/demo.js"></script>
      <!-- fullCalendar 2.2.5 -->
      <script src="../../plugins/moment/moment.min.js"></script>
      <script src="../../plugins/fullcalendar/main.min.js"></script>
      <script src="../../plugins/fullcalendar-daygrid/main.min.js"></script>
      <script src="../../plugins/fullcalendar-timegrid/main.min.js"></script>
      <script src="../../plugins/fullcalendar-interaction/main.min.js"></script>
      <script src="../../plugins/fullcalendar-bootstrap/main.min.js"></script>
      <!-- Page specific script -->
      
    <!-- OPTIONAL SCRIPTS -->
      <script src="../../plugins/chart.js/Chart.min.js"></script>
      <script src="../../dist/js/demo.js"></script>
      <script src="../../dist/js/pages/dashboard3.js"></script>
          
      </body>
 </html>
