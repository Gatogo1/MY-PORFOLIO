<?php

      include('conn.php');

$sql7="select * from setting";
$result7 = mysqli_query($conn,$sql7)or die( mysqli_error($conn));


while ($row7=mysqli_fetch_array($result7)) {
 $data=$row7['id'];
 $servicetext=$row7['service'];
   $imageover=$row7['image'];




   $pageName='Home';

$postid='0';

   include('pagview.php');

}

if (empty($image)) {
  $image="emty.jpg";
}
else {
    $image=$image;
}
 ?>
      
<!DOCTYPE html>
<html lang="en">

<?php include('common/head.php');?>

<body>

  <!-- ======= Header ======= -->
  <?php include('common/header.php');?>
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(adm/uploadcover/<?php echo $imageover?>)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am <?php echo $username?></h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer,Software Developer, Freelancer"></span></p>
          <button class="btn btn-success"  onclick="window.open('adm/uploadcv/<?php echo $cv ?>')">Download CV</button>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->



</body>
 
</html>

  <main id="main">




    <!-- ======= About Section ======= -->
    <section id="about" data-aos="fade-up"  class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-sm-12">
            <div class="box-shadow-full">
            <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div style=" background-color: #124e0b;width:150px; border-radius: 50px 10px;" data-aos="fade-in" class="about-img">
                        <img   data-aos="fade-in"src="adm/user_pic/<?php echo $image ?>" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span><?php echo $username ?></span></p>
                        <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                        <p><span class="title-s">Email: </span><?php echo $email ?> <span></span></p>
                        <p><span class="title-s">Phone: </span> <span><?php echo $number ?></span></p>
                      </div>
                    </div>
                  </div>
                  <div data-aos="fade-up"   class="skill-mf">
                    <h5 class="title-s">Skill</h5>
                    <?php 
               $sql4="select * from potskills ";
               $result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
                         
                    
                    while ($row4=mysqli_fetch_array($result4)) {
                        $data=$row4['id'];
                        $skills=$row4['skills'];
                        $percent=$row4['percent'];
                        $dis=$row4['dis'];

                       

                    
                    ?>    
                    <span><?php echo $skills ?></span> <span class="pull-right"><?php echo $percent ?>%</span>
                    <div    class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $percent ?>%; background-color:#124e0b;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p><?php echo $dis ?></p>
                  
                  <?php }?>
                  </div>
                </div>
               


                <div data-aos="fade-up"  class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                  
                    <h5 class="title-s ">Professional Summary</h5>
                    <p class="lead">
                    <?php echo $about ?>
                    </p>
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
                    
                    ?>

    <style>
      ul li{
        display: <?php echo $display ?>;
      }
    </style>                
                    <ul>
                      <p><?php echo $position ?>, <?php echo $position ?>  (<?php echo $start ?>-<?php echo $end?>)</p>
                   
                      <li class="mb-4"><?php echo $exp1 ?></li>
                      <li class="mb-4"><?php echo $exp2 ?></li>
                      <li class="mb-4"><?php echo $exp3 ?></li>
                      <li class="mb-4"><?php echo $exp4 ?></li>
                      <li class="mb-4"><?php echo $exp5 ?></li>
                      <li class="mb-4"><?php echo $exp6 ?></li>
                      <li class="mb-4"><?php echo $exp7 ?></li>
                      <li class="mb-4"><?php echo $exp8 ?></li>
                      

                    </ul>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" data-aos="fade-up"  class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
             <?php echo $servicetext?>
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
       
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
          <div data-aos="fade-up" class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><?php echo $fa ?></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php echo $service ?></h2>
                <p class="s-description text-center">
                <?php echo $dis ?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section><!-- End Services Section -->


    <?php
                          $sql6="select * from potrate ";
               $result6 = mysqli_query($conn,$sql6)or die( mysqli_error($conn));
                         
                    
                    while ($row6=mysqli_fetch_array($result6)) {
                        $data=$row6['id'];
                        $work=$row6['wcom'];
                        $yearsExperience=$row6['yearsExperience'];
                        $totalClient=$row6['totalClient'];
                        $award=$row6['award'];
                    }
                        ?>
    <!-- ======= Counter Section ======= -->
    <div data-aos="fade-up"  class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div data-aos="fade-up"   class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="<?php echo $work ?>" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div data-aos="fade-up"   class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="<?php echo $yearsExperience ?>" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div data-aos="fade-up"   class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="<?php echo $totalClient ?>" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div data-aos="fade-up"   class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="<?php echo $award ?>" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section data-aos="fade-up"   id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div data-aos="fade-up"   class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
include('conn.php');
  $sql="select * from project    ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
         
         
 

          while ($row=mysqli_fetch_array($result)) {
$tittle=$row['tittle'];
$data=$row['id'];
$date=$row['date'];
$dis=$row['dis'];
$type=$row['type'];
$image=$row['image'];

$link="portfolio-details.php?id=".urlencode(base64_encode($data));

          

           
?>
          <div data-aos="fade-up"   class="col-md-4">
            <div class="work-box">
              <a href="adm/uploadpro/<?php echo $image ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="adm/uploadpro/<?php echo $image ?>" alt="" class="img-fluid">
                </div>
              </a>
              <div data-aos="fade-up"   class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php echo $tittle ?></h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date"><?php echo $date ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="<?=$link?>"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php } ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    

                
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section data-aos="fade-up"   id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
              
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
include('conn.php');
  $sqls="select * from potblog order by id desc    ";
          $results = mysqli_query($conn,$sqls)or die( mysqli_error($conn));
         
         
 

          while ($rows=mysqli_fetch_array($results)) {
$tittle=$rows['tittle'];
$blogdate=$rows['date'];
$dis=$rows['dis'];
$content=$rows['content'];
$blogimage=$rows['image'];
$blogcat=$rows['category'];
$slug=$rows['slug'];



          
$links="blog-details.php?id=$slug";   
           
?>
   
          <div class="col-md-4">
            <div class="card bg-black card-blog">
              <div class="card-img">
                <a href="<?=$links;?>"><img src="adm/uploadblog/<?php echo $blogimage ?>" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category"><?php echo $blogcat ?></h6>
                  </div>
                </div>
                <p class="card-description">
                <?php echo $dis ?>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/myimg.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Gatogo Daniel</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"><?php echo $blogdate ?></span> 
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->

    <?php include('common/contact.php');?>
   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('common/footer.php');?>
<!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center bg-success justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
     AOS.init();
  </script>
 <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>
 
    <script type="text/javascript"
            src=
"https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
    </script>

</body>

</html>