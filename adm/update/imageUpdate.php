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

    <label class="form-label" for="form6Example2">Select profile Image </label>
<input type="file" class="form-control-file border" name="image"> 

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
	$filename = $_FILES['image']['name'];
 

	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'../user_pic/'.$filename )){

    $sql = "UPDATE portfolio SET`image`='$filename'  WHERE id='$id2' ";
    $query_run = mysqli_query($conn, $sql);
        
        
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('You Have Successfully Updated your profile'); window.location='../about_display.php'</script>";
    }
}else {

    echo 'Error: '.mysqli_error($conn);
    # code...
}


    }
    else{
        echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
    }
}
}



?>
      </body>
      </html>