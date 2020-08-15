<?php include_once('../authen.php'); ?>
<?php
   
        if(isset($_POST['submit'])){

            $sql_check_username = "SELECT * FROM `admin` WHERE `username`  =  '".$_POST['username']."' ";
            $check_username =$conn->query($sql_check_username);

                if(!$check_username->num_rows){
                    $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `admin` ( `first_name`, `last_name`, `email`, `cid`, `tel`, `username`, `password`, `status`, `last_login`, `update_at`, `created_at`,`dep_id`,`image`) 
                            VALUES (    '".$_POST['first_name']."', 
                                        '".$_POST['last_name']."', 
                                        '".$_POST['email']."', 
                                        '".$_POST['cid']."', 
                                        '".$_POST['tel']."', 
                                        '".$_POST['username']."', 
                                        '". $hashed."',  
                                        '".$_POST['status']."', 
                                        '".date("Y-m-d H:i:s")."',
                                        '".date("Y-m-d H:i:s")."', 
                                        '".date("Y-m-d H:i:s")."',
                                        '".$_POST['dep_id']."', 
                                        '".$_POST['image']."');";
                    $result = $conn->query($sql);
                        if ($result){
                            echo '<script> alert("บันทึกข้อมูลสำเร็จ")</script>'; 
                            header('Refresh:0; url=index.php');
                        }else{
                            echo '<script> alert("บันทึกข้อมูลไม่สำเร็จ!!")</script>'; 
                            header('Refresh:0; url=index.php');
                        }

                }else{
                    echo '<script> alert("๊Username นี้ได้ถูกใช้ไปแล้ว !!!!")</script>'; 
                    header('Refresh:0; url=create.php');
                }

         }else{
                header('Refresh:0; url=index.php');
        }
?>