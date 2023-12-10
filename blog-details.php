<?php session_start(); ?>
<?php 

include('conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn,$_GET['id']);
$id2=$id;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php 
     
         function create_slug($string){
  $slug=preg_replace('/[^A-Za-z0-9-:-?-()-,-’-]+/', '-', $string);
  return $slug;} ;

          $sql1="select * from potblog where slug='$id2' ";
          $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
          
       
          while ($row1=mysqli_fetch_array($result1)) {
       
          
           $tittle=$row1['tittle'];
      $image=$row1['image'];
      $dis=$row1['dis'];
      $content=$row1['content'];
       
          }
          $postid=$id2;
          $pageName=$slug;
          ?>

<?php include('conn.php');
  $sql="select * from portfolio   ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
         
         
 

          while ($row=mysqli_fetch_array($result)) {
$username=$row['username'];
$email=$row['email'];
$image=$row['image'];
$number=$row['contact'];
$about=$row['about'];
$fb=$row['facebook'];
$lk=$row['linkedin'];
$git=$row['github'];
$whatsapp=$row['whatsapp'];
$location=$row['location'];
$cv=$row['cv'];


$name = $username;
$spilt = explode(" ", $name);
$surname= $spilt[0]; // piece1
$firstname= $spilt[1]; // piece2



include('pagview.php');

          }?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $tittle ?></title>
  <meta content="<?php echo $dis ?>" name="description">
  <meta content="" name="keywords">
  <meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $tittle?>" />
<meta property="og:description"        content="<?php echo $tittle ?>" />
<meta property="og:image" content="https://gatmediagh.com/adm/<?php echo $upload?>/<?php echo $image?>" />
  <!-- Favicons -->
  <link href="assets/img/myimg.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('common/header.php')?>
  <!-- End Header -->


  <main id="main">

  <?php 

        
        include('conn.php');


               $one='1';
                $sql2="select * from potblog where slug='$id2'";
          $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));

          while ($row2=mysqli_fetch_array($result2)) {
         
           




            $data=$row2['id'];
            $date=$row2['date'];
            $tittle=$row2['tittle'];
            $image=$row2['image'];
            $content=$row2['content'];
            $category=$row2['category'];
          $slug=$row2['slug'];;

 
 
 

         
          }
       


 $sql2 = "select * from pagehits where postID='$data' ";
$result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
$page_view = mysqli_num_rows($result2) ;
  
  $page_v=round($page_view/6);
           
//code to get user details
          $user_ip_address = $_SERVER['REMOTE_ADDR'];
          $user_agent = $_SERVER['HTTP_USER_AGENT']; 
           $today = date("Y-m-d");
           $month=date("F") ;

           $user_agent1=str_replace(' ', '', $user_agent);

//Checking and submitting views into database
           $sql2 = "select * from pagehits where viewer='$user_agent1' and postID='$data'";
           $result2= mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $user_like = mysqli_num_rows($result2) ;
        if(mysqli_num_rows($result2)>=1)
          {
           $view_color='red';
          }  

 else{
    $sql9 = "INSERT INTO `pagehits`( `postID`, `viewer`, `creatorID`) VALUES ('$data','$user_agent1','$creator')";
    if(mysqli_query($conn,$sql9)){
       
    }
    else{
      echo 'Error: '.mysqli_error($conn);
    }   
   
                  };
                
          
              
                 $word= str_word_count( $content);
                   
              
                   
                 ?>
    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post-box">
            <h1 class="text-center m-4">Blog Details</h1>

              <div class="post-thumb">
                <img src="adm/uploadblog/<?php echo $image ?>" class="img-fluid" alt="">
              </div>
              <div class="post-meta">
                <h1 class="article-title"><?php echo $tittle ?></h1>
                <ul>
                  <li>
                    <span class="bi bi-person"></span>
                    <a href="#">Gatogo Daniel</a>
                  </li>
                  <li>
                    <span class="bi bi-tag"></span>
                    <a href="#"><?php echo $category ?></a>
                  </li>
                  <li>
                    <span class="bi bi-chat-left-text"></span>
                    <a href="#">14</a>
                  </li>
                </ul>
              </div>
              <div class="article-content">
                <p stlye="background-color:black !important;">
                <?php echo $content ?>
                </p>
               
              </div>
            </div>
       <!-----     <div class="box-comments">
              <div class="title-box-2">
                <h4 class="title-comments title-left">Comments (34)</h4>
              </div>
              <ul class="list-comments">
                <li>
                  <div class="comment-avatar">
                    <img src="assets/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                      ipsam temporibus maiores
                      quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li>
                  <div class="comment-avatar">
                    <img src="assets/img/testimonial-4.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Carmen Vegas</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                      ipsam temporibus maiores
                      quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,
                      veritatis deserunt.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li class="comment-children">
                  <div class="comment-avatar">
                    <img src="assets/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                      ipsam temporibus maiores
                      quae.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li>
                  <div class="comment-avatar">
                    <img src="assets/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                      ipsam temporibus maiores
                      quae natus libero optio.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="form-comments">
              <div class="title-box-2">
                <h3 class="title-left">
                  Leave a Reply
                </h3>
              </div>
              <form class="form-mf">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Website">
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget-sidebar sidebar-search">
              <h5 class="sidebar-title">Search</h5>
              <div class="sidebar-content">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary btn-search" type="button">
                        <span class="bi bi-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Recent Post</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">Atque placeat maiores.</a>
                  </li>
                  <li>
                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                  <li>
                    <a href="#">Atque placeat maiores nam quo autem</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Archives</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">September, 2017.</a>
                  </li>
                  <li>
                    <a href="#">April, 2017.</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                  <li>
                    <a href="#">Atque placeat maiores nam quo autem</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-sidebar widget-tags">
              <h5 class="sidebar-title">Tags</h5>
              <div class="sidebar-content">
                <ul>
                  <li>
                    <a href="#">Web.</a>
                  </li>
                  <li>
                    <a href="#">Design.</a>
                  </li>
                  <li>
                    <a href="#">Travel.</a>
                  </li>
                  <li>
                    <a href="#">Photoshop</a>
                  </li>
                  <li>
                    <a href="#">Corel Draw</a>
                  </li>
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Gatmedia</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://gatmediagh.com/software">Gatogo Daniel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>