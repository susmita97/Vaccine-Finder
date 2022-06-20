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