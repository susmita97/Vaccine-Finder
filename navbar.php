
<nav class="transparent">
    <div class="nav-wrapper teal lighten-2">
     <a href="index.php" class="brand-logo" style="margin-left :10px;"><img class="responsive-img" src="vacf.png"></a>
	<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
     <ul id ="nav-mobile" class="right hide-on-med-and-down">

       <li><a href="index.php">Home</a></li>
       <li><a href="forpatients.php">For Patients</a></li>
       <li><a href="forproviders.php">For Providers</a></li>
       <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/index.html">Official Resources</a></li>
     </ul>
	</div>
    </nav>
	
	 
    <ul class="sidenav" id="mobile-demo">
      <li><a href="index.php">Home</a></li>
      <li><a href="forpatients.php">For Patients</a></li>
      <li><a href="forproviders.php">For Providers</a></li>
	  <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/index.html">Official Resources</a></li>
    </ul>
	
	<script>
      $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>