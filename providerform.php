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





<div class="indigo">
  
	  <br><br><br>
	<div class="col m10 offset-m1 l10 offset-l1 s12">
<div class="contact hideform white">

<div class="container">
    <div class="row">
        
            <h2 class="center">Create Your Account</h2>
            <div class="row">
                <form class="col m8 offset-m2 s12" action="signupprovider.php" method="post" enctype="multipart/form-data" onSubmit="return formValidation();">
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
						<div class="input-field col s12">
                            <input id="confirmpassword" type="password" class="validate" name="sub_confirmpassword">
                            <label for="confirmpassword" class="black-text">Confirm Password</label>
							<span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>
						<div class="input-field col s12">
                            <input id="name" type="text" name="sub_name">
                            <label for="name" class="black-text">Name</label>
                        </div>
						
						<div class="input-field col s12">
                            <input id="mobile" type="tel" name="sub_mobile" class="validate">
                            <label for="mobile" class="black-text">Mobile Number</label>
							<span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>
						<div class="input-field col s12">
                            <input id="address" type="text" name="sub_address">
                            <label for="address" class="black-text">Address</label>
                        </div>
						
						<h6>Enter the type of provider location you are that for example, a hospital, a pharmacy, a clinic, a doctor, etc.</h6>
                        <div class="input-field col s12">
                            <input id="providertype" type="text" name="sub_providertype">
                            <label for="providertype" class="black-text">Provider Type</label>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col m12">
                         <p class="right-align"><button class="btn btn-large waves-effect waves-light center" type="submit" name="submit">Submit</button></p>
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