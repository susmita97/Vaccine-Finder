<?php

session_start();
 

if(isset($_SESSION["loggedinp"]) && $_SESSION["loggedinp"] === true){
  header("location: homepageproviders.php");
  exit;
}
 

include_once "scripts/config.php";
 

$sub_email = $sub_password = "";
$sub_email_err = $sub_password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    if(empty(trim($_POST["sub_email"]))){
        $sub_email_err = "Please enter your email.";
    } else{
        $sub_email = mysqli_real_escape_string($conn,trim($_POST["sub_email"]));
    }
    
    
    if(empty(trim($_POST["sub_password"]))){
        $sub_password_err = "Please enter your password.";
    } else{
        $sub_password = mysqli_real_escape_string($conn,trim($_POST["sub_password"]));
    }
    
    
    if(empty($sub_email_err) && empty($sub_password_err)){
        echo "<script>alert('please fill all the fields')</script>";
		
        $sql = "select provider_id,pemail,passwd from providers where pemail = ? and passwd = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            
            
			
			
			mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
            
			$param_email = $sub_email;
			$param_password = md5('hashkeyvalue'.$sub_password);
			//Please store hashed passwords
            
            
            
            
            if(mysqli_stmt_execute($stmt)){
                
				
				
                mysqli_stmt_store_result($stmt);
              
                    if(mysqli_stmt_num_rows($stmt)==1){                    
                    
					//echo "<script>alert('please fill all the fields')</script>";
					echo "<script>alert('please fill all the fields $sub_email $sub_password')</script>";

                    mysqli_stmt_bind_result($stmt, $provider_id, $pemail, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        
                            
							

                            session_start();
                            
                            
                            $_SESSION["loggedinp"] = true;
                            $_SESSION["provider_id"] = $provider_id;
                            $_SESSION["pemail"] = $pemail;                            
                            $sql2="insert into sessions_providers(pro_id,logged_in_at) values('$provider_id',CURRENT_TIMESTAMP)";
							if(mysqli_query($conn, $sql2)){
								echo "<script>alert('please fill all the fields $provider_id')</script>";
							} 
							else{
								echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
							} 
                             header("location: homepageproviders.php");                   }
                } else{
                    
                    $username_err = "Username or password invalid";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        
        mysqli_stmt_close($stmt);
    }
    
    
    mysqli_close($conn);
}
?>










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
          
          <h2 class="teal-text text-accent-4">For Providers</h2><br>
          
		   <h4 class="left-align teal-text">Enter your email and password</h4><br>
		   <div>
  
	  <br>
	<div class="col m10 l10 s12">
<div class="contact hideform white">

<div class="container">
    <div class="row">
        
            
            <div class="row">
                <form class="col m12 s12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="sub_email">
                            <label for="email" class="black-text">Email</label>
							<span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>
						<div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="sub_password">
                            <label for="password" class="black-text">Password</label>
							<span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>
						
                    </div>
                    
                    
                    <div class="row">
                        <div class="col m12">
                         <p class="left-align"><button class="btn btn-large waves-effect waves-light center" type="submit" name="submit">Login</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
		   
		    <h4 class="left-align teal-text">Don't have an account? Create One.</h4><br>
		   <a class="waves-effect waves-light btn" href="signupprovider.php"><i class="material-icons right">arrow_forward</i>Sign Up</a><br>
		   
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
      
	
	
    