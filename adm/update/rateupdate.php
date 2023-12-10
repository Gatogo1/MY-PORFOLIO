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
    <title>Edit Rate
</title>

<style>
    .blog-bt{
        margin-top:50px;
    }
</style>
</head>
<body>
    
    
    
<?php
  $sql4="select * from potrate where id='$id2' ";
  $result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
    while ($row4=mysqli_fetch_array($result4)) {
        $data=$row4['id'];
        $work=$row4['wcom'];
        $yearsExperience=$row4['yearsExperience'];
        $totalClient=$row4['totalClient'];
        $award=$row4['award'];             
                    


    }       
                    ?>
    
 <!-- Large modal -->
 
 <center>
     <div class="blog-bt">
          <h4 >Edit Rate</h4> <br>
   

    </div>
</center>
<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>

   
    <form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Total Work completed</label>
      <input type="number" class="form-control" id="title" value="<?php echo $work  ?>" name="work" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Years Of experience</label>
      <input type="number" class="form-control" id="title"  value="<?php echo $yearsExperience  ?>" name="exp">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     

    <div class="form-group">
<label class="tittle" for="title">Total Client</label>
          <div class="datepicker date input-group">
            <input type="number"  value="<?php echo $totalClient  ?>" class="form-control" name="client">
           
          </div>

          
    <div class="form-group">
<label class="tittle" for="title">Total Award</label>
          <div class="datepicker date input-group">
            <input type="number"  value="<?php echo $award  ?>" class="form-control" name="award">
           
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

    $work=$_POST['work'];
    $exp=$_POST['exp'];
    $award=$_POST['award'];
    $client=$_POST['client'];

  




		// Image db insert sql
		$sql = "UPDATE `potrate` SET `wcom`='$work',`yearsExperience`='$yearsExperience',`totalClient`='$client',`award`='$award' WHERE id='$id2'";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully edited your Ratings  '); window.location='../about_display.php'</script>";
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