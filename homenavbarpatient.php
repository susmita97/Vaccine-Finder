
<nav class="transparent">
    <div class="nav-wrapper teal lighten-2">
     <a href="index.php" class="brand-logo" style="margin-left :10px;"><img class="responsive-img" src="vacf.png"></a>
	<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
     <ul id ="nav-mobile" class="right hide-on-med-and-down">

       <li><a href="homepagepatients.php">Welcome Page</a></li>
       <li><a href="bookappointment.php">Book an appointment</a></li>
	   <li><a href="editpreferences.php">Edit Preferences</a></li>
	   <li><a href="appointmenthistory.php">Appointment History</a></li>
	   <li><a href="uploaddocuments.php">Upload Docs</a></li>
       <li><a href="logoutpatients.php">Log out</a></li>
       
     </ul>
	</div>
    </nav>
	
	 
    <ul class="sidenav" id="mobile-demo">
      <li><a href="homepagepatients.php">Welcome Page</a></li>
       <li><a href="bookappointment.php">Book an appointment</a></li>
	   <li><a href="editpreferences.php">Edit Preferences</a></li>
	   <li><a href="appointmenthistory.php">Appointment History</a></li>
	   <li><a href="uploaddocuments.php">Upload Docs</a></li>
       <li><a href="logoutpatients.php">Log out</a></li>
    </ul>
	
	<script>
      $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>