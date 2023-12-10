This my portfolio project .
I used
*HTML
*JS
*CSS
*BOOTSTRAP
*PHP 
for developing this project
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