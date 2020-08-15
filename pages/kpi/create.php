<?php include_once('../authen.php'); ?>
<?php
   
        if(isset($_POST['submit'])){

        
                    $sql = "INSERT INTO `kpi_all` (`kpi_name`, `kpi_detail`,`dep_id`,`y_id`, `kpi_update`) 
                            VALUES (    '".$_POST['kpi_name']."', 
                                        '".$_POST['kpi_detail']."',
                                        '".$_POST['dep_id']."',  
                                        '".$_POST['y_id']."', 
                                        '".date("Y-m-d H:i:s")."');";
                    $result = $conn->query($sql);
                    $sql2 = "INSERT INTO `kpi_data` (`kpi_id`, `kpi_name`,`y_id`,`data_update`) 
                             VALUES (   '".$_POST['kpi_id']."', 
                                        '".$_POST['kpi_name']."', 
                                        '".$_POST['y_id']."',   
                                        '".date("Y-m-d H:i:s")."');";
                    $result2 = $conn->query($sql2);
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