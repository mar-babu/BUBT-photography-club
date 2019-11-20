
<?php include('partials/header.php'); ?>



<!--  -->
<?php include('partials/topnav.php'); ?>
<!--  -->
<?php include('partials/navbar.php'); ?>

<?php include('myPhp/connect.php'); ?>


<?php
include 'lib/config.php';
include 'lib/Database.php';
$db = new Database();
?>


<div class="tab">
<section class="gallary">
	<div class="gallaryform">
		<h1 align="center"> Photo Gllery:</h1>

<table class="mid" width="100%">
            <tr align="center">
              <th  width="8%">No.</th>
              <th width="90%"></th>
            </tr>
              <?php
              if (isset($_GET['del'])) {
               $id = $_GET['del'];

               $getquery = "select * from photo_data where id='$id'";
               $getImg = $db->select($getquery);
               if ($getImg) {
                while ($imgdata = $getImg->fetch_assoc()) {
                $delimg = $imgdata['image'];
                unlink($delimg);
                }
               }
               
               $query = "delete from photo_data where id='$id'";
               $delImage = $db->delete($query);
               if ($delImage) {
                 echo "<span class='success'>Image Deleted Successfully.
                 </span>";
                }else {
                 echo "<span class='error'>Image Not Deleted !</span>";
                }
               }
              ?>


              <?php
                 $query = "select * from photo_data";
                 $getImage = $db->select($query);
                 if ($getImage) {
                  $i=0;
                  while ($result = $getImage->fetch_assoc()) {
                  $i++;
                  ?>
                 <tr>
                  <td><?php echo $i; ?></td>
                  <td><img src="<?php echo $result['image']; ?>" height="480px" 
                    width="820px"/></td>
                  
                 </tr>
              <?php } } ?>
    </table>

	</div>
</section>
</div>


<?php include('partials/footer.php'); ?><!--  Footer section -->