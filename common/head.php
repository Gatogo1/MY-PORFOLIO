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

          }?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $username ?> Porfolio</title>
  <meta content="" name="keywords">
  <meta name="author" content="Gatogo Daniel">
  <meta property="og:image" content="https://gatmediagh.com/adm/uploadcorver/<?php echo $image?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="googlebot" content="notranslate">
    <meta name="description" content="A highly motivated and skilled full stack developer with a strong focus on delivering high-quality software solutions. Experienced in developing web applications using HTML, PHP,JAVA and other technologies. Proven ability to collaborate effectively with cross-functional teams, while also working independently to meet tight deadlines.">
    <title><?php echo $tittle ?></title>
  
<meta property="og:type"               content="website"/>
<meta property="og:title"              content="<?php echo $username ?>"/>
<meta property="og:description"        content="A highly motivated and skilled full stack developer with a strong focus on delivering high-quality software solutions." />
<meta property="og:image" content="https://gatmediagh.com/adm/<?php echo $image?>"/>

  <!-- Favicons -->
  <link href="assets/img/gatmedia.png" rel="icon">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>