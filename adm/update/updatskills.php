<?php 
include('../conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);


}
      ?>
<!DOCTYPE html>
<html lang="en">
<?php include("../common/head.php") ;?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Edit Skills 
</title>

<style>
    .blog-bt{
        margin-top:50px;
    }
</style>
</head>
<body>
    
    
    
<?php
  $sql4="select * from potskills where id='$id2' ";
  $result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
    while ($row4=mysqli_fetch_array($result4)) {
        $data=$row4['id'];
        $skills=$row4['skills'];
        $percent=$row4['percent'];
        $dis=$row4['dis'];               
                    


    }       
                    ?>
    
 <!-- Large modal -->
 
 <center>
     <div class="blog-bt">
          <h4 >Edit Skills</h4> <br>
   

    </div>
</center>
<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>

   
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Skills Name</label>
      <input type="text" class="form-control" id="title" value="<?php echo $skills?>" name="skills" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Percentage</label>
      <input type="number" class="form-control" id="title" value="<?php echo $percent?>" name="percent">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     

    <div class="form-group">
<label class="tittle" for="title">Discription</label>
          <div class="datepicker date input-group">
            <input type="text" id="start" value="<?php echo $dis?>" class="form-control" name="dis">
           
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


include('../conn.php');


if(isset($_POST['submit'])){

	$skills=$_POST['skills'];
    $percent=$_POST['percent'];
    $dis=$_POST['dis'];
   


  




		// Image db insert sql
		$sql = "UPDATE `potskills` SET`skills`='$skills',`percent`='$percent',`dis`='$dis' WHERE id='$id2'";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully edited your skills'); window.location='../about_display.php'</script>";
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




    
        





</body>
</html>