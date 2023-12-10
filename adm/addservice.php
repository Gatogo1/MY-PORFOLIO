
<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php") ;?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>about 
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
          <h4 >Add Services</h4> <br>
    </div>
</center>
<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>

   
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
  
     
      <label for="title">Services Name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter your service name" name="service" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
<label class="tittle" for="title">Discription</label>
          <div class="datepicker date input-group">
            <input type="text" id="start" placeholder="Discription" class="form-control" name="dis" required>
           
          </div>
        </div>

        <div class="form-group">
<label class="tittle" for="title">fa fa Icon</label>
          <div class="datepicker date input-group">
            <input type="text" id="start" placeholder="Paste a fa icon here" class="form-control" name="fa">
           
          </div>
        </div>

   
<!-- Sign in button -->
<button class="btn btn-success   btn-block" name="submit" type="submit">Submit</button>


    </div>
    
</form>
</center>
    </div>
  </div>
</div>



<?php 


include('conn.php');


if(isset($_POST['submit'])){

	$service=$_POST['service'];
    $dis=$_POST['dis'];
    $fa=$_POST['fa'];
   


  




		// Image db insert sql
		$sql = "INSERT INTO `potservice`( `service`, `dis`, `fa`) VALUES ('$service','$dis','$fa')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully added a new Services'); window.location='about_display.php'</script>";
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	
	
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