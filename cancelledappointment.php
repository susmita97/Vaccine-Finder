<?php
	include_once ('scripts/config.php');
	session_start();
	$id=$_SESSION["patient_id"];
	
                             



?>


<!DOCTYPE html>
  <html>
    <head>
     
	  <?php include 'scripts/mainscript.php';?>
	  
	  <link rel="stylesheet" href="animate.css">
	  
	  <link rel="stylesheet" href="effect.css">
	  
	  <title>Vaccine Finder</title>
	  
	  
	  
	  <script src="wow.min.js"></script>
      <script>
          new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }).init();
      </script>

    </head>

    <body>
	
	
    <?php include 'homenavbarpatient.php';?>

		<div class = "section">
	<div class = "row">
	<div class = "col s12 offset-m3 m6 offset-l3 l6 center-align">
	
	
	<h5>You just cancelled an appointment.<br>Go to Book an Appointment to book another one.</h5><br><br>
	<h5>Go to Appointment History now to review the details.</h5><br><br>
	
	 <?php 
				if(isset($_GET["app_id"]))
				{			
					$app_id = $_GET["app_id"];
        
				}
				//echo "patient $id app $app_id";
				$sql="update status_of_app set status='cancelled', provider_notified='yes' where patient_id=$id and app_id=$app_id";
		
				if(mysqli_query($conn, $sql)){
					echo "<a href='bookappointment.php' class='waves-effect waves-light btn right-align'>Book an Appointment</a><br><br>";
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	
				}
				
				$sql1="update appointments set new_or_not='new' where app_id=$app_id";
		
				if(mysqli_query($conn, $sql1)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
	
				}
		        
				?>
	
  
	</div>
	</div>
	</div>
	
  
  
    

   
					

		  
  
  
     <?php include 'components/floatingactionbtn.php';?>
	 
	 
     

    
  
	
	
	 
	
    </body>
  </html>
      
	
	
    