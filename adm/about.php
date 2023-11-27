
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
          <h4 >About Section</h4> <br>
   

    </div>
</center>
<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>

   
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Username</label>
      <input type="text" class="form-control" id="title" placeholder="Enter your fullname" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">email</label>
      <input type="email" class="form-control" id="title" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
    <div class="form-group">
      <label for="title">Phone-number</label>
      <input type="text" class="form-control" id="title" placeholder="Enter number" name="number" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="title">Location</label>
      <input type="text" class="form-control" id="title" placeholder="Enter your location here " name="location">
     
    </div>
    <div class="form-group">
      <label for="title">Facebook link</label>
      <input type="text" class="form-control" id="title" placeholder="Enter your facebook link here" name="fb" >
     
    </div>

    <div class="form-group">
      <label for="title">Linkedin link</label>
      <input type="text" class="form-control" id="title" placeholder="Enter your Linkedin link here" name="lk" >
     
    </div>

    <div class="form-group">
      <label for="title">Github link</label>
      <input type="text" class="form-control" id="title" placeholder="Enter your github link here" name="git">
     
    </div>
     
      <label for="title">about you</label>
      <textarea value="3" style="font-size: 20px"  class="form-control" rows="8"  id="summernote"   name="about"></textarea>


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
	$username=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $location=$_POST['location'];
  $fb=$_POST['fb'];
  $lk=$_POST['lk'];
  $git=$_POST['git'];
  $about=$_POST['about'];





		// Image db insert sql
		$sql = "INSERT INTO `portfolio`( `username`, `email`, `contact`, `about`,  `facebook`, `linkedin`, `github`, `location`) VALUES ('$username','$email','$number','$about','$fb','$lk','$git','$location')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully added your profile); window.location='profile.php'</script>";
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
        $('#summernote').summernote({
       
        tabsize: 4,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
            </script>

<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
    
        





</body>
</html>