<?php 
include('../conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);


}
      ?>
<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php") ;?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Upload CV
</title>

<style>
    .blog-bt{
        margin-top:50px;
    }
</style>
</head>
<body>
    
    
    
    
    
 <!-- Large modal -->
 
 <center>
     <div class="blog-bt">
          <h4 >Uplaod CV</h4> <br>
   

    </div>
</center>
<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>

   
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
  

    <label class="form-label" for="form6Example2">Select Header Image </label>
<input type="file" class="form-control-file border" name="image"> 

   
<!-- Sign in button -->
<button class="btn btn-success mt-2  btn-block" name="submit" type="submit">Submit</button>


    </div>
    
</form>
</center>
    </div>
  </div>
</div>



<?php 


include('conn.php');


if(isset($_POST['submit'])){
    $filename = $_FILES['image']['name'];
	
 
   


  


	// Upload files and store in database
// Select file type
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","pdf");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image"]["tmp_name"],'uploadcv/'.$filename )){

		$sql="UPDATE `portfolio` SET `cv`='$filename' WHERE id='$id2'";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('You Have Successfully Uploaded Your CV'); window.location='about_display.php'</script>";
        }
      echo"<script>alert('You Have Successfully Uploaded Your CV'); window.location='about_display.php'</script>";
		
	
}else{
    echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
} }
}

?>



</center>
<!-- Default form subscription --> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>




    
        

<script>


    var start = document.getElementById('start');
var end = document.getElementById('end');

start.addEventListener('change', function() {
    if (start.value)
        end.min = start.value;
}, false);
end.addEventLiseter('change', function() {
    if (end.value)
        start.max = end.value;
}, false);

</script>



</body>
</html>