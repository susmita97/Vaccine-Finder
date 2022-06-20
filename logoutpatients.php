<?php

include_once ('config.php');
session_start();
$id=$_SESSION["patient_id"];

//$sql="update sessions_patients set logout=CURRENT_TIMESTAMP where p_id=$id";

//if(mysqli_query($conn, $sql)){
								//echo "<script>alert('please fill all the fields')</script>";
							//} 
							//else{
								//echo "<script>alert('please fill all the fields$id')</script>";
							//} 

$_SESSION = array();
 

session_destroy();

header("location: loginforpatients.php");
exit;
?>