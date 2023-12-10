<?php include("common/head.php") ;?>
<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<style>
    ul li{
        display: <?php echo $display ?>;
      }

      .bi{
        font-size:50px;
      }
      .card{
  border-style: solid;
  border-color: #186104;
  border-width: medium;
}
</style>
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

<!-- about start--->
                <div class="row">
                    <div class="col-sm-2 ml-2">
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
 $cv="uploadcv.php?id=".urlencode(base64_encode($data));





}

if (empty($image)) {
  $image="emty.jpg";
}
else {
    $image=$image;
}
 ?>
                      <div class=" card about-me text-center ">
                        <h4>About you</h4>
                        <div class="img"> <img style="width: 230px;"   class="" src="user_pic/<?php echo $image ?>" alt=""></div>
                       
                        <a  class="btn btn-sm btn-success "href="<?=$img;?>">Change Image</a>
                        <p class="name">Name: <?php echo $username ?></p>
                        <p class="name">Email: <?php echo $email ?></p>
                        <p class="name">Contact: <?php echo $contact ?></p>
                        <p class="name">Location: <?php echo $location ?></p>
                        <h5><u class="">About me</u></h5>
                        <p class="about"> <?php echo $about ?></p>
                        <a  class="btn btn-warning "href="<?=$link;?>">Edit</a>
                      </div>

                      <hr>


                      <div class="card settins">

                      <?php

      

$sql7="select * from setting";
$result7 = mysqli_query($conn,$sql7)or die( mysqli_error($conn));


while ($row7=mysqli_fetch_array($result7)) {
 $data=$row7['id'];
 $service=$row7['service'];
   $image=$row7['image'];







}

if (empty($image)) {
  $image="emty.jpg";
}
else {
    $image=$image;
}
 ?>
                        <h4>Settings</h4>
                        <div class="img"> <img style="width: 250px;"   class="" src="uploadcover/<?php echo $image ?>" alt=""></div>
                        <p>Header Image</p>
                      
                        <p>Service Discription: <?php echo $service ?> </p>
                      </div>
                      <a  class="btn btn-success "href="settings.php">Edit</a>

                      <a  class="btn btn-success "href="<?=$cv;?>">Uplooad CV</a>

                    </div>

<!--- Experience sectiom-->
          
                    <div class="col-sm-2 text-center card">
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
                        $exp2=$row3['exp2'];
                        $exp3=$row3['exp3'];
                        $exp4=$row3['exp4'];
                        $exp5=$row3['exp5'];
                        $exp6=$row3['exp6'];
                        $exp7=$row3['exp7'];
                        $exp8=$row3['exp8'];
if (empty($exp1 || $exp2||$exp3 || $exp4 ||$exp5 || $exp6||$exp7 || $exp8)) {
$dsplay='none';


}
else {
  $display='block';
}
                        $exp="update/expupdate.php?id=".urlencode(base64_encode($data));

                    
                    ?>
                        <div class="exp">
                  
                      <p>Company: <?php echo $company ?> </p>
                      <p>start-end: <?php echo $start ?>-<?php echo $end ?> </p>
                      <p>Position: <?php echo $position ?> </p>
                      <ul>
                      <li class="mb-4"><?php echo $exp1 ?></li>
                      <li class="mb-4"><?php echo $exp2 ?></li>
                      <li class="mb-4"><?php echo $exp3 ?></li>
                      <li class="mb-4"><?php echo $exp4 ?></li>
                      <li class="mb-4"><?php echo $exp5 ?></li>
                      <li class="mb-4"><?php echo $exp6 ?></li>
                      <li class="mb-4"><?php echo $exp7 ?></li>
                      <li class="mb-4"><?php echo $exp8 ?></li>
                      </ul>
                      <a  class="btn btn-warning mb-2 "href="<?=$exp;?>">Edit</a>
                        </div>

                        <?php }?>
                        <a  class="btn btn-success "href="addexp.php">Add experince</a>
                    </div>

                    <!--- Experience sectiom end-->

                    <!--- skills sectiom -->
                    <div class="col-sm-2 text-center card ml-1">
                      <h4>Add skills</h4>
                      <?php 
               $sql4="select * from potskills ";
               $result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
                         
                    
                    while ($row4=mysqli_fetch_array($result4)) {
                        $data=$row4['id'];
                        $skills=$row4['skills'];
                        $percent=$row4['percent'];
                        $dis=$row4['dis'];

                        $skill="update/updatskills.php?id=".urlencode(base64_encode($data));

                    
                    ?>    
          
     
                      <div class="skills bor  m-2 p-1">
                        <h6>
                          skills: <?php echo $skills ?>
                        </h6>
                        <p>Percentage:  <?php echo $percent ?>%</p>
                        <p> Discription:  <?php echo $dis ?></p>
                     
                        <a  class="btn btn-warning "href="<?=$skill?>">Edit Skills</a>
                        <!-- Large modal -->





                      </div>
          <?php }?>
                      <a  class="btn btn-success "href="addskills.php">Add Skills</a>
                    </div>

                    <!--- skils sectiom end-->

                    <!---  sectiom end-->
                    <div class="col-sm-5 text-center card ml-2 ">
                    <h4 class="text-center">Services</h4>
                        <div class="row text-center">
                        
<?php
                          $sql5="select * from potservice ";
               $result5 = mysqli_query($conn,$sql5)or die( mysqli_error($conn));
                         
                    
                    while ($row5=mysqli_fetch_array($result5)) {
                        $data=$row5['id'];
                        $service=$row5['service'];
                        $dis=$row5['dis'];
                        $fa=$row5['fa'];
                        
                        $services="update/updatservice.php?id=".urlencode(base64_encode($data));

                       

                    
                    ?>    
          
                          <div class="col-sm-6">
                            <div class="ser">
                              <p>Icon: <?php echo $fa ?></p>
                              <p>Service: <?php echo $service ?></p>
                              <p>Disvription: <?php echo $dis ?></p>
                              <a  class="btn btn-warning "href="<?=$services?>">Edit Services</a>
                            </div>
                          </div>
                          <?php }?>
                          
                        </div>
                        <a  class="btn btn-success mt-2 "href="addservice.php">Add Services</a>
                        <hr>
                                   <div class="rate">
                                    <h4>
                                      Rates
                                    </h4>

                                    <?php
                          $sql6="select * from potrate ";
               $result6 = mysqli_query($conn,$sql6)or die( mysqli_error($conn));
                         
                    
                    while ($row6=mysqli_fetch_array($result6)) {
                        $data=$row6['id'];
                        $work=$row6['wcom'];
                        $yearsExperience=$row6['yearsExperience'];
                        $totalClient=$row6['totalClient'];
                        $award=$row6['award'];
                        $redi="update/rateupdate.php?id=".urlencode(base64_encode($data));

                        if (empty($row6)) {
                        $text='Add Rate';
                        $re='addrate.php';
                        }
                        else {
                          $text='Edit Rate';
                          $re=$redi;
                        }
                    }
                        ?>

                                    <p>Work Completed: <?php echo $work?></p>
                                    <p>Years of Experiance: <?php echo $yearsExperience?></p>
                                    <p>Total Client: <?php echo $totalClient?></p>
                                    <p>Awards: <?php echo $award?></p>
                                   </div>
                                   <a  class="btn btn-success mt-2 "href="<?php echo $re?>"><?php echo $text?></a>
                       
                    </div>
                </div>