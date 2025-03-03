<?php
include 'conn.php';
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone_no'];
$district=$_POST['district'];
$data=mysqli_query($con,"INSERT INTO `studreg_db`( `name`, `dob`, `gender`, `email`, `phone_no`, `district`) VALUES ('$name','$dob','$gender','$email','$phone','$district')");
if($data)
{
    $myarray['message']="success";
}
else{
    $myarray['message']="failed";

}
echo json_encode($myarray);
?>