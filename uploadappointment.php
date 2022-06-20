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
	  
	  <style>

 .contact {
		margin: auto;
		width: 60%;
		padding: 20px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	  }
	  
	  .hideform {
			
	  }
	  
</style>
	  
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
	
	
	 <div class="indigo">
  
	  <br><br><br>
	<div class="col m10 offset-m1 l10 offset-l1 s12">
<div class="contact hideform white">

<div class="container">
    <div class="row">
        
            <h5 class="center">Enter details of the Appointment</h5>
            <div class="row">
                <form class="col m8 offset-m2 s12" action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        
                        
						<div class="input-field col s12">
                            <input id="app_date" type="text" class="validate" name="sub_app_date" required>
                            <label for="app_date" class="datepicker black-text">Date of Appointment</label>
							<span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>
						<div class="input-field col s12">
                            <input id="time_of_app" type="text" class="validate" name="sub_time_of_app" required>
                            <label for="time_of_app" class="timepicker black-text">Time of Appointment</label>
							<span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>
						
                    </div>
                    
                    
                    <div class="row">
                        <div class="col m12">
                         <p class="right-align"><button class="btn btn-large waves-effect waves-light center" type="submit" name="submit">Upload</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
	  <br><br><br>
	
</div>

<?php
	
	


	if(isset($_POST['submit'])){
		
		
		$sub_app_date = date('Y-m-d', strtotime($_POST['sub_app_date']));
		$sub_time_of_app = date('H:i:s',strtotime($_POST['sub_time_of_app']));
		
		//echo "$sub_app_date $sub_time_of_app";
		
		if($sub_app_date=='' OR $sub_time_of_app=='')
		{
			echo "<script>alert('please fill all the fields')</script>";
			die();
		}
		else{
			
			$insert_query = "insert into appointments(provider_id, app_date, time_of_app, new_or_not) values('$id','$sub_app_date','$sub_time_of_app','new')";
		}
		if(mysqli_query($conn,$insert_query))
		{
			echo "<script>alert('Appointment Uploaded!')</script>";
		}
		else{
			echo "<script>alert('Oops.That did not work.Please try again.')</script>";
			die();
		}
	}
		
      
	?>

	
  

   
					

		  
  
  
     <?php include 'components/floatingactionbtn.php';?>
	 
	 
     
	<script>
	  
		$(document).ready(function(){
		$('#app_date').datepicker();
		$('#app_date').setDate(new Date());
		});
	  
	 </script>
	 
    
  
	
	
	 
	
    </body>
  </html>
      
	
	
    