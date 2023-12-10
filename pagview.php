<?php


           
//code to get user details
          $user_ip_address = $_SERVER['REMOTE_ADDR'];
          $user_agent = $_SERVER['HTTP_USER_AGENT']; 
           $today = date("Y-m-d");
           $month=date("F") ;

           $user_agent1=str_replace(' ', '', $user_agent);

//Checking and submitting views into database

$sql9 = "INSERT INTO `potpagehits`(`pageName`, `user_ip_address`, `user_agent`,`postId`, `date`) VALUES ('$pageName','$user_ip_address','$user_agent1','$postid','$today')";
if(mysqli_query($conn,$sql9)){
   
}
else{
  echo 'Error: '.mysqli_error($conn);
} 
           $sql2 = "select * from potpagehits where user_agent='$user_agent1' and pageName='$pageName'";
           $result2= mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $user_like = mysqli_num_rows($result2) ;
        if(mysqli_num_rows($result2)>=1)
          {
          $visit='true';
        
          }  

 else{
    $visit='false';
                  };
?>