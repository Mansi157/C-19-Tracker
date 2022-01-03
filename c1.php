<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>C-19 Tracker</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/6.png" rel="icon">
  <link href="assets/img/6.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">-->

  <!-- =======================================================
  * Template Name: Ninestars - v4.5.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background: #b3c7e5;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html" style="font-weight: bold; color: #d84315;"><span>C-19 Tracker<img  src="assets/img/10.png"></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html" style="font-weight: bolder;font-size: 18px;">Home</a></li>
          <li><a class="nav-link scrollto active" href="#services" style="font-weight: bolder;font-size: 18px;">India Update</a></li>
          <li><a class="nav-link scrollto" href="c2.php" style="font-weight: bolder;font-size: 18px;">ALL Update</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= 
  <section id="hero" class="d-flex align-items-center">-->

   <section class="corona_update container-fluid" class="d-flex align-items-center" style="background: #c0cee4;">
    <div class="mb-5">
         <!-- <h3 class="text-uppercase text-center " style="color: red;font-weight: bold;
          font-size: 54px;">COVID-19  Live Update of INDIA</h3>-->
    </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" style="color:black; font-weight:bolder;" >
            <tr>
              <th class="text-capitalize">date/time</th>
              <th class="text-capitalize">state</th>
              <th class="text-capitalize">confirmed</th>
              <th class="text-capitalize">active</th>
              <th class="text-capitalize">recovered</th>
              <th class="text-capitalize">deaths</th>
              
            </tr>
                <?php
                  $data=file_get_contents('https://api.covid19india.org/data.json');
                  $coronalive=json_decode($data,true);

                  $statescount =count($coronalive['statewise']);

                  $i=1;
                  while($i< $statescount){
                       

                       ?>
                       <tr>
                            
                            <td class="t"><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>
                            <td class="t2"><?php echo $coronalive['statewise'][$i]['state'] ?> </td>
                            <td class="t3"><?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
                            <td class="t4"><?php echo $coronalive['statewise'][$i]['active'] ?> </td>
                            <td class="t5"><?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
                            <td class="t6"><?php echo $coronalive['statewise'][$i]['deaths']  ?> </td>
                       </tr>
                 
                      
                      <?php 
                    $i++;
                  }

                ?>

          </table>


  </section><!-- End Hero -->
 <!-- ======= Footer ======= -->
 <!-- <footer id="footer" style="background-color: #c0cee4;">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <img class="img" src="assets/img/8.png "  height="280" class="img-fluid animated" alt="" style="">
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="font-weight: bold; color: #d84315;">C-19 Tracker<img src="assets/img/10.png" width="30px" height="30"></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
          
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
           <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            
          </div>

        </div>
      </div>
    </div>
  </footer>-->

  



</body>

</html>