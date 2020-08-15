<?php include_once('../authen.php'); 
  $id =$_GET['kpi_id'];
  $sql = "SELECT * FROM kpi_all WHERE kpi_id = '".$id."' "; 
  $result = $conn->query($sql);  
  $row = $result->fetch_assoc(); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>datacreate</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Athiti:wght@600&display=swap">
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
            <h1 ></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../admin">เพิ่มข้อมูล</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-dark">
        <div class="card-header">
        <h3 class="card-title">เพิ่มข้อมูล</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
           <form role="form" action="create-data.php"method="post">
                <div class="card-body">
                  <div class ="row">
                    <div class = "col-12">
                      <div class="form-group">
                      <label for="kpi_name">ชื่อตัวชี้วัด</label>
                          <input type="text" class="form-control" name= "kpi_name" id="data_id" placeholder="ชื่อตัวชี้วัด" value="<?php echo $row ['kpi_name'];?>" required>
                      </div>
                    </div>
                    <div class = "col-md-6">
                        <div class="form-group">
                              <select class="form-control" id="m_id" name ="m_id" required>
                                <option value=" "disableed >เลือกเดือนที่ลงข้อมูล</option>
                                  <?php
                                    $sql2 = "SELECT * FROM kpi_mont ";
                                    $result2 = $conn->query($sql2);  
                                    while($row =$result2->fetch_assoc()) {
                                  ?>
                                <option value="<?php echo $row["m_id"];?>"><?php echo $row["m_name"];?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class="form-group">
                            <select class="form-control" id="y_id" name ="y_id">
                              <option value=" "disableed >ปีงบประมาน</option>
                                <?php
                                    $sql3 = "SELECT * FROM kpi_year";
                                    $result3 = $conn->query($sql3);  
                                    while($row =$result3->fetch_assoc()) {
                                ?>
                                  <option value="<?php echo $row["y_id"];?>"><?php echo $row["y_name"];?></option>
                                  <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class = "col-4">
                        <div class="form-group">
                              <input type="text" class="form-control" name= "kpi_a1" id="kpi_a1" placeholder="ผลงาน A">    
                        </div>
                    </div>
                     <div class = "col-4">
                        <div class="form-group">
                              <input type="text" class="form-control" name= "kpi_b1" id="kpi_b1" placeholder="เป้าหมาย B">    
                        </div>
                     </div>
                     <div class = "col-4">
                        <div class="form-group">
                              <input type="text" class="form-control" name= "data_c" id= "data_c" placeholder="ตัวคำนวน(กรณีมีสูตรคำนวน)">    
                        </div>
                     </div>
                      <div class = "col-12">
                        <div class="form-group">
                              <input type= "text" class="form-control" name="total" id="total" placeholder="ผลลัพท์">    
                        </div>
                     </div>
                              <input type="hidden" name= "kpi_id" value="<?php echo $id;?>">
                     </div>
                      <div class="card-footer">
                              <button type="submit" name ="submit" class="btn btn-success btn btn-block">บันทึกข้อมูล</button>
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

 