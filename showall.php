
<?php include('partials/header.php'); ?>



<!--  -->
<?php include('partials/topnav.php'); ?>
<!--  -->



<!--  -->
<?php include('partials/navbar.php'); ?>

<?php include('myPhp/connect.php'); ?>

<?php 
	
	$sql = "SELECT * FROM reg";

	$result = $conn->query($sql);
?>



<section class="container">
	<div class="container">
		<h1> Photographer list:</h1>

		<table width="70%;" class="table table-bordered table-hover" >
		  <thead>
		    <tr>
		      <th scope="col">SL No</th>
		      <th scope="col">Photographer Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Date of Birth</th>
		      <th scope="col">Contact No</th>
		      <th scope="col">Intake</th>
		      <th scope="col">Department</th>
		      <th scope="col">Profile link</th>
		    </tr>
		  </thead>
		  <tbody>

		  	<?php
		  		$i = 0;
				if($result->num_rows > 0){
					While($row = $result->fetch_assoc()){
				
			?>

			<tr>
		      <th> <?php $i++; echo $i; ?> </th>
		      <td> <?php echo $row["username"]; ?> </td>
		      <td> <?php echo $row["email"]; ?> </td>
		      <td> <?php echo $row["dob"]; ?> </td>
		      <td> <?php echo $row["contact"]; ?> </td>
		      <td> <?php echo $row["intake"]; ?> </td>
		      <td> <?php echo $row["email"]; ?> </td>
		      <td> <?php echo $row["profile_link"]; ?> </td>
		      <td>
		      	<a type="button" class="btn btn-primary btn-sm" href="show.php?s_id=<?php echo $row["s_id"];?>">Show</a>
		      </td>
		    </tr>

			<?php


					}
				}

			?>


		    
		    
		  </tbody>
		</table>

	</div>
</section>


<?php include('partials/footer.php'); ?><!--  Footer section -->