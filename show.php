
<?php include('partials/header.php'); ?>



<!--  -->
<?php include('partials/topnav.php'); ?>
<!--  -->
<!--  -->
<?php include('partials/navbar.php'); ?>

<?php include("myPhp/connect.php") ?>

<?php 

$s_id = $_REQUEST["s_id"];

$sql = "SELECT * FROM reg WHERE s_id=".$s_id;

$result = $conn->query($sql);


$row = $result->fetch_assoc();

 ?>

<section>
	<div class="container">
		<h1>Single Photographer info</h1>

		<label>Photographer Name:</label>
		<h3> <?php echo $row["username"]; ?> </h3>
		<label>Email:</label>
		<h3> <?php echo $row["email"]; ?> </h3>
		<label>Date of Birth:</label>
		<h3> <?php echo $row["dob"]; ?> </h3>
		<label>Contact No:</label>
		<h3> <?php echo $row["contact"]; ?> </h3>
		<label>Intake:</label>
		<h3> <?php echo $row["intake"]; ?> </h3>
		<label>Department:</label>
		<h3> <?php echo $row["dept"]; ?> </h3>
		<label>Profile link:</label>
		<h3> <?php echo $row["profile_link"]; ?> </h3>
		
	</div>
</section>


<?php include('partials/footer.php'); ?><!--  Footer section -->