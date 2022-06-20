<?php

include_once ('config.php');
session_start();
$id=$_SESSION["provider_id"];

//$sql="update sessions_providers set logout=CURRENT_TIMESTAMP where pro_id=$id";

//if(mysqli_query($conn, $sql)){
								//echo "<script>alert('please fill all the fields')</script>";
							//} 
							//else{
								//echo "<script>alert('please fill all the fields$id')</script>";
							//} 

$_SESSION = array();
 

session_destroy();

header("location: loginforproviders.php");
exit;
?>