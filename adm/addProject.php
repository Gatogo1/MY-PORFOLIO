
<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php") ;?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Edit News 
</title>

<style>
    .blog-bt{
        margin-top:200px;
    }
</style>
</head>
<body>
    
    
    
    
    
 <!-- Large modal -->
 
    <center>

    <h4>Add new project</h4>    
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">project Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     


      <div class="form-group">
    <label for="pwd">category</label>
                   <select class=" form-control w-50"name="type" id="cat">
                   <option value="">Select Category</option>
                    <option value="Web Design">Web Design</option>
                    <option value="Software Development">Software Development</option>
                    <option value="Mobile App">Mobile App</option>
                    <option value="Graphic Designing">Graphic Designing</option>            
                   </select>
      </div>



      <label class="form-label" for="form6Example2">Select Image </label>
<input type="file" class="form-control-file border" name="image"> 

      <label for="title">  Project Date</label>
      <input type="date" class="form-control mb-2" id="title" name="date" required>
      


<label for="title"> link to project </label>
      <input type="text" class="form-control mb-2" id="title" placeholder="Enter link " name="link" required>

      <label for="title">Short Discription</label>
      <textarea  value="3" style="font-size: 20px"  class="form-control" rows="4"  id="summernote"   name="dis"></textarea>
<?php 

include('conn.php');
 $sql="select * from project   order by id desc";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
$row=mysqli_fetch_array($result) ;

  if (empty($row['id'])) {

$ids='';
  }else {
    $ids=$row['id']+6;
  }
  
 
 echo $ids



?>


<input type="hidden" name="proid" value="<?php echo $ids?>">


<!-- Sign in button -->
<button class="btn btn-success mt-2   btn-block" name="submit" type="submit">Submit</button>


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
     $dis=$_POST['dis'];
     $proid=$_POST['proid'];
    $date=$_POST['date'];
     $link=$_POST['link'];
     $type=$_POST['type'];

	
 
	// Check extension
	
  $id2=urlencode(base64_encode($ids));
	// Upload files and store in database
// Select file type
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image"]["tmp_name"],'uploadpro/'.$filename )){
		// Image db insert sql
		$sql = "INSERT INTO `project`(`projectId`, `tittle`, `dis`,`image`, `type`,`date`, `link`) VALUES ('$proid','$tittle','$dis','$date','$image','$type','$link')";
		if(mysqli_query($conn,$sql)){

      echo"<script>alert('Add three project images'); window.location.href='project.php'</script>";
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



        





</body>
</html>