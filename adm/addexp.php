
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
          <h4 >Add Experience</h4> <br>
   

    </div>
</center>
<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>

   
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Company Name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter the Company name" name="company" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Position</label>
      <input type="text" class="form-control" id="title" placeholder="Enter position" name="position" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     

    <div class="form-group">
<label class="tittle" for="title">Started Date </label>
          <div class="datepicker date input-group">
            <input type="date" id="start" placeholder="Choose Date" class="form-control" name="start">
           
          </div>
        </div>


        <div class="form-group">
        <label class="tittle" for="title">Ended Date </label>
          <div class="datepicker date input-group">
            <input type="date" id="end" placeholder="Choose Date" class="form-control"  name="end">
           
          </div>
        </div>

</div>

    <div class="form-group">
      <label for="title">Responsibiliy 1</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Enater Responsibilities" name="exp1" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 2</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Enater Responsibilities" name="exp2" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 3</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Enater Responsibilities" name="exp3" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 4</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Enater Responsibilities" name="exp4" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 5</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Enater Responsibilities" name="exp5" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 6</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Enater Responsibilities" name="exp6" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 7</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Enater Responsibilities" name="exp7" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 8</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Enater Responsibilities" name="exp8" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   
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


include('conn.php');


if(isset($_POST['submit'])){

	$company=$_POST['company'];
    $position=$_POST['position'];
    $startdate=$_POST['start'];
    $enddate=$_POST['end'];
  $responsi1=$_POST['exp1'];
  $responsi2=$_POST['exp2'];
  $responsi3=$_POST['exp3'];
  $responsi4=$_POST['exp4'];
  $responsi5=$_POST['exp5'];
  $responsi6=$_POST['exp6'];
  $responsi7=$_POST['exp7'];
  $responsi8=$_POST['exp8'];
  

  




		// Image db insert sql
		$sql = "INSERT INTO `potexperience`( `company`,`position`, `start`, `end`, `exp1`, `exp2`, `exp3`, `exp4`, `exp5`, `exp6`, `exp7`, `exp8`) VALUES ('$company','$position','$startdate','$enddate','$responsi1','$responsi2','$responsi3','$responsi4','$responsi5','$responsi6','$responsi7','$responsi8')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully added a new experience); window.location='about_display.php.php'</script>";
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