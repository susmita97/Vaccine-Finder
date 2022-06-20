<?php
	include_once ('scripts/config.php');
	session_start();
	$id=$_SESSION['patient_id'];
	
                             



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
	<div class = "col s12 m12 l12 center-align">
	<h4>Edit Your Preferences</h4>
	
	<h5>Below are the time slots for each day.<br>Please select one of these or more for the days of the week to indicate your
	availability to take the vaccine.<br></h5>
	<div class = "col s12 offset-m3 m6 offset-l3 l6 center-align">
	<table class="responsive-table">
        <thead>
          <tr>
              <th>Time Slot Number</th>
              <th>Time</th>
              
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>8:00 am to 12:00 pm</td>
            
          </tr>
          <tr>
            <td>2</td>
            <td>12:00 pm to 4:00 pm</td>
            
          </tr>
          <tr>
            <td>3</td>
            <td>4:00 pm to 8:00 pm</td>
            
          </tr>
        </tbody>
      </table>
	<br><br>
	
	<?php 
		
		$pquery = "select *from patient_preferences where patient_id = $id";
		
		$run_result1 = mysqli_query($conn,$pquery);
		
				if(mysqli_num_rows($run_result1)<1){
	
				echo "<a href='setpreferences.php' class='waves-effect waves-light btn right-align'>Set Preferences</a><br><br>";
				exit();
	
				}
				
				$num_rows1 = mysqli_num_rows($run_result1);
				
				echo "Your Current Preferences";
				echo "<table class='responsive-table'>
						<thead>
						<tr>
              <th>Weekday</th>
              <th>Time slot 1</th>
              <th>Time slot 2</th>
			  <th>Time slot 3</th>
			  
						</tr>
						</thead>

						<tbody>";
				while($row_result1=mysqli_fetch_array($run_result1))
				{
					
					$patient_id = $row_result1['patient_id'];
					$weekday = $row_result1['weekday'];
					$time_slot_id = $row_result1['time_slot_id'];
					
					echo "
							<tr>
							<td>
							<label>
								
								<span><h6>$weekday</h6></span>
							</label>
							</td>
							";
							
							if($time_slot_id == 1){
							
							echo"<td>
							<label>
								<input type='checkbox' checked='checked' />
								<span></span>
							</label>
							</td>
							<td>
							<label>
								
								<span></span>
							</label>
							</td>
							<td>
							<label>
								
								<span></span>
							</label>
							</td>
							</tr>";
							}
							else if($time_slot_id == 2){
							
							echo "
							<td>
							<label>
								
								<span></span>
							</label>
							</td>
							<td>
							<label>
								<input type='checkbox' checked = 'checked'/>
								<span></span>
							</label>
							</td>
							<td>
							<label>
								
								<span></span>
							</label>
							</td>
							</tr>";
							
							}
							
							else if($time_slot_id == 3){
							
							echo"
							<td>
							<label>
								
								<span></span>
							</label>
							</td>
							<td>
							<label>
								
								<span></span>
							</label>
							</td>
							<td>
							<label>
								<input type='checkbox' checked='checked' />
								<span></span>
							</label>
							</td>
							</tr>";
							}
							
							
				}
	
	echo "
	</tbody>
	</table>";
	
	
	
	
	?>
	<h5>For updating your preferences please enter the time slot number for the weekdays and press update.<br><br></h5>
	  <form action='#' method = 'post'>
		<table class='responsive-table'>
        <thead>
          <tr>
              <th>Weekday</th>
              <th>Time slot 1</th>
              <th>Time slot 2</th>
			  <th>Time slot 3</th>
			  <th>Update</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
			 <label>
				<input class='with-gap' name='Mondayr' type='radio'  />
				<span>Monday</span>
			</label>
			</td>
            <td>
			<label>
			<input type='checkbox' name = 'Monday1' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Monday2' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Monday3' />
			<span></span>
			</label>
			</td>
            <td>
			<button class="btn waves-effect waves-light center" type="submit" name="Monday">Update</button>
			</td>
          </tr>
		  
		  <tr>
            <td>
			 <label>
				<input class='with-gap' name='Tuesdayr' type='radio'  />
				<span>Tuesday</span>
			</label>
			</td>
            <td>
			<label>
			<input type='checkbox' name = 'Tuesday1' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Tuesday2' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Tuesday3' />
			<span></span>
			</label>
			</td>
            <td>
			<button class="btn waves-effect waves-light center" type="submit" name="Tuesday">Update</button>
			</td>
          </tr>
		  
		  <tr>
            <td>
			 <label>
				<input class='with-gap' name='Wednesdayr' type='radio'  />
				<span>Wednesday</span>
			</label>
			</td>
            <td>
			<label>
			<input type='checkbox' name = 'Wednesday1' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Wednesday2' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Wednesday3' />
			<span></span>
			</label>
			</td>
            <td>
			<button class="btn waves-effect waves-light center" type="submit" name="Wednesday">Update</button>
			</td>
          </tr>
		  
		  <tr>
            <td>
			 <label>
				<input class='with-gap' name='Thursdayr' type='radio'  />
				<span>Thursday</span>
			</label>
			</td>
            <td>
			<label>
			<input type='checkbox' name = 'Thursday1' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Thursday2' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Thursday3' />
			<span></span>
			</label>
			</td>
            <td>
			<button class="btn waves-effect waves-light center" type="submit" name="Thursday">Update</button>
			</td>
          </tr>
		  
		  <tr>
            <td>
			 <label>
				<input class='with-gap' name='Fridayr' type='radio'  />
				<span>Friday</span>
			</label>
			</td>
            <td>
			<label>
			<input type='checkbox' name = 'Friday1' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Friday2' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Friday3' />
			<span></span>
			</label>
			</td>
            <td>
			<button class="btn waves-effect waves-light center" type="submit" name="Friday">Update</button>
			</td>
          </tr>
		  
		  <tr>
            <td>
			 <label>
				<input class='with-gap' name='Saturdayr' type='radio'  />
				<span>Saturday</span>
			</label>
			</td>
            <td>
			<label>
			<input type='checkbox' name = 'Saturday1' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Saturday2' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Saturday3' />
			<span></span>
			</label>
			</td>
            <td>
			<button class="btn waves-effect waves-light center" type="submit" name="Saturday">Update</button>
			</td>
          </tr>
		  
		  <tr>
            <td>
			 <label>
				<input class='with-gap' name='Sundayr' type='radio'  />
				<span>Sunday</span>
			</label>
			</td>
            <td>
			<label>
			<input type='checkbox' name = 'Sunday1' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Sunday2' />
			<span></span>
			</label>
			</td>
			<td>
			<label>
			<input type='checkbox' name = 'Sunday3' />
			<span></span>
			</label>
			</td>
            <td>
			<button class="btn btn-medium waves-effect waves-light center" type="submit" name="Sunday">Update</button><br><br>
			</td>
          </tr>
		  
          
        </tbody>
      </table>
	<br><br>
	
	  </form>
	<?php 
		
		if(isset($_POST['Monday']))
		{
			if(isset($_POST['Mondayr']))
			{
				$weekday = 'Monday';
				$deletequery = "delete from patient_preferences where patient_id = $id";
				if(mysqli_query($conn, $deletequery)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $deletequery. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Monday1']))
			{
				$time_slot_id = 1;
				
				$monday1 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $monday1)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $monday1. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Monday2']))
			{
				$time_slot_id = 2;
				$monday2 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $monday2)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $monday2. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Monday3']))
			{
				$time_slot_id = 3;
				$monday3 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $monday3)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $monday3. " . mysqli_error($conn);
	
				}
			}
		}
		if(isset($_POST['Tuesday']))
		{
			if(isset($_POST['Tuesdayr']))
			{
				$weekday = 'Tuesday';
				$deletequery = "delete from patient_preferences where patient_id = $id";
				if(mysqli_query($conn, $deletequery)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $deletequery. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Tuesday1']))
			{
				$time_slot_id = 1;
				
				$Tuesday1 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Tuesday1)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Tuesday1. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Tuesday2']))
			{
				$time_slot_id = 2;
				$Tuesday2 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Tuesday2)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Tuesday2. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Tuesday3']))
			{
				$time_slot_id = 3;
				$Tuesday3 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Tuesday3)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Tuesday3. " . mysqli_error($conn);
	
				}
			}
		}
		
		if(isset($_POST['Wednesday']))
		{
			if(isset($_POST['Wednesdayr']))
			{
				$weekday = 'Wednesday';
				$deletequery = "delete from patient_preferences where patient_id = $id";
				if(mysqli_query($conn, $deletequery)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $deletequery. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Wednesday1']))
			{
				$time_slot_id = 1;
				
				$Wednesday1 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Wednesday1)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Wednesday1. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Wednesday2']))
			{
				$time_slot_id = 2;
				$Wednesday2 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Wednesday2)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Wednesday2. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Wednesday3']))
			{
				$time_slot_id = 3;
				$Wednesday3 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Wednesday3)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Wednesday3. " . mysqli_error($conn);
	
				}
			}
		}
		
		if(isset($_POST['Thursday']))
		{
			if(isset($_POST['Thursdayr']))
			{
				$weekday = 'Thursday';
				$deletequery = "delete from patient_preferences where patient_id = $id";
				if(mysqli_query($conn, $deletequery)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $deletequery. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Thursday1']))
			{
				$time_slot_id = 1;
				
				$Thursday1 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Thursday1)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Thursday1. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Thursday2']))
			{
				$time_slot_id = 2;
				$Thursday2 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Thursday2)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Thursday2. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Thursday3']))
			{
				$time_slot_id = 3;
				$Thursday3 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Thursday3)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Thursday3. " . mysqli_error($conn);
	
				}
			}
		}
		
		if(isset($_POST['Friday']))
		{
			if(isset($_POST['Fridayr']))
			{
				$weekday = 'Friday';
				$deletequery = "delete from patient_preferences where patient_id = $id";
				if(mysqli_query($conn, $deletequery)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $deletequery. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Friday1']))
			{
				$time_slot_id = 1;
				
				$Friday1 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Friday1)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Friday1. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Friday2']))
			{
				$time_slot_id = 2;
				$Friday2 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Friday2)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Friday2. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Saturday3']))
			{
				$time_slot_id = 3;
				$Saturday3 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Saturday3)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Saturday3. " . mysqli_error($conn);
	
				}
			}
		}
		
		if(isset($_POST['Saturday']))
		{
			if(isset($_POST['Saturdayr']))
			{
				$weekday = 'Saturday';
				$deletequery = "delete from patient_preferences where patient_id = $id";
				if(mysqli_query($conn, $deletequery)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $deletequery. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Saturday1']))
			{
				$time_slot_id = 1;
				
				$Saturday1 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Saturday1)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Saturday1. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Saturday2']))
			{
				$time_slot_id = 2;
				$Saturday2 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Saturday2)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Saturday2. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Saturday3']))
			{
				$time_slot_id = 3;
				$Saturday3 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Saturday3)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Saturday3. " . mysqli_error($conn);
	
				}
			}
		}
		
		if(isset($_POST['Sunday']))
		{
			if(isset($_POST['Sundayr']))
			{
				$weekday = 'Sunday';
				$deletequery = "delete from patient_preferences where patient_id = $id";
				if(mysqli_query($conn, $deletequery)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $deletequery. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Sunday1']))
			{
				$time_slot_id = 1;
				
				$Sunday1 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Sunday1)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Sunday1. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Sunday2']))
			{
				$time_slot_id = 2;
				$Sunday2 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Sunday2)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Sunday2. " . mysqli_error($conn);
	
				}
			}
			if(isset($_POST['Sunday3']))
			{
				$time_slot_id = 3;
				$Sunday3 = "insert into patient_preferences(patient_id,weekday,time_slot_id) values('$id','$weekday','$time_slot_id')";
				if(mysqli_query($conn, $Sunday3)){
					//echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $Sunday3. " . mysqli_error($conn);
	
				}
			}
		}
	
	  ?>
	</div>
	</div>
	</div>
	</div>
    

   
					

		  
  
  
     <?php include 'components/floatingactionbtn.php';?>
	 
	 
     

    
  
	
	
	 
	
    </body>
  </html>
      
	
	
    