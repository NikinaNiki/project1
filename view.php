<?php
include 'conn.php';
$data=mysqli_query($con,"select * from `studreg_db`");
$list=array();
if(mysqli_num_rows($data)>0)
{
    while($row=mysqli_fetch_assoc(($data)))
    {
        $myarray['name']=$row['name'];
        $myarray['dob']=$row['dob'];
        $myarray['gender']=$row['gender'];
        $myarray['email']=$row['email'];
        $myarray['phone_no']=$row['phone_no'];
        $myarray['district']=$row['district'];
        array_push($list,$myarray);

    }
}
else
{
    $myarray['message']="failed";
    array_push($list,$myarray);

}
echo json_encode($list);
?>