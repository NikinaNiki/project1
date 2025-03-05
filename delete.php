<?php
include 'conn.php';
$id=$_POST['id'];
$data=mysqli_query($con,"DELETE FROM `studreg_db` WHERE id='$id'");
if($data)
{
    $myarray['message']="deleted";

}
else{
    $myarray['message']="failed";

}
echo json_encode($myarray);
?>