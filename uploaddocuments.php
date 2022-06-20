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
	<h5>Upload Necessary Documents<br></h5>
	<h6>Upload necessary documents below that will help us determine your eligibilty to take the vaccine.<br><br></h6>
	<h6>Please upload a file with size less than 2 MB</h6>
	<form action="#" method="post">
        <div class="row">
            <div class="file-field input-field">
                <div class="btn green">
                    <span>File</span>
                    <input type="file" name="image">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path" placeholder="Choose an image"><br><br>
					<button class="btn btn-large waves-effect waves-light right" type="submit" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
	
	<?php

		if (isset($_POST['submit'])) {

    $imageName = $_POST['image'];
	//echo "$imageName";
  
	
	$sql = "insert into patient_info(patient_id,document) values('$id','$imageName')";
	if(mysqli_query($conn, $sql)){
					echo "Success";
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	
				}
				
		}
	
	?>
  
	</div>
	</div>
	</div>
    

   
					

		  
  
  
     <?php include 'components/floatingactionbtn.php';?>
	 
	 
     

    
  
	
	
	 
	
    </body>
  </html>
      
	
	
    