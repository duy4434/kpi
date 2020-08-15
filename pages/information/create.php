<?php include_once('../authen.php'); ?>
<?php
   
        if(isset($_POST['submit'])){
                   
                   
                   $sql = "INSERT INTO `department` ( `dep_name`, `hos_guid`,`dep_update`)
                                 VALUES ( '".$_POST['dep_name']."', 
                                          '".$_POST['hos_guid']."',
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