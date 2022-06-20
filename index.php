<?php include_once "scripts/config.php";?>
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
	
	
    <?php include 'navbar.php';?>

	<?php include 'slider.php';?>
	
  
  
    <div class="section">
	<br><br><br>
      <div class="row">
	    <div class="about_content wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
        <div class="col s12 m6 l6">
          
          <h4 class="green-text text-accent-4">Why is it important to get vaccinated?</h4><br>
           <p class="left-align teal-text">Now that effective vaccines for COVID-19 have been developed and are being distributed to members of the public, it is key for folks to understand the benefits of the COVID-19 vaccines and why they greatly outweigh mild potential side effects or inconvenience that may be associated.

The possibility of serious complications for anyone who gets the virus — along with the public health consequences of the pandemic’s continuing its course — are strong reasons in favor of getting vaccinated. COVID-19 vaccination will help protect you by creating an antibody (immune system) response without having to experience sickness.</p>
		   <br><br><br>
		</div>
		</div> 
		   <div class="col s12 m6 l6">
		   <div class="about_img clearfix wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;">
		   <div class="content">
    
			<div class="content-overlay"></div>
			<img class="responsive-img" style="height :400px;" src="images\vaccine.png">
			<div class="content-details fadeIn-bottom">
				<a onclick="getLocation()" href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/index.html"><h4 class="content-title">Vaccine Information</h4></a>
				<p class="content-text">Know More By Clicking Here</p>
			</div>
		   </div>
		   </div>
		   </div>
		
      </div>

    </div>
  <div class="section">
  <br><br><br>
      <div class="row">
	    <div class="about_content wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
        <div class="col s12 m12 l12">
          
          <h4 class="green-text text-accent-4">Are you a Patient or a Provider?</h4><br>
           <p class="left-align teal-text">If you want to book an appointment and get vaccinated please create an account here first and sign up as a patient. Then next time onwards everytime you log into your account you can see available appointments at a location nearest to you and get vaccinated! </p><br><br><br>
				<div class="center-align row">
					<div class="col s12 offset-m3 m5 offset-l3 l5">
					<div class="card blue-grey darken-1">
					<div class="card-content white-text">
					<span class="card-title">For Patients</span>
					<p>Create an account <br>Or <br>If you are an existing user you can log in<br></p>
					</div>
					<div class="card-action">
					<a class="blue-text" href="signuppatient.php">Sign Up</a>
					<a class="blue-text" href="loginforpatients.php">Login</a>
					</div>
					</div>
					</div>
				</div>
		   <p class="left-align teal-text">For providers who are providing the vaccines at their respective locations and haven't signed up yet can sign up here. </p>
		   		<br><br>
				<div class="center-align row">
					<div class="col s12 offset-m3 m5 offset-l3 l5">
					<div class="card blue-grey darken-1">
					<div class="card-content white-text">
					<span class="card-title">For Providers</span>
					<p>Create an account <br>Or <br>If you are an existing user you can log in<br></p>
					</div>
					<div class="card-action">
					<a class="blue-text" href="signupprovider.php">Sign Up</a>
					<a class="blue-text" href="loginforproviders.php">Login</a>
					</div>
					</div>
					</div>
				</div>
		   
				<div class="row">
					<div class="about_content wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
					<div class="col s12 m12 l12">
          
					<h4 class="green-text text-accent-4">Contact Us</h4><br>
					<p class="left-align teal-text">Have questions? You can email us your queries at vaccinefinder@gmail.com. Just click the blue button on the bottom right hand side of the page.</p>
					<br><br><br>
					</div>
					</div> 
				</div>

		   <br><br>
		</div>
		</div> 
	   </div>
  </div>
  
  
  <p id="demo"></p>
     <?php include 'components/floatingactionbtn.php';?>
	 
	 
     

    
  
	
	
	 
	
    </body>
  </html>
      
	
	
    