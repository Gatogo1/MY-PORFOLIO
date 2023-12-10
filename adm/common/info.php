<?php
/*
 $servername = "localhost";
$username = "gatmedia_Gatogo";
$password = "Ga@1540948579";
$dbname = "gatmedia_gat-blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thekambh_gat-blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}


?>  
 <?php 
  /* Total page code */
 $today = date("Y-m-d");   
 $rest = substr("$today",-2); 
 /* post page code */
 $my=date('jS \ F Y');

 $sql2 = "select * from potpagehits where date='$today'  ";
 $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
 $page_viewtoday = mysqli_num_rows($result2) ;
 
 $sql1 = "select * from potpagehits  ";
 $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
 $totalpageview = mysqli_num_rows($result1) ;

                          
                          $sql3="select * from  blog  ";
          $result3 = mysqli_query($conn,$sql3)or die( mysqli_error($conn));
             while ($row3=mysqli_fetch_array($result3)){
                 
                 
                 
          $server_date=$row3['date']; 
                 
              $rest3 = substr("$server_date", 1, 3);   
             }
          
               if ($today==$my) {
         $re='1';
          }
          else{
            $re='0';
          }
                     
                     ?>

                 
                  
    <div style="backgound-color:#080607;" class="content col-sm-10 ">
                <!--info-->
               
                    
                    <div    class="row">
                    <div class="col-sm-2  rounded bg-info text-white text-center m-2">
                    <?php
                                   $sql4 = "select * from potmassage where status='0' ";
                                   $result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
                                   $newMassages = mysqli_num_rows($result4) ;
                                 ?>

                    <div class="log">
                      <i class="f-info fa fa-envelope" aria-hidden="true"></i>
                    </div>
                      <a href="chat"><div class="mass">Massage <span><?php echo   $newMassages ?></span></div></a>
                    </div>
                    <div class="col-sm-2 rounded bg-success text-white text-center m-2">
                    <div class="log">
                      <i class="f-info fa fa-group" aria-hidden="true"></i>
                    </div>
                    <div class="mass">Today page visitors <?php echo   $page_viewtoday ?></div>
                    </div>

                    <div class="col-sm-2 rounded bg-danger text-white text-center m-2">
                    <div class="log"><i class="f-info fa  fa-user-circle" aria-hidden="true"></i></div>
                    <div class="mass">Total Page Visitors <span  ><?php echo  $totalpageview ?></span></div>
                    </div>

                    <div class="col-sm-2 rounded bg-primary text-white text-center m-2">
                    <div class="log"><i class="f-info fa  fa-user-circle" aria-hidden="true"></i></div>
                    <div class="mass">Impressions <span  ><?php echo  'no data'?></span></div>
                    </div>
                </div>
                <!-- end info-->
