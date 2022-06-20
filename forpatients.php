<!DOCTYPE html>
  <html>
    <head>
     
	  <?php include 'scripts/mainscript.php';?>
	  
	  <link rel="stylesheet" href="animate.css">
	  
	  <link rel="stylesheet" href="effect.css">
	  
	  <title>Vaccine Finder</title>
	  
	  <style>
	  
	  .servicec{
		  height :250px;
	  }
	  .box{
		  height :400px;
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
	
	
    <?php include 'navbar.php';?>

	
	
  
  
    <div class="section">
	<br><br><br>
      <div class="row">
	    <div class="about_content wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
        <div class="col s12 offset-m4 m6 offset-l4 l5">
          
          <h2 class="teal-text text-accent-4">For Patients</h2><br>
           <h4 class="left-align teal-text">Create an Account</h4><br>
		   <a class="waves-effect waves-light btn" href="signuppatient.php"><i class="material-icons right">arrow_forward</i>Sign Up</a><br>
		   <h4 class="left-align teal-text">For Existing Users</h4><br>
		   <a class="waves-effect waves-light btn" href="loginforpatients.php"><i class="material-icons right">arrow_forward</i>Login</a><br>
		   <br><br><br>
		</div>
		</div> 
		   
		
      </div>
	  
	  <div class="row">
	    <div class="about_content wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
        <div class="col s12 offset-m4 m6 offset-l4 l5">
          
          <h2 class="blue-text text-darken-2">Lost your way? <br>No worries.<br>Sign Up/Login as a Provider</h2><br>
           <h4 class="left-align indigo-text">Create an Account</h4><br>
		   <a class="waves-effect waves-light btn blue darken-4" href="signupprovider.php"><i class="material-icons right">arrow_forward</i>Sign Up</a><br>
		   <h4 class="left-align indigo-text">For Existing Users</h4><br>
		   <a class="waves-effect waves-light btn blue darken-4" href="loginforproviders.php"><i class="material-icons right">arrow_forward</i>Login</a><br>
		   <br><br><br>
		</div>
		</div> 
		   
		
      </div>
	  
	  
	  <div class="row">
					<div class="about_content wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
					<div class="col s12 m12 l12">
          
					<h4 class="center-align teal-text text-accent-4">Contact Us</h4><br>
					<p class="center-align teal-text">Have questions? You can email us your queries at vaccinefinder@gmail.com. Just click the blue button on the bottom right hand side of the page.</p>
					<br><br><br>
					</div>
					</div> 
		</div>

    </div>
  
  
     <?php include 'components/floatingactionbtn.php';?>
 
    </body>
  </html>
      
	
	
    