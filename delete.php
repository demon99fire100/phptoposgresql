<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $postgresql="DELETE FROM licenseplates WHERE id=$id";
    $result=pg_query($con, $postgresql);
    if($result){
        header('location:display.php');}else{ echo "error: " . pg_last_error($con);}
}
?>