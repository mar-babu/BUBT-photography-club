
<?php include('partials/header.php'); ?>



<!--  -->
<?php include('partials/topnav.php'); ?>
<!--  -->



<!--  -->
<?php include('partials/navbar.php'); ?>


<section>
  <div class="container">
	<div class="reg-form">
	  <div class="container">
	  	<h2>Registration Form</h2>

	  	<dib class="row">
	  		<div class="col-md-6">

	  	<form action="myphp/save.php" method="POST">
          <div class="form-group">
          <label for="username">Photographer Name:</label>
         <input type="text" class="form-control" id="username" placeholder="Photographer Name" name="username">
            </div>

          <div class="form-group">
          <label for="email">Email:</label>
         <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
            </div>

        <div class="form-group">
          <label for="password">Password:</label>
         <input type="password" class="form-control" id="password"  placeholder="Password" name="password">
            </div>

          <div class="form-group">
          <label for="dob">Date of Birth:</label>
         <input type="Date" class="form-control" id="dob" name="dob">
            </div>

          <div class="form-group">
          <label for="contact">Contact No:</label>
         <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact">
            </div>




          <div class="form-group">
          <label for="intake">Intake:</label>
         <input type="text" class="form-control" id="intake" placeholder="Intake" name="intake">
            </div>

          <div class="form-group">
          <label for="dept">Department:</label>
         <input type="text" class="form-control" id="Department" placeholder="Department" name="dept">
            </div>

          <div class="form-group">
          <label for="profile_link">Profile link:</label>
         <input type="profile_link" class="form-control" id="profile_link" placeholder="Profile_link" name="profile_link">
            </div>



          <button type="submit" class="btn btn-primary">Submit</button>
           </form>
	  		</div>
	  	    <div class="col-md-6">
	  	    	
	  	    </div>

	  	</dib>	
	</div>
	</div>
</div>
</section>


<?php include('partials/footer.php'); ?>