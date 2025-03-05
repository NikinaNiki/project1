<?php
include 'conn.php';
$id=$_POST['id'];
$data=mysqli_query($con,"select * from studreg_db where id='$id'");
if(mysqli_num_rows($data)>0)
{
    $row=mysqli_fetch_assoc(($data));
    $myarray['name']=$row['name'];
    $myarray['dob']=$row['dob'];
    $myarray['gender']=$row['gender'];
    $myarray['email']=$row['email'];
    $myarray['phone_no']=$row['phone_no'];
    $myarray['district']=$row['district'];


}
else{
    $myarray['message']="failed";
}
echo json_encode($myarray);
?>