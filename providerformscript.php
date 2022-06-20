<?php
	
	include 'scripts/config.php';


	if(isset($_POST['submit'])){
		
		$sub_email = mysqli_real_escape_string($conn,$_REQUEST['sub_email']);
		$password = md5('hashkeyvalue'.mysqli_real_escape_string($conn,$_REQUEST['sub_password']));
		$confirmpassword = md5('hashkeyvalue'.mysqli_real_escape_string($conn,$_REQUEST['sub_confirmpassword']));
		$sub_name = mysqli_real_escape_string($conn,$_REQUEST['sub_name']);
		$sub_mobile = mysqli_real_escape_string($conn,$_REQUEST['sub_mobile']);
		$sub_address = mysqli_real_escape_string($conn,$_REQUEST['sub_address']);
		$sub_providertype = mysqli_real_escape_string($conn,$_REQUEST['sub_providertype']);
		
		
		
		
		if($sub_email=='' OR $password=='' OR $confirmpassword=='' OR $sub_name=='' OR $sub_address=='' OR $sub_mobile=='' OR $sub_providertype=='')
		{
			echo "<script>alert('please fill all the fields')</script>";
			die();
		}
		else if($password != $confirmpassword){
			echo "<script>alert('The password and confirmpassword fields do not match')</script>";
			die();
		}
		else{
			
			$insert_query = "insert into providers(pemail,passwd,pname,phone,p_address,provider_type) values('$sub_email','$password','$sub_name','$sub_mobile','$sub_address','$sub_providertype')";
		}
		if(mysqli_query($conn,$insert_query))
		{
			echo "<script>alert('You are all set. You can now login!')</script>";
		}
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			die();
		}
	}
		
      
	?>