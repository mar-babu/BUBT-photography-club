

<?php include("connect.php"); ?>



<?php 


$username=$_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$dob = $_POST["dob"];
$contact = $_POST["contact"];
$intake = $_POST["intake"];
$dept = $_POST["dept"];
$profile_link = $_POST["profile_link"];




$qur = "INSERT INTO `reg`(`username`, `email`, `password`, `dob`, `contact`, `intake`, `dept`, `profile_link`) VALUES ('".$username."', '".$email."', '".$password."','".$dob."', '".$contact."', '".$intake."','".$dept."', '".$profile_link."')";







if ($conn->query($qur) === TRUE) {

	$_SESION["mas"] = "data insert successfully!!!";
	header(`location: ../registration.php`);
    echo "Your record created successfully";

} else {
	$_SESION["mas"] = "Error: " . $qur . "<br>" . $conn->error;
	header(`location: ../registration.php`);
    
}

$conn->close();



 ?>
