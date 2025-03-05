<?php
include 'conn.php';
$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone_no'];
$district=$_POST['district'];
$data=mysqli_query($con,"UPDATE studreg_db SET name='$name', dob='$dob',gender='$gender',email='$email',phone_no='$phone',district='$district' where id='$id'");
if($data)
{
    $myarray['message']="updated";
}
else{
    $myarray['message']="failed";

}
echo json_encode($myarray);
?>