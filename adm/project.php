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
                
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
  .fa {
  padding:5px;
  font-size: 20px;
  width: 30px;
  border-radius: 50%;
    text-align: center;
  text-decoration: none;
  margin: 10px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-whatsapp {
  background: green;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

/* Solid Social Share Buttons */

.btn-social,
.btn-social:visited,
.btn-social:focus,
.btn-social:hover,
.btn-social:active {
  color: #ffffff;
  text-decoration: none;
  transition: opacity .15s ease-in-out;
}

.btn-social:hover,
.btn-social:active {
 opacity: .75;
}

.btn-fb {
  background-color: #3b5998;
}

.btn-tw {
  background-color: #1da1f2;
}

.btn-in {
  background-color: #0077b5;
}

.btn-gp {
  background-color: #db4437;
}

.btn-rd {
  background-color:green;
}

.btn-hn {
  background-color: #ff4000;
}

/* Outline Social Share Buttons */

.btn-social-outline {
  background-color: transparent;
  background-image: none;
  text-decoration: none;
  transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

.btn-fb-outline {
  color: #3b5998;
  border-color: #3b5998;
}

.btn-fb-outline:hover,
.btn-fb-outline:active {
  color: #ffffff;
  background-color: #3b5998;
}

.btn-tw-outline {
  color: #1da1f2;
  border-color: #1da1f2;
}

.btn-tw-outline:hover,
.btn-tw-outline:active {
  color: #ffffff;
  background-color: #1da1f2;
}

.btn-in-outline {
  color: #0077b5;
  border-color: #0077b5;
}

.btn-in-outline:hover,
.btn-in-outline:active {
  color: #ffffff;
  background-color: #0077b5;
}

.btn-gp-outline {
  color: #db4437;
  border-color: #db4437;
}

.btn-gp-outline:hover,
.btn-gp-outline:active {
  color: #ffffff;
  background-color: #db4437;
}

.btn-rd-outline {
  color: #ff4500;
  border-color: #ff4500;
}

.btn-rd-outline:hover,
.btn-rd-outline:active {
  color: #ffffff;
  background-color: #ff4500;
}

.btn-hn-outline {
  color: #ff4000;
  border-color: #ff4000;
}

.btn-hn-outline:hover,
.btn-hn-outline:active {
  color: #ffffff;
  background-color: #ff4000;
}

/* Fluid Styles */

.fluid {
  display: flex;
}

.fluid a {
  flex-grow: 1;
  margin-right: 0.25rem;
}

.fluid a:last-child {
  margin-right: 0rem;
}
</style>

    
                
   <!--Table-->
   <h5 class='mb-3'>Project Management</h5>

   <a href="addproject.php" type="button" class="btn btn-primary" >Add Project</a>
<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
    </div>
  </div>
</div>
<?php

      

 $sql="select * from project order by id desc";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-:-?-()-,-’-]+/', '-', $string);
   return $slug;}

 while ($row=mysqli_fetch_array($result)) {

    $tittle=$row['tittle'];
    $dis=$row['dis'];
     $date=$row['date'];
     $postid=$row['projectId'];
     $link=$row['link'];
  $link="delete/project.php?id=".urlencode(base64_encode($postid));
  $link1="update/edit_blog.php?id=".urlencode(base64_encode($postid));
  $action="update/edit_blog_status.php?id=".urlencode(base64_encode($postid));
  $dat=$postid;
 
           $code=$dat*1540948579;
            $cod=$code/1540948579;
           
            $sql1="select * from proimage where proid='$postid'";
            $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
            $row1=mysqli_fetch_array($result1);
  
                 
          
           $sql2 = "select * from pagehits where postID='$dat' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
           


              ?>

   <!----- blog details area ----->
   <div class="row">
  <div class="col-sm-4 mb-2">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" style="display:<?php echo $img ?>;"  src="uploadpro/<?php echo  $row1['image'];?>" alt="Card image cap">
          


</video>
      <p class="date text-center"><?php echo  $row['date'];?> | <samp class="text-bold"><?php echo  $page_view;?></samp> Views</p>
        <h5 class="tittle text-center"><?php echo  $row['tittle'];?></h5>
        <p class="dis text-center"><?php echo  $row['dis'];?></p>


          <div class="social text-center">
              <a href="https://www.facebook.com/sharer.php?u=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>" target="_blank" title="Share this post on Facebook" class="fa fa-facebook"></a>
              <a href="https://www.twitter.com/sharer.php?u=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>" target="_blank" title="Share this post on twitter"  class="fa fa-twitter"></a>
              <a  href="whatsapp://send?text=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>" data-action="share/whatsapp/share"class="fa fa-whatsapp"></a>
              <a href="https://www.linkedin.com/shareArticle?url=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>" class="fa fa-linkedin"></a>
          </div>
          <div class="button text-center">
              <a href="<?=$link1; ?>" class="btn btn-primary">Edit</a>
              <a href="<?=$link; ?>" class="btn btn-danger">Delete</a>
          </div>
      </div>
    </div>
  </div>
  

</div>


<!----- end blog details area ----->




      <?php }?>
   
  </div>     

            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">


    

            </div>

        </div>

    </div>







