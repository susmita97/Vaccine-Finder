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

	
	<?php include 'patientform.php';?>
	<?php include 'patientformscript.php';?>
  
  
    
	  
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
 
 <script>
	  
		$(document).ready(function(){
		$('#dateofbirth').datepicker();
		$('#dateofbirth').setDate(new Date());
		});
	  
	  </script>
     
 
 
 
    </body>
  </html>
      
	
	
    