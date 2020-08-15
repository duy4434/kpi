<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');

    
    if(isset($_POST['submit'])){
        $sql ="UPDATE `admin` 
               SET first_name = '".$_POST['first_name']."',
                   last_name  = '".$_POST['last_name']."', 
                   email      = '".$_POST['email']."', 
                   cid        = '".$_POST['cid']."', 
                   tel        = '".$_POST['tel']."', 
                   status     = '".$_POST['status']."',      
                   update_at =  '".date("Y-m-d H:i:s")."',
                    dep_id  = '".$_POST['dep_id']."', 
                    image   = '".$_POST['image']."'

                              WHERE `id` = '".$_POST['id']."';";
          
          $result = $conn->query($sql) ;
          if ($result){
                echo '<script> alert("แก้ไขข้อมูลสำเร็จ")</script>'; 
                header('Refresh:0; url=index.php');
          }else{
                echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ!!")</script>'; 
                header('Refresh:0; url=index.php');
        }

    }else {
        header('Refresh:0; url=index.php');
    }
   

?>