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
    <link rel="stylesheet" href="css/style.css">
    <title>about 
</title>

<style>
    .blog-bt{
        margin-top:50px;
    }
    .title {
        color:blue;
    }
</style>
</head>
<body>
    
    
    
    
    
 <!-- Large modal -->
 
 <center>
     <div class="blog-bt">
          <h4 >Update Experience</h4> <br>
   

    </div>
</center>
<div class="">
  <div class="">
    <div class="modal-content bg-light">
    <center>
<?php
  $sql3="select * from potexperience ";
  $result3 = mysqli_query($conn,$sql3)or die( mysqli_error($conn));
    while ($row3=mysqli_fetch_array($result3)) {
                        $data=$row3['id'];
                        $company=$row3['company'];
                        $position=$row3['position'];
                        $start=$row3['start'];
                        $end=$row3['end'];
                        $exp1=$row3['exp1'];
                        $exp2=$row3['exp2'];
                        $exp3=$row3['exp3'];
                        $exp4=$row3['exp4'];
                        $exp5=$row3['exp5'];
                        $exp6=$row3['exp6'];
                        $exp7=$row3['exp7'];
                        $exp8=$row3['exp8'];
                    


    }       
                    ?>
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date("F , Y")  ?>" name="date">
     
      <label for="title">Company Name</label>
      <input type="text" class="form-control" id="title" value="<?php echo $company  ?>" name="company">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Position</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $position  ?>" name="position" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     

    <div class="form-group">
<label class="tittle" for="title">Started Date </label>
          <div class="datepicker date input-group">
            <input type="date" id="start"  value="<?php echo $start ?>" class="form-control" name="start">
           
          </div>
        </div>


        <div class="form-group">
        <label class="tittle" for="title">Ended Date </label>
          <div class="datepicker date input-group">
            <input type="date" id="end"  value="<?php echo $end ?>" class="form-control"  name="end">
           
          </div>
        </div>

        <div class="form-group">
      <label for="title">Responsibiliy 1</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $exp1  ?>" name="exp1" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 2</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $exp2  ?>" name="exp2" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 3</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $exp3  ?>" name="exp3" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 4</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $exp4  ?>" name="exp4" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 5</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $exp5  ?>" name="exp5" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 6</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $exp6  ?>" name="exp6" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 7</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $exp7  ?>" name="exp7" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Responsibiliy 8</label>
      <input type="text" class="form-control" id="title"  value="<?php echo $exp8  ?>" name="exp8" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
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

	$company=$_POST['company'];
    $position=$_POST['position'];
    $start=$_POST['start'];
    $end=$_POST['end'];
  $exp1=$_POST['exp1'];
  $exp2=$_POST['exp2'];
  $exp3=$_POST['exp3'];
  $exp4=$_POST['exp4'];
  $exp5=$_POST['exp5'];
  $exp6=$_POST['exp6'];
  $exp7=$_POST['exp7'];
  $exp8=$_POST['exp8'];
  

  
echo 'submit' .$id2;



		// Image db insert sql
		$sql = "UPDATE potexperience  SET `company`='$company',`position`='$position',`start`='$start',`end`='$end',`exp1`='$exp1',`exp2`='$exp2',`exp3`='$exp3',`exp4`='$exp4',`exp5`='$exp5',`exp6`='$exp6',`exp7`='$exp7',`exp8`='$exp8' WHERE id='$id2'";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully update your experience'); window.location.href='../about_display.php'</script>";
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




    
        


</script>



</body>
</html>