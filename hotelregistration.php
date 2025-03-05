<?php
include 'connection.php';
$hname=$_POST['h_name'];
$hlocation=$_POST['h_location'];
$hphone=$_POST['h_phone'];
$hemail=$_POST['h_email'];
$data=mysqli_query($con,"INSERT INTO hotel_reg(h_name,h_location,h_phone,h_email)values('$hname','$hlocation','$hphone','$hemail')");
if($data)
{
    $myarray['message']="success";

}
else{
    $myarray['message']="failed";
}
echo json_encode($myarray);
?>