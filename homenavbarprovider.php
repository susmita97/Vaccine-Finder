
<nav class="transparent">
    <div class="nav-wrapper teal lighten-2">
     <a href="index.php" class="brand-logo" style="margin-left :10px;"><img class="responsive-img" src="vacf.png"></a>
	<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
     <ul id ="nav-mobile" class="right hide-on-med-and-down">

       <li><a href="homepageproviders.php">Welcome Page</a></li>
       <li><a href="uploadappointment.php">Upload an appointment</a></li>
	   
       <li><a href="logoutproviders.php">Log out</a></li>
       
     </ul>
	</div>
    </nav>
	
	 
    <ul class="sidenav" id="mobile-demo">
      <li><a href="homepageproviders.php">Welcome Page</a></li>
       <li><a href="uploadappointment.php">Upload an appointment</a></li>
	   
       <li><a href="logoutproviders.php">Log out</a></li>
    </ul>
	
	<script>
      $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>