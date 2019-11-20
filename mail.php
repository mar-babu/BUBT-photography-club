
<?php include('partials/header.php'); ?>


<!--  -->
<?php include('partials/topnav.php'); ?>
<!--  -->


<!--  -->
<?php include('partials/navbar.php'); ?>

<section class="container">
	
	  <div class="container">
	  	<div class="ma">
	  		<div class="container">
	  	<h2>Send mail</h2>
	<?php
		if (isset($_POST['sendmail'])) {
			if(mail($_POST['email'], $_POST['subject'] ,$_POST['message'])){
				echo "Mail Sent Succesfully";
			} else {
				echo "failed";
			}
		}
	?>



	  	<div class="row">
	  		<div class="col-sm-9 col-md-offset-2">

	  	<form role="form" method="POST" enctype="multipart/form-data">
	  	<div class="row">
          <div class="col-sm-9 form-group">
          <label for="email">To Email:</label>
         <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="50">
          </div>
		</div>

		<div class="row">
          <div class="col-sm-9 form-group">
          <label for="subject">Subject:</label>
         <input type="text" class="form-control" id="subject" name="subject" placeholder="subject" Address" maxlength="50">
          </div>
		</div>

		<div class="row">
          <div class="col-sm-9 form-group">
          <label for="name">Message:</label>
         <textarea class="form-control" type="textarea" id="message" placeholder="Type Your Message Here" name="message" maxlength="6000" rows="5"></textarea>
            </div>
		</div>

	    <div class="row">        
		<div class="col-sm-9 form-group">
	          <button type="submit" name="sendmail" class="btn btn-lgbtn-success btn-block">Send</button>
	  		</div>	
	  	 </div>
	   </form>
	  </div>	
	</div>
	</div>
	</div>
  </div>
</section>


<?php include('partials/footer.php');?>