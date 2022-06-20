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
	
	
	<h5>Showing Your Appointment History</h5><br><br>
	
	
	 <?php 
				
				$check_status_of_app = "select app_id,status,provider_notified from status_of_app where patient_id = $id";
				$run_result1 = mysqli_query($conn,$check_status_of_app);
				
				if(mysqli_num_rows($run_result1)<1){
	
				echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
				exit();
	
				}
				
				$num_rows1 = mysqli_num_rows($run_result1);
				
				
				while($row_result1=mysqli_fetch_array($run_result1))
				{
					$app_id = $row_result1['app_id'];
					$status = $row_result1['status'];
					$provider_notified = $row_result1['provider_notified'];
					
					$check_app = "select appointments.app_id,appointments.provider_id,appointments.app_date,appointments.time_of_app,providers.pname from appointments left join providers on appointments.provider_id = providers.provider_id  where app_id = $app_id";
					
					$run_result2 = mysqli_query($conn,$check_app);
				
				if(mysqli_num_rows($run_result2)<1){
	
				echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
				exit();
	
				}
				
				$num_rows2 = mysqli_num_rows($run_result2);
				
				
				while($row_result2=mysqli_fetch_array($run_result2))
				{
					$app_id = $row_result2['app_id'];
					$provider_id = $row_result2['provider_id'];
					$app_date = $row_result2['app_date'];
					$time_of_app = $row_result2['time_of_app'];
					$pname = $row_result2['pname'];
					
					
					echo "<ul class='collection'>
								 <li class='collection-item avatar'>
									<i class='material-icons circle blue'>play_arrow</i>
										<span class='title'>Provider name: $pname</span>
											<p>Time of Appointment: $time_of_app<br>
												Date of Appointment: $app_date<br>
												Current Status of the Appointment: $status<br>
												Is the Provider notified of the current status: $provider_notified<br><br> 
												
											</p>
											<a href='#!' class='secondary-content'><i class='material-icons'>grade</i></a>
								  </li>
								</ul>";
				}
				
				
				}
		        
				?>
	
  
	</div>
	</div>
	</div>
	
  
  
    

   
					

		  
  
  
     <?php include 'components/floatingactionbtn.php';?>
	 
	 
     

    
  
	
	
	 
	
    </body>
  </html>
      
	
	
    