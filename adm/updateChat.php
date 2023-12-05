<?php 

include('conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);


if (isset($id2)) {
    $status='1';

    
    $sql = "UPDATE potmassage SET status='$status' WHERE id='$id2' ";
    $query_run = mysqli_query($conn, $sql);
        
        
    if($query_run){
        header("location:chat");
    }
    }
}
      ?>