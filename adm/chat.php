<!DOCTYPE html>
<html lang="en">
<?php include('common/head.php')?>
    <style>
        ul li{
            display: inline-block;
            margin-left: 10px;
        }

        .me{
            align: right;
            border-raduis:20px;
        }
        
    </style>

<body>



        <div class="row  w-25 border">
          
            <div class="user p-2 m-2">
                <div class="text-center"><p>massages</p></div>
                
<?php
$now=date('l jS \of F Y h:i:s A');

include('conn.php');
                                   $sql4 = "select * from potmassage ";
                                   $result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
                                   while ($row4=mysqli_fetch_array($result4)) {

$id= $row4['id'];
$name= $row4['name'];
$email= $row4['email'];
$date= $row4['date'];
$massage= $row4['massage'];
$status= $row4['status'];
$subject= $row4['subject'];

if ($status=='1') {
$color='green';
}
else {
  $color='red';
}
$link="updateChat.php?id=".urlencode(base64_encode($id));

                                 ?>
                <div class="row">
                    <div class="col-12  ">
                        <div style="width: 400px;" class="row border m-1">
                            <div class="col-sm-8"><p style="font-size: 20px;"><?php echo $row4['name']?> <span style=" font-size:10px; background-color:<?php echo $color?>; color:white;"  class="rounded text-center ">seen</span></p></div>
                        <div class="col-sm-4"><span style="font-size:10px;"><?php echo $row4['date']?></span></div>
                        <div class="col-sm-12 m-0"><p>Email: <?php echo $row4['email']?></p></div>
                        <div class="col-sm-12"><p>Subject:<?php echo $subject?></p></div>
                        <button type="button" class="btn btn-primary  btn-sm m-2" data-toggle="modal" data-target="#exampleModal">
                            View 
                          </button>

                       
                        
                        </div>
                        
                    </div>
              
                </div>



 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Massages</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="username">
            <ul><li><?php echo $name?></li>
                <li><?php echo $date?></li>
                <li><?php echo $email?></li>
            </ul>
            <hr>
         
                <div class="sender col-6">
                    <p style="font-size: 20px;"><?php echo $massage?></p>
                </div>
        
          
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="mailto:<?php echo $email?>" type="button" class="btn btn-primary">Reply</a>
          <a href="<?=$link; ?>"  class="btn btn-success">Mark as read</a>
        </div>
      </div>
    </div>
  </div>


<?php }?>
            </div>
        </div>





        <!-- Button trigger modal -->

  
 
</body>
</html>