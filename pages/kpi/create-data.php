<?php include_once('../authen.php'); ?>
<?php
   
        if(isset($_POST['submit'])){

        
          $sql = " INSERT INTO `kpi_data` (`kpi_id`,`kpi_a1`,`kpi_b1`,`data_c`,`total`,`m_id`,`y_id`,`data_update`)
                   VALUES  ('".$_POST['kpi_id']."',
                            '".$_POST['kpi_a1']."',
                            '".$_POST['kpi_b1']."',  
                            '".$_POST['data_c']."',  
                            '".$_POST['total']."',  
                            '".$_POST['m_id']."',  
                            '".$_POST['y_id']."', 
                            '".date("Y-m-d H:i:s")."');";
                $result = $conn->query($sql);  
                        if ($result){
                            echo '<script> alert("บันทึกข้อมูลสำเร็จ")</script>'; 
                            header('Refresh:0; url=index.php');
                        }else{
                            echo '<script> alert("บันทึกข้อมูลไม่สำเร็จ!!")</script>'; 
                            header('Refresh:0; url=index.php');
                        }

         }else{
                header('Refresh:0; url=index.php');
              }
        
?>