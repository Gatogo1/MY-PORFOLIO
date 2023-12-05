
<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php") ;
 date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');?>

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Edit News 
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
          <h4 >Select Blog type</h4> <br>
        <a href="add_eng.php" type="button" class="btn btn-primary">Engineering</a>
        <a href="add_news.php" type="button" class="btn btn-primary">News</a>

    </div>
</center>


<!-- Small modal -->

<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>
    <h4>Create blog</h4>
             
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Blog Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
      <label for="title">Short Discription</label>
      <input type="text" class="form-control" id="dis" placeholder="Short discription" name="dis" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>



      
    <label class="form-label" for="form6Example2">Select Image 1</label>
<input type="file" class="form-control-file border" name="image">

<input type="hidden" value="<?php echo $current_date ?>" name="date">


        
    <div class="form-group">
    <label for="pwd">category</label>
                   <select class=" form-control w-50"name="cat" id="cat">
                   <option value="">Select Category</option>
                    <option value="Software">Software</option>
                    <option value="Designung">Designing</option>
                    <option value="Security">Security</option>
                 

                    
                   </select>
      </div>



   <?php include("textarea.php") ;?>
    
   


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

	$filename = $_FILES['image']['name'];
    $tittle=addslashes($_POST['title']);
     $dis=addslashes($_POST['dis']);
    $cat=$_POST['cat'];
    $content=addslashes($_POST['content']);
    $date=$_POST['date'];





function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}
$slug= create_slug($tittle);
//returns 'does-this-thing-work-or-not'


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'uploadblog/'.$filename )){
		// Image db insert sql
		$sql = "INSERT INTO `potblog`(  `tittle`,`dis`, `content`, `image`, `category`,`slug`, `date`) VALUES ('$tittle','$dis','$content','$filename','$cat','$slug','$date')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully added a new blog'); window.location='blogs.php'</script>";
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
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