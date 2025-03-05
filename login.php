<?php
include 'conn.php';
$u_name=$_POST['email'];
$pwd=$_POST['password'];
$data=mysqli_query($con,"select * from `login` where email='$u_name' and password='$pwd'");
if(mysqli_num_rows($data)>0)
{
    $myarray['message']="success";
}
else{
    $myarray['message']="failed";

}
echo json_encode($myarray);
?>