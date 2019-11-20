
<?php include('partials/header.php'); ?>



<!--  -->
<?php include('partials/topnav.php'); ?>
<!--  -->



<!--  -->
<?php include('partials/navbar.php'); ?>


<section>
  <div class="container">
	<div class="Login">
	  <div class="container">
	  	<h2>Login Form</h2>

	  	<dib class="row">
	  		<div class="col-md-6">

	  	<form action="myphp/checklogin.php" method="POST">
          <div class="form-group">
          <label for="email">Email Address:</label>
         <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Address" name="email">
            </div>

          <div class="form-group">
          <label for="password">Password:</label>
         <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password" name="password">
            </div>

          <button type="submit" class="btn btn-primary">Sign in</button>
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