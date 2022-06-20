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

<div class="teal accent-4">
  
	  <br><br><br>
	<div class="col m10 offset-m1 l10 offset-l1 s12">
<div class="contact hideform white">

<div class="container">
    <div class="row">
        
            <h2 class="center">Create Your Account</h2>
            <div class="row">
                <form class="col m8 offset-m2 s12" action="#" method="post" enctype="multipart/form-data" onSubmit="return formValidation();">
                    <div class="row">
                        
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="sub_email" required>
                            <label for="email" class="black-text">Email</label>
							
                        </div>
						<div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="sub_password" required>
                            <label for="password" class="black-text">Password</label>
							
                        </div>
						<div class="input-field col s12">
                            <input id="confirmpassword" type="password" class="validate" name="sub_confirmpassword" required>
                            <label for="confirmpassword" class="black-text">Confirm Password</label>
							
                        </div>
						<div class="input-field col s12">
                            <input id="name" type="text" name="sub_name" required>
                            <label for="name" class="black-text">Full Name</label>
                        </div>
						<div class="input-field col s12">
                            <input id="ssn" type="text" name="sub_ssn" required>
                            <label for="ssn" class="black-text">Social Security Number</label>
                        </div>
						<div class="input-field col s12">
                            <input id="dateofbirth" type="text" class="validate" name="sub_dateofbirth" required>
                            <label for="dateofbirth" class="datepicker black-text">Date of Birth</label>
							
                        </div>
						<div class="input-field col s12">
                            <input id="address" type="text" name="sub_address" required>
                            <label for="address" class="black-text">Address</label>
                        </div>
						<div class="input-field col s12">
                            <input id="mobile" type="tel" name="sub_mobile" class="validate" required>
                            <label for="mobile" class="black-text">Mobile Number</label>
							
                        </div>
						<h6>Enter the maximum distance you are willing to travel to get the vaccine. We'll try to find the vaccine providers that are nearest to you.</h6>
                        <div class="input-field col s12">
                            <input id="maxdistance" type="text" name="sub_maxdistance" required>
                            <label for="maxdistance" class="black-text">Enter distance</label>
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

<script>
function formValidation()
{

var sub_email = document.patientform.sub_email;
var sub_name = document.patientform.sub_name;
var sub_password = document.patientform.sub_password;
var sub_confirmpassword = document.patientform.sub_confirmpassword;
var sub_ssn = document.patientform.sub_ssn;
var sub_address = document.patientform.sub_address;


var sub_mobile = document.patientform.sub_mobile;
var sub_maxdistance = document.patientform.sub_maxdistance;


if(allLetter(sub_name))
{
if(alphanumeric(sub_address))
{
if(passid_validation(sub_password,5,12))
{
if(passid_validation(sub_confirmpassword,5,12))
{
if(ValidateEmail(sub_email))
{
if(allnumeric(sub_maxdistance))
{
if(allnumeric(sub_ssn))
{
if(allnumeric(sub_mobile))
{
}
}
}
} 
}
}
} 
}



return false;

} 

function passid_validation(passid,mx,my)
{
var passid_len = sub_password.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('This field must have alphabet characters only');
uname.focus();
return false;
}
}
function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}

function allnumeric(uzip)
{ 
var numbers = /^[0-9]+$/;
var x=0;
if(uzip.value.match(numbers))
{
	x++;
}
if(x==0)
{
alert('This field must have numeric characters only');
uzip.focus();
return false;
}
else
{
//alert('Form Succesfully Submitted');
//window.location.href="homepagepatients.php"
return true;
}
}
function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
} 
</script>
