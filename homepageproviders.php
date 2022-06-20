<?php
	include_once ('scripts/config.php');
	session_start();
	$id=$_SESSION["provider_id"];
	
                             



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
	
	
    <?php include 'homenavbarprovider.php';?>
	<div class = "section">
	<div class = "row">
	<div class = "col s12 offset-m3 m6 offset-l3 l6 center-align">
	<h5>Welcome to the Home Page</h5>
	<?php
	$query = "select status_of_app.app_id,status_of_app.patient_id,status_of_app.status,patients.name from status_of_app inner join patients on status_of_app.patient_id = patients.patient_id inner join appointments on appointments.app_id= status_of_app.app_id inner join providers on providers.provider_id = appointments.provider_id where providers.provider_id = $id";
	$run_result1 = mysqli_query($conn,$query);
		
				if(mysqli_num_rows($run_result1)<1){
	
				echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
				exit();
	
				}
				
				$num_rows1 = mysqli_num_rows($run_result1);
				
				
				while($row_result1=mysqli_fetch_array($run_result1))
				{
					
					$app_id = $row_result1['app_id'];
					$patient_id = $row_result1['patient_id'];
					$name = $row_result1['name'];
					$status = $row_result1['status'];
					
				
							echo"<ul class='collection'>
								 <li class='collection-item avatar'>
									<i class='material-icons circle blue'>grade</i>
									
										<span class='title'>Appointment ID: $app_id</span>
											<p>Patient ID: $patient_id<br>
												Patient ID: $name<br>
												Status: $status<br>
												</p>
											
								  </li>
								</ul>";
				}	
	?>
	
	 
  
	</div>
	</div>
	</div>
    

   
					

		  
  
  
     <?php include 'components/floatingactionbtn.php';?>
	 
	 
     

    
  
	
	
	 
	
    </body>
  </html>
      
	
	
    