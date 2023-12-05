<?php 

include('../conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);
$sql= "DELETE FROM  `project` WHERE projectId='$id2'";
$sql1= "DELETE FROM  `proimage` WHERE proid='$id2'";

$result=$conn->query($sql);
if ($result==TRUE) {
    echo"<script>alert('Deleted Successfully added ');  window.location.href='../project.php '</script>";
  
}
else{
    echo"not deleted";
    echo $id2;
}

}


      
      ?>