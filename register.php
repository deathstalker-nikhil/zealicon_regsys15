<?php
session_start();
include 'common-code/db.php';
$conn = dbConnect();
$zealicon_id = $_REQUEST['confirm_zealId'];
$name = $_REQUEST['confirm_name'];
$email = $_REQUEST['confirm_email'];
$mobile = $_REQUEST['confirm_mobile'];
$course = $_REQUEST['confirm_course'];
$college = $_REQUEST['confirm_college'];
$amount = $_REQUEST['amount'];

		$insert_query = "INSERT into paid_registrations(mobile,email, amount,name, course, collegeName,paid) VALUES('$mobile','$email','$amount','$name','$course','$college','1')";
$run_insert_query = $conn->query($insert_query);
$select_query = "SELECT * from paid_registrations where `email` = '$email'";
$run_select_query = $conn->query($select_query);

     while($row = $run_select_query->fetch_array())
    $id= $row['id'];
echo $zealicon_id;
echo $insert_query;
if($zealicon_id==''){
$zealicon_id = "Z15s1_".$id;
}
$update_query = "UPDATE paid_registrations SET `zealId`='$zealicon_id' where `email` = '$email'";
$run_update_query = $conn->query($update_query);

if($run_update_query){
  header("Location: display.php?id=1"); }
 else{
  header("Location: display.php?id=100");
  }
?>
 