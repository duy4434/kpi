<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');

    
    if(isset($_POST['submit'])){
        $sql = "UPDATE `team`
               SET `team_name` = '".$_POST['team_name']."', 
                 `detail_name` = '".$_POST['detail_name']."', 
                 `update` = '".date("Y-m-d H:i:s")."' 
                  where `id` = '".$_POST['id']."';";
          
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