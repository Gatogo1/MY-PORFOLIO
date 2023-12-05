  
<?php
$now=date('l jS \of F Y h:i:s A');
?>
<section data-aos="fade-up"   id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="" method="post"class="">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                                     <input type="hidden" name="date" value="<?php echo $now ?>">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="number" class="form-control"minlength="10" maxlength="14" pattern="^[0][0-9]\d{9}$|^[0-9]\d{9}$" name="phone" placeholder="Your phone numeber " required>
                            </div>
                          </div>

                          <div class="form-group mb-3">
                              <input type="text" name="subject" class="form-control" id="name" placeholder="Subject" required>
                            </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="massage"     rows="5" placeholder="Massage" required></textarea>
                            </div>
                          </div>
                         
                          <div class="col-md-12 text-center">
                            <input type="submit" name="submit" class="button button-a button-big mt-2 button-rouded">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                      To inquire about my software portfolio or discuss potential collaboration opportunities, please feel free to contact me using the details below.
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> <?php echo $location?></li>
                        <li><span class="bi bi-phone"></span><?php echo $number?></li>
                        <li><span class="bi bi-envelope"></span> <?php echo $email ?></li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="<?php echo $fb?>"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href="<?php echo $git?>"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href="<?php echo $lk?>"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="<?php echo $wa?>"><span class="ico-circle"><i class="bi bi-whatsapp"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <?php 


include('conn.php');


if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$massage=$_POST['massage'];
$now=$_POST['date'];





$sql9 = "INSERT INTO `potmassage`( `name`, `email`,`phone`,`subject`,`massage`,`date`) VALUES ('$name','$email','$phone','$subject','$massage','$now')";
    if(mysqli_query($conn,$sql9)){
      echo"<script>alert('Massage sent successfully I would get back to you soon'); window.location.href='index.php'</script>";

    }
    
    
  }
    
    ?> 