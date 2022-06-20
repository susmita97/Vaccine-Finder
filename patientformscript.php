<?php
	
	include 'scripts/config.php';


	if(isset($_POST['submit'])){
		
		$sub_email = mysqli_real_escape_string($conn,$_REQUEST['sub_email']);
		$password = md5('hashkeyvalue'.mysqli_real_escape_string($conn,$_REQUEST['sub_password']));
		$confirmpassword = md5('hashkeyvalue'.mysqli_real_escape_string($conn,$_REQUEST['sub_confirmpassword']));
		$sub_name = mysqli_real_escape_string($conn,$_REQUEST['sub_name']);
		$sub_ssn = mysqli_real_escape_string($conn,$_REQUEST['sub_ssn']);
		$sub_dateofbirth = date('Y-m-d', strtotime(mysqli_real_escape_string($conn,$_REQUEST['sub_dateofbirth'])));
		$sub_address = mysqli_real_escape_string($conn,$_REQUEST['sub_address']);
		$sub_mobile = mysqli_real_escape_string($conn,$_REQUEST['sub_mobile']);
		$sub_maxdistance = mysqli_real_escape_string($conn,$_REQUEST['sub_maxdistance']);
		$age = '';
		$priority_group = '';
		
		if($sub_email=='' OR $password=='' OR $confirmpassword=='' OR $sub_name=='' OR $sub_ssn=='' OR $sub_dateofbirth=='' OR $sub_address=='' OR $sub_mobile=='' OR $sub_maxdistance=='')
		{
			echo "<script>alert('please fill all the fields')</script>";
			die();
		}
		else if($password != $confirmpassword){
			echo "<script>alert('The password and confirmpassword fields do not match')</script>";
			die();
		}
		else{
			
			
			$today = date("Y-m-d");
			$age1 = date_diff($date_of_birth, date_create($today));
			$age = $age1->format('%y');
			
			if($age > 80)
			{
				$priority_group = '1';
			}
			else if($age < 80 and $age > 70)
			{
				$priority_group = '2';
			}
			else if($age < 70 and $age > 60)
			{
				$priority_group = '3';
			}
			else if($age < 60 and $age > 50)
			{
				$priority_group = '4';
			}
			else if($age < 50 and $age > 30)
			{
				$priority_group = '5';
			}
			else if($age < 30 and $age >= 20)
			{
				$priority_group = '6';
			}
			else if($age < 20)
			{
				$priority_group = '7';
			}
			else
			{
				$priority_group = '';
			}
			
			$insert_query = "insert into patients(email,password,name,ssn,date_of_birth,address,phone_number,priority_group_name,max_distance) values('$sub_email','$password','$sub_name','$sub_ssn','$sub_dateofbirth','$sub_address','$sub_mobile','$priority_group','$sub_maxdistance')";
		}
		if(mysqli_query($conn,$insert_query))
		{
			echo "<script>alert('You are all set. You can now login!')</script>";
			
		}
		else{
			echo "<script>alert('Oops.That did not work.Please try again.')</script>";
			die();
		}
	}
		
      
	?>