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
	<h5>Welcome to the Home Page</h5>
	
	
	 <?php 
	 
	 
	 
	 $flag = 0;
	 $priority_group_query = "select priority_groups.start_date, patients.priority_group_name from priority_groups inner join patients on priority_groups.priority_group_name = patients.priority_group_name where patients.patient_id = $id";
	 $run_result2 = mysqli_query($conn,$priority_group_query);
	 if(mysqli_num_rows($run_result2)<1){
	
				echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
				exit();
	
				}
	$num_rows2 = mysqli_num_rows($run_result2);
				
				
				while($row_result2=mysqli_fetch_array($run_result2))
				{
					
					$start_date = $row_result2['start_date'];
					$priority_group_name = $row_result2['priority_group_name'];
				}
				
				$today = date("Y-m-d");
				if($today > $start_date)
				{
					flag = 1;
				}
				
				$check_status_of_app = "select status from status_of_app where patient_id = $id";
				$run_result1 = mysqli_query($conn,$check_status_of_app);
				
				if(mysqli_num_rows($run_result1)<1){
	
				echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
				exit();
	
				}
				
				$num_rows1 = mysqli_num_rows($run_result1);
				
				
				while($row_result1=mysqli_fetch_array($run_result1))
				{
					
					$status3 = $row_result1['status'];
					
					if($status3 == 'completed')
					{
						echo "<div><h2>Hey looks like you have completed your vaccination.<br>Cool!<br>Go to Appointment History to view
						the details of your Appointment!<br></h2></div>";
						exit();
					}
				}
				
				$check_status_of_app1 = "select status_of_app.app_id,status_of_app.status,appointments.app_date from status_of_app inner join appointments on status_of_app.app_id = appointments.app_id where patient_id = $id and appointments.app_date > curdate()";
				$run_result3 = mysqli_query($conn,$check_status_of_app1);
				
				if(mysqli_num_rows($run_result3)<1){
	
				echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
				exit();
	
				}
				
				$num_rows3 = mysqli_num_rows($run_result3);
				
				
				while($row_result3=mysqli_fetch_array($run_result3))
				{
					
					$status3 = $row_result3['status'];
					
					if($status3 == 'accepted')
					{
						echo "<div><h2>You have an appointment coming up.<br>Cool!<br>Go to Appointment History to view
						the details of your Appointment!<br></h2></div>";
						exit();
					}
				}
				
				echo "<h5>Showing Available Appointments</h5>
	<h5>Go to Book an Appointment for booking</h5><br>
	<a class='waves-effect waves-light btn' href='bookappointment.php'><i class='material-icons right'>arrow_forward</i>Book an appointment</a>
	<br><br>";
				
				
				
		        $appointment_query = "select preferencequery.app_id, preferencequery.provider_id, distancequery.pname, preferencequery.app_date,
dayname(preferencequery.app_date) as weekday, preferencequery.time_of_app, distancequery.distance_in_km
from 
(select providers.provider_id,providers.pname, (111.111 *
DEGREES(ACOS(LEAST(1.0, COS(RADIANS(providers.latitude))
* COS(RADIANS(patients.latitude))
* COS(RADIANS(providers.longitude - (patients.longitude)))
+ SIN(RADIANS(providers.latitude))
* SIN(RADIANS(patients.latitude)))))) as distance_in_km
from providers join patients where patients.patient_id = $id 
having providers.provider_id in 
(select provider_id from appointments
where new_or_not = 'new' and app_date > curdate())) distancequery
inner join (select appointments.app_id, appointments.provider_id, appointments.app_date, 
appointments.time_of_app, appointments.time_slot_id from appointments inner join patient_preferences
on appointments.time_slot_id = patient_preferences.time_slot_id inner join status_of_app 
on status_of_app.app_id = appointments.app_id
where appointments.new_or_not = 'new' and appointments.app_date > curdate() 
and dayname(appointments.app_date) = patient_preferences.weekday and patient_preferences.patient_id = $id
and status_of_app.status != 'declined'
) preferencequery
on preferencequery.provider_id = distancequery.provider_id
order by distancequery.distance_in_km asc;



";
		
				$run_result1 = mysqli_query($conn,$appointment_query);
		
				if(mysqli_num_rows($run_result1)<1){
	
				echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
				exit();
	
				}
				
				$num_rows1 = mysqli_num_rows($run_result1);
				
				
				while($row_result1=mysqli_fetch_array($run_result1))
				{
					
					$app_id = $row_result1['app_id'];
					$provider_id = $row_result1['provider_id'];
					$pname = $row_result1['pname'];
					$app_date = $row_result1['app_date'];
					$weekday = $row_result1['weekday'];
					$time_of_app = $row_result1['time_of_app'];
					$distance_in_km = $row_result1['distance_in_km'];
				
							echo"<ul class='collection'>
								 <li class='collection-item avatar'>
									<i class='material-icons circle blue'>play_arrow</i>
										<span class='title'>$pname</span>
											<p>Time of Appointment $time_of_app<br>
												Date of Appointment $app_date<br>
												Day of Appoinment $weekday<br>
												Distance of the provider(in KMs) $distance_in_km<br>
											</p>
											<a href='#!' class='secondary-content'><i class='material-icons'>grade</i></a>
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
      
	
	
    