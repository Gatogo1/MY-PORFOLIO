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


$name = $username;
$spilt = explode(" ", $name);
$surname= $spilt[0]; // piece1
$firstname= $spilt[1]; // piece2


          }?>

<!DOCTYPE html>
<html lang="en">

<?php include('common/head.php');?>

<body>

  <!-- ======= Header ======= -->
  <?php include('common/header.php');?>
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/image.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am <?php echo $username?></h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer,Software Developer, Freelancer"></span></p>
          <button class="btn btn-success"  onclick="window.open('file.doc')">Download CV</button>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">




    <!-- ======= About Section ======= -->
    <section id="about" data-aos="fade-up"  class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div data-aos="fade-in" class="about-img">
                        <img src="adm/user_pic/<?php echo $image ?>" class="img-fluid rounded b-shadow-a" alt="">
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
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">85%</span>
                    <div    class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%; background-color:#124e0b;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75% ; background-color:#124e0b;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%; background-color:#124e0b;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">50%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50% ; background-color:#124e0b;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                   <span>JAVA</span> <span class="pull-right">40%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 40%; background-color:#124e0b;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
<span>C++</span> <span class="pull-right">50%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%; background-color:#124e0b;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <span>Flutter</span> <span class="pull-right">60%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%; background-color:#124e0b;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
               


                <div data-aos="fade-up"  class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">Professional Summary</p>
                    <p class="lead">
                    <?php echo $about ?>
                    </p>
                   <h4>Experience</h4>
                    <ul>
                      <p>Developer, Gatmedia (2021 - todate)</p>
                      <p>Duties</p>
                      <li>Developed and maintained web application using HTML,JAVASCRIPT,CSS5,PHP and MYSQL.</li>
                      <li> Implemented RESTful APIs to handle data communication between front-end and back-end.</li>
                      <li>Collaborated with front-end developers to integrate front-end code with back-end functionalit</li>
                      <li> Debugged and resolved issues to ensure smooth operation of the application.</li>
                      <li>Contributed to software development lifecycle, including technical documentation, code reviews, and deployment.</li>
                      <li> Assisted in testing and deploying applications on the production server</li>

                    </ul>
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
              As a full stack developer, I am well-equipped to deliver a wide range of services to support your project's development needs. Whether you need assistance with front-end design, back-end development, or a combination of both, I can provide the expertise and guidance you need. Contact me today to discuss your project and how I can assist you in achieving your goals.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div data-aos="fade-up"   class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
              </div>
              <div data-aos="fade-up" class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                Are you in need of a professional web designer to transform your website? Look no further! I am experienced designers I would create visually stunning and user-friendly websites that will leave a lasting impression on your audience
                </p>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                I utilizes advanced coding techniques and frameworks to develop websites that are not only visually stunning but also highly functional. From seamless user experiences to robust back-end functionality, I ensure that your website is reliable and scalable.
                </p>
              </div>
            </div>
          </div>
          <div data-aos="fade-up"class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Mobile App Development</h2>
                <p class="s-description text-center">
                Are you looking for a professional mobile app developer to create your next big idea? Look no further! I am experienced developer to bring your vision to life. With expertise in a wide range of technologies, I can build apps that are not only visually stunning but also highly functional and user-friendly.
                </p>
              </div>
            </div>
          </div>
          <div data-aos="fade-up"class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Software Development</h2>
                <p class="s-description text-center">
                 I am dedicated to delivering results that drive business success. I take the time to understand your business goals and objectives, and then tailor our solutions accordingly. Whether you need a comprehensive software solution or a simple website or app, I have the expertise to deliver tangible results. Choose a developer  and watch your business flourish!
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle "><i class="bi bi-brightness-high"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                With my expertise in graphic design, I can create visually stunning designs that effectively communicate your message and leave a lasting impression on your audience. Whether you need a logo, brochure, website, or any other design project, we have the expertise to deliver exceptional results.
                </p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Services Section -->

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
                <p data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="counter purecounter"></p>
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
                <p data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="counter purecounter"></p>
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
                <p data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="counter purecounter"></p>
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
                <p data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="counter purecounter"></p>
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
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
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
$date=$row['date'];
$dis=$row['dis'];
$type=$row['type'];
$image=$row['image'];


          

           
?>
          <div data-aos="fade-up"   class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
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
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
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
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
     AOS.init();
  </script>
</body>

</html>