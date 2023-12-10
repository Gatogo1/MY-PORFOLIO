<!DOCTYPE html>
<html lang="en">
<?php
include '../conn.php';
   $pageName='Restaurant Website';

   $postid='0';
   
      include('../pagview.php');
?>
<head>
    <meta charset="utf-8">
    <title>Gatogo Restaurant Project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="My restorant Portfolio">
    <meta name="keywords" content="restaurant,html,css,bootstrap,JavaScript">

    <meta name="author" content="Gatogo Daniel">
    <meta content="" name="keywords">
    <meta name="author" content="Gatogo Daniel">
    <meta property="og:image" content="img/rest.jpg" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="googlebot" content="notranslate">
      <meta name="description" content="This is a free restaurant website template design It is perfect for small restaurants, cafes, bars, and other businesses that want to showcase their menus online. It is easy to use and customize, and the template is SEO-optimized to help customers find your business online.">

    
  <meta property="og:type"               content="Website" />
  <meta property="og:title"              content="Restaurant Website" />
  <meta property="og:description"        content="This is a free restaurant website template design It is perfect for small restaurants, cafes, bars, and other businesses that want to showcase their menus online. It is easy to use and customize, and the template is SEO-optimized to help customers find your business online." />
  <meta property="og:image" content="img/rest.jpg" />
    
    <!-- favicon -->
    <link rel=icon href="img/gatmedia.png" sizes="20x20" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class=" position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 style="color:#a90b67 ;"   class="m-0"><i class="fa fa-utensils me-3"></i>Gatmedia</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a style="background-color:#a90b67 ;" href="" class="btn text-white  py-2 px-4">Book A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">At Gatmedia, we are dedicated to providing you with an unforgettable dining experience. Our restaurant offers a wide range of delectable dishes, exceptional service, and a cozy atmosphere.</p>
                            <a style="background-color:#a90b67 ;" href="" class="btn text-white py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                            <p>You can contact me for the complete Version</p>
                            <a style="background-color:#0b13a9 ;" href="https://wa.link/0lndfv" class="btn text-white py-sm-3 px-sm-5 me-3 animated slideInLeft">Let Talk</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


              <!-- Menu Start -->
              <div  id="menu"class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5  style="color:#a90b67 ;" class="section-title ff-secondary  text-center  fw-normal">Food Menu</h5>
                        <h1 class="mb-5">Most Popular Items</h1>
                    </div>
                    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                    <i  style="color:#a90b67 ;" class="fa fa-coffee fa-2x "></i>
                                    <div class="ps-3">
                                        <small class="text-body">Popular</small>
                                        <h6 class="mt-n1 mb-0">Breakfast</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                    <i  style="color:#a90b67 ;"  class="fa fa-hamburger fa-2x "></i>
                                    <div class="ps-3">
                                        <small class="text-body">Special</small>
                                        <h6 class="mt-n1 mb-0">Launch</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                    <i style="color:#a90b67 ;"  class="fa fa-utensils fa-2x "></i>
                                    <div class="ps-3">
                                        <small class="text-body">Lovely</small>
                                        <h6 class="mt-n1 mb-0">Dinner</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content ">
                            <div id="tab-1" class="tab-pane fade show p-0 active   ">
                               
                                <div class="owl-carousel owl-theme">
                                    <div  class=" item  ">
                                        <div class="card " style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/koko.jpg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title">HAUSA KOKO</h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>1 cup of Koko & Kose</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵10</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>2 cups of koko,bread and 1 egg</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵15</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
        
                                    <div  class="  item">
                                        <div class="card" style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/Indomie.jpg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title">Indomie</h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>( Superpack) Indomie, 1 Egg, Sardine, Canned Beef</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵10</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>(Hungry Man) Indomie, 2 Eggs, Sardine, <br> Canned Beef, Fried Chicken, Veges</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵20</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
        
                                    <div  class=" item">
                                        <div class="card" style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/watche.jpeg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title"> Waakye</h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>1 cup of waakye,beef, egg <br>wele,spaghettigari, & plantain</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵20</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>2 cups of waakye,fish/chicken, beef,wele,spaghetti, <br>gari,plantain/avocado, & salad.</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵30</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
                         

                                
                                    <div class="card " style="  border-style: solid;
                                    border-color:#a90b67 ; border-radius: 15px 50px;">
                                        <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/koko.jpg" alt="Card image" style="width:100%">
                                        <div class="card-body">
                                          <h4 style="color:#a90b67 ;" class="card-title">HAUSA KOKO</h4>
                                          <table class="table">
                                            <thead class="thead-dark">
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Menu</th>
                                                <th scope="col">Price</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>1 cup of Koko & Kose</td>
                                                <td><h6 style="color:#a90b67 ;"  >₵10</h6></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>2 cups of koko,bread and 1 egg</td>
                                                <td><h6 style="color:#a90b67 ;"  >₵15</h6></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          
                                          <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="owl-carousel owl-theme">
                                    <div  class="item ">
                                        <div class="card" style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/jolof.jpg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title">Jolof Rice</h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>1 cup of Jolof,beef,egg or sausage,wele,spaghetti,salad, & plantain</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵20</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>2 cups of Jofof,fish/chicken, beef,wele,<br>spaghetti,gari,plantain/avocado, & salad.</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵40</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
        
                                    <div  class="item ">
                                        <div class="card" style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/ban.jpg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title">Banku With Tilapia</h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>1 ball of banku with 1 Tilapia</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵20</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>2 ball of banku with 2 Tilapia</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵35</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
        
                                    <div  class="item ">
                                        <div class="card" style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/bens.jpeg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title">Beans with plantain</h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>1 cup of Beans & plantain with egg</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵10</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>2 cups of Beans & plantain with egg</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵30</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
                                   </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="owl-carousel owl-themitem">
                                    <div  class="item ">
                                        <div class="card" style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/fufu.jpeg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title">Fufu with Ligth soup/palm nut soup/Granut</h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>1 ball of Fufu with  3 Goat meat</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵30</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>2 balls of Fufu with  4 Goat meat</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵40</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
        
                                    <div  class="item ">
                                        <div class="card" style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/ser.jpg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title">Banku with Palm nut soup</h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>1 ball of banku with fish and goat meat</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵20</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>2 balls of banku with fish and goat meat</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵30</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
        
                                    <div  class="item ">
                                        <div class="card" style="  border-style: solid;
                                        border-color:#a90b67 ; border-radius: 15px 50px;">
                                            <img  style="border-radius: 15px 50px;"class="card-img-top" src="img/yam.jpg" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                              <h4 style="color:#a90b67 ;" class="card-title">Boiled yam </h4>
                                              <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>4 balls of Boiled yam with 3 eggs</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵10</h6></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>6 balls of Boiled yam with 5 eggs</td>
                                                    <td><h6 style="color:#a90b67 ;"  >₵30</h6></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              
                                              <a style="background-color:#a90b67 ;"  href="" class="btn  text-white">Order</a>
                                            </div>
                                          </div>
                                    </div>
                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div id="service" class="container ">
                <h4 style="color:#a90b67 ;" class="text-center mb-4">Services</h4>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i style="color:#a90b67 ;" class="fa fa-3x fa-user-tie  mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i style="color:#a90b67 ;" class="fa fa-3x fa-utensils  mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i style="color:#a90b67 ;" class="fa fa-3x fa-cart-plus  mb-4"></i>
                                <h5>Online Order Delivery</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i style="color:#a90b67 ;" class="fa fa-3x fa-headset mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


  


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                
                <div class="col-md-12 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5  style="color:#a90b67 ;" class="section-title ff-secondary text-start  fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1">
                                          <option value="1">People 1</option>
                                          <option value="2">People 2</option>
                                          <option value="3">People 3</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button   style="background-color:#a90b67 ;" class="btn text-white w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Reservation Start -->



        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5  style="color:#a90b67 ;" class="section-title ff-secondary text-center  fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i  style="color:#a90b67 ;" class="fa fa-quote-left fa-2x  mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i  style="color:#a90b67 ;" class="fa fa-quote-left fa-2x  mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i  style="color:#a90b67 ;" class="fa fa-quote-left fa-2x  mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i  style="color:#a90b67 ;" class="fa fa-quote-left fa-2x  mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

        <!-- About Start -->
        <div id="about" class="container-xxl py-5">
            <div class="container">
                <h4 style="color:#a90b67 ;" class="text-center mb-4">About Us</h4>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div   class="col-6 text-start">
                                <img class="img-fluid rounded w-80 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div  class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div  class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div  class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 style="color:#a90b67 ;"  class="section-title ff-secondary text-start  fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i style="color:#a90b67 ;"  class="fa fa-utensils me-2"></i>Restoran</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div style="color:#a90b67 ;"  class="d-flex align-items-center border-start border-5 px-3">
                                    <h1 style="color:#a90b67 ;"  class="flex-shrink-0 display-5  mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 px-3">
                                    <h1  style="color:#a90b67 ;"  class="flex-shrink-0 display-5  mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a  style="background-color:#a90b67 ;"  class="btn text-white py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4  style="color:#a90b67 ;" class="section-title ff-secondary text-start  fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4  style="color:#a90b67 ;" class="section-title ff-secondary text-start fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Accra Ghana</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+233 540 9485</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>boyamg32@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4  style="color:#a90b67 ;" class="section-title ff-secondary text-start  fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4  style="color:#a90b67 ;" class="section-title ff-secondary text-start  fw-normal mb-4">Send message</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="" style="max-width: 400px;">
                            <input class="form-control  w-100 py-3 ps-4 pe-5" type="text" placeholder="Name">
                            <input class="form-control  w-100 py-3 ps-4 pe-5" type="text" placeholder="Email">
                            <input class="form-control  w-100 py-3 ps-4 pe-5" type="text" placeholder="Subject">
                            <input  style="color:#a90b67 ;" type="submit" class="btn form-control">
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://gatmedia/sofware">Gatmedia</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://gatmedia/sofware">Gatogo Daniel</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a  style="background-color:#a90b67 ;"  href="#" class="btn btn-lg   btn-lg-square back-to-top"><i class="bi text-white bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>