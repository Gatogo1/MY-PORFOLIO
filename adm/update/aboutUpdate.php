<?php 
include('../conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);



      ?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include('../common/head.php') ?>
        <title>Update-about</title>
      </head>
      <body>
         <!-- Large modal -->
 

         <?php

      

$sql="select * from portfolio where id='$id2'";
$result = mysqli_query($conn,$sql)or die( mysqli_error($conn));


while ($row=mysqli_fetch_array($result)) {
 $data=$row['id'];
 $about=$row['about'];
   $username=$row['username'];
   $image=$row['image'];
    $email=$row['email'];
    $contact=$row['contact'];
    $location=$row['location'];
    $fb=$row['facebook'];
    $lk=$row['linkedin'];
    $git=$row['github'];
    $whatsapp=$row['whatsapp'];
 $link="update/aboutUpdate.php?id=".urlencode(base64_encode($data));
}
 ?>
 <center>
     <div class="blog-bt">
          <h4 >About Update</h4> <br>
   

    </div>
</center>
<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>

   
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-50 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Username</label>
      <input type="text" class="form-control" id="title" value="<?php echo $username ?>" name="name">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <label class="form-label" for="form6Example2">Select profile Image </label>
<input type="file" class="form-control-file border" name="image"> 

    <div class="form-group">
      <label for="title">email</label>
      <input type="email" class="form-control" id="title" value="<?php echo $email ?>" name="email" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
    <div class="form-group">
      <label for="title">Phone-number</label>
      <input type="text" class="form-control" id="title" value="<?php echo $contact ?>"name="number" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="title">Location</label>
      <input type="text" class="form-control" id="title" value="<?php echo $location ?>" name="location">
     
    </div>
    <div class="form-group">
      <label for="title">Facebook link</label>
      <input type="text" class="form-control" id="title" value="<?php echo $fb ?>" name="fb" >
     
    </div>

    <div class="form-group">
      <label for="title">Linkedin link</label>
      <input type="text" class="form-control" id="title" value="<?php echo $lk ?>" name="lk" >
     
    </div>

    <div class="form-group">
      <label for="title">Github link</label>
      <input type="text" class="form-control" id="title"value="<?php echo $git ?>" name="git">
     
    </div>

    <div class="form-group">
      <label for="title">whatsapp Number</label>
      <input type="text" class="form-control" id="title" value="<?php echo $whatsapp ?>" name="whatsapp">
     
    </div>
     
      <label for="title">about you</label>
      <textarea value="3" style="font-size: 20px"  class="form-control" rows="4"  id="summernote"   name="about"><?php echo $about ?></textarea>


<!-- Sign in button -->
<button class="btn btn-success   btn-block" name="submit" type="submit">Submit</button>
 <button type="button" class="btn btn-secondary mt-2" data-dismiss="modal">Close</button>

    </div>
    
</form>
</center>
    </div>
  </div>
</div>


<?php    

include('../conn.php');


if(isset($_POST['submit'])){
	$username=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $location=$_POST['location'];
  $fb=$_POST['fb'];
  $lk=$_POST['lk'];
  $git=$_POST['git'];
  $whatsapp=$_POST['whatsapp'];
  $about=$_POST['about'];


    $sql = "UPDATE portfolio SET `username`='$username',`email`='$email',`contact`='$contact',`about`='$about',`facebook`='$fb',`linkedin`='$lk',`github`='$git',`whatsapp`='$whatsapp',`location`='$location'  WHERE id='$id2' ";
    $query_run = mysqli_query($conn, $sql);
        
        
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('You Have Successfully Updated your profile'); window.location='../about_display.php'</script>";
    }
}else {

    echo 'Error: '.mysqli_error($conn);
    # code...
}
}


?>
      </body>
      </html>