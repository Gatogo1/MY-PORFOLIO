<?php 
include('conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);
}

      ?>
<!DOCTYPE html>

<html lang="en">

<?php include('common/head.php');?>

  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php



$sql="select * from project where id='$id2'";
$result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
function create_slug($string){
  $slug=preg_replace('/[^A-Za-z0-9-:-?-()-,-’-]+/', '-', $string);
  return $slug;}

while ($row=mysqli_fetch_array($result)) {

   $tittle=$row['tittle'];
   $dis=$row['dis'];
    $image=$row['image'];
    $date=$row['date'];
    $type=$row['type'];
    $link=$row['link'];
    $company=$row['company'];


    $pageName='projectview';
    $postid=$id2;
   
    include('pagview.php');
          

}
             ?>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-black">
    <div class="container d-flex align-items-center justify-content-between">

      <h3 class="logo"><a href="home"><?php echo  $username; ?></a></h3>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="home">Home<?php echo $pageName?></a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="hero hero-single bg-black route bg-image" style="">
    <div class="overlay-mf"></div>
    <div class="hero-content bg-black display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4"><?php echo $tittle?></h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="home">Home</a>
            </li>
            <li class="breadcrumb-item active">Portfolio Details</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<hr>
  <main id="main">


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="adm/uploadpro/<?php echo $image ?>" alt=" <?php echo $tittle ?>">
                </div>

                <div class="swiper-slide">
                  <img src="adm/uploadpro/<?php echo $image ?>" alt=" <?php echo $tittle ?>">
                </div>

                <div class="swiper-slide">
                  <img src="adm/uploadpro/<?php echo $image ?>" alt=" <?php echo $tittle ?>">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>:<?php echo $type?></li>
                <li><strong>Client</strong>: <?php echo $company?></li>
                <li><strong>Project date</strong>: <?php echo $date?></li>
                <li><strong>Project URL</strong>: <a class=" btn text-white bg-success" href="<?php echo $link?>">Visit Site</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?php echo $tittle?></h2>
              <p>
              <?php echo $dis?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Gatmedia</strong>. All Rights Reserved</p>
            <div class="credits">
             
              Designed by <a href="https://gatmedia.com/software-portfolio">Gatogo Daniel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center bg-success text-white justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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