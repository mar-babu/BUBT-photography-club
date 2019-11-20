
<?php include('partials/header.php'); ?>

<!--  -->
<?php include('partials/topnav.php'); ?>
<!--  -->
<!--  -->
<?php include('partials/navbar.php'); ?>

<?php
include 'lib/config.php';
include 'lib/Database.php';
$db = new Database();
?>

<div class="phpcoding">
 <section class="headeroption">
  <h2 align="center">You Can Share your Photograph</h2>
 </section>

 <section class="container">
 <div class="myform">

      <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $permited  = array('jpg', 'jpeg', 'png', 'gif');
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $file_temp = $_FILES['image']['tmp_name'];

          $div = explode('.', $file_name);
          $file_ext = strtolower(end($div));
          $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
          $uploaded_image = "uploads/".$unique_image;

          if (empty($file_name)) {
           echo "<span class='error'>Please Select any Image !</span>";
          }elseif ($file_size >1073741824) {
           echo "<span class='error'>Image Size should be less then 3MB!
           </span>";
          } elseif (in_array($file_ext, $permited) === false) {
           echo "<span class='error'>You can upload only:-"
           .implode(', ', $permited)."</span>";
          } else{
          move_uploaded_file($file_temp, $uploaded_image);
                $photo_name = $_POST["photo_name"];
                $photographer = $_POST["photographer"];
                $type = $_POST["type"];
                
          $query = "INSERT INTO photo_data(`photo_name`, `image`, `photographer`,`type`) 
          VALUES('$photo_name', '$uploaded_image', '$photographer','$type')";
          $inserted_rows = $db->insert($query);
          if ($inserted_rows) {
           echo "<span class='success'>Image Inserted Successfully.
           </span>";
          }else {
           echo "<span class='error'>Image Not Inserted !</span>";
          }
          }
         }
        ?>


  <form action="" method="post" enctype="multipart/form-data">

<div class="container">
    <div class="row">
          <div class="col-sm-9 form-group">
          <label for="photo_name">Photo name:</label>
         <input type="text" class="form-control" name="photo_name" placeholder="Photo Caption">
          </div>
    </div>

    <div class="row">
          <div class="col-sm-9 form-group">
          <label for="image">Select image:</label>
         <input type="file" class="form-control" name="image">
          </div>
    </div>

    <div class="row">
          <div class="col-sm-9 form-group">
          <label for="photographer">Photographer:</label>
         <input type="text" class="form-control" name="photographer_name" placeholder="Photographer Name">
          </div>
    </div>

    <div class="row">
          <div class="col-sm-9 form-group">
          <label for="category_name">Category:</label>
         <input type="text" class="form-control" name="type" placeholder="Category Name">
          </div>
    </div>


    <div class="row">
          <div class="col-sm-9 form-group">
         <input type="submit" name="submit" value="upload">
          </div>
    </div>

  </form>

    <table width="100%">
            <tr>
              <th width="30%">NO.</th>
              <th width="90%">Image</th>
              <th width="30%">Action</th>
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
                  <td><img src="<?php echo $result['image']; ?>" height="70px" 
                    width="90px"/></td>
                  <td><a href="?del=<?php echo $result['id']; ?>">Delete</a></td>
                 </tr>
              <?php } } ?>
    </table>
 </div>

</div>
</section>

<?php include('partials/footer.php'); ?>