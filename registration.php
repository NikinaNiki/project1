<?php
include 'conn.php';
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone_no'];
$district=$_POST['district'];
$password=$_POST['password'];
$data=mysqli_query($con,"INSERT INTO `studreg_db`( `name`, `dob`, `gender`, `email`, `phone_no`, `district`) VALUES ('$name','$dob','$gender','$email','$phone','$district')");
mysqli_query($con,"INSERT INTO `login`( `email`, `password`) VALUES ('$email','$password')");
if($data)
{
    $myarray['message']="success";
}
else{
    $myarray['message']="failed";

}
echo json_encode($myarray);
?>