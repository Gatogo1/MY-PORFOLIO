<?php include("common/head.php") ;?>
<?php 
$us=$_SESSION['usertype'];
if($us!=='Admin'){
header("location:user_blogs.php");;}
?>
<?php include('usablel/dep.php');?>
<body>
<?php include("common/tittle.php") ;?>
    <div class="container-fluid">

        <div class="row">
        <?php include("common/menu.php") ;?>
        <?php include("common/info.php") ;?>
           
                <hr style="background-color: red;">


                <div class="row">
                    <div class="col-sm-2 bg-black">
                    <?php

      

$sql="select * from portfolio ";
$result = mysqli_query($conn,$sql)or die( mysqli_error($conn));


while ($row=mysqli_fetch_array($result)) {
 $data=$row['id'];
 $about=$row['about'];
   $username=$row['username'];
   $image=$row['image'];
    $email=$row['email'];
    $contact=$row['contact'];
    $location=$row['location'];
 $link="update/aboutUpdate.php?id=".urlencode(base64_encode($data));
 $img="update/imageUpdate.php?id=".urlencode(base64_encode($data));






}

if (empty($image)) {
  $image="emty.jpg";
}
else {
    $image=$image;
}
 ?>
                      <div class="about-me text-center border">
                        <h4>About you</h4>
                        <div class="img"> <img style="width: 250px;"   class="" src="user_pic/<?php echo $image ?>" alt=""></div>
                       
                        <a  class="btn btn-sm btn-success "href="<?=$img;?>">Change Image</a>
                        <p class="name">Name: <?php echo $username ?></p>
                        <p class="name">Email: <?php echo $email ?></p>
                        <p class="name">Contact: <?php echo $contact ?></p>
                        <p class="name">Location: <?php echo $location ?></p>
                        <h5><u class="">About me</u></h5>
                        <p class="about"> <?php echo $about ?></p>
                        <a  class="btn btn-success "href="<?=$link;?>">Edit</a>
                      </div>

                    </div>

<!--- Experience sectiom-->
          
                    <div class="col-sm-2 border">
                    <h4>Experience</h4>
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


                    
                    ?>
                        <div class="exp">
                  
                      <p>Company: <?php echo $company ?> </p>
                      <p>start-end: <?php echo $start ?>-<?php echo $end ?> </p>
                      <p>Position: <?php echo $position ?> </p>
                      <ul>
                        <li><?php echo $exp1 ?></li>
                      </ul>
                      <a  class="btn btn-success "href="<?=$link;?>">Edit</a>
                        </div>

                        <?php }?>
                        <a  class="btn btn-success "href="<?=$link;?>">Add experince</a>
                    </div>

                    <!--- Experience sectiom end-->

                    <!--- skills sectiom -->
                    <div class="col-sm-2 bg-success">
                        hi2

                    </div>

                    <!--- skils sectiom end-->

                    <!---  sectiom end-->
                    <div class="col-sm-6 bg-success">
                        hi2

                    </div>
                </div>