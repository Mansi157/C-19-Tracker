<!DOCTYPE html>
<html>
<head >
  <title>Corona updates</title>
  <meta charset="utf-8">

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
  
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body onload="fetch()" style="background:#c0cee4;">
  <header id="header" class="fixed-top d-flex align-items-center" style="background: #c0cee4;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html" style="font-weight: bold; color: #d84315;"><span>C-19 Tracker<img  src="assets/img/10.png"></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html" style="font-weight: bolder;font-size: 18px;">Home</a></li>
          <li><a class="nav-link scrollto" href="c1.php" style="font-weight: bolder;font-size: 18px;">India Update</a></li>
          <li><a class="nav-link scrollto active" href="c2.php"style="font-weight: bolder;font-size: 18px;">ALL Update</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  


<div class="main_header">

  <!-- *********** Corona update *************** -->
  <section class="corona_update container-fluid">
    <div class="mb-3">
          <h3 class="text-uppercase text-center " style="color: red;font-weight: 999;
          font-size: 45px;">COVID-19  Live  Data Update</h3>
    </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
              <th>Country</th>
              <th>TotalConfirmed</th>
              <th>TotalRecovered</th>
              <th>TotalDeaths</th>
              <th>NewConfirmed</th>
              <th>NewRecovered</th>
              <th>NewDeaths</th>
            </tr>
          </table>
          
        </div>
  </section>
 
  
<!--</div class="container scrolltop float-right pr-5">
     <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn" ></i>

     <script>
      
      mybutton = document.getElementById("myBtn");

     // When the user scrolls down 20px from the top of the document, show the button
     window.onscroll = function() {scrollFunction()};

     function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
      } else {
    mybutton.style.display = "none";
      }
     }

        // When the user clicks on the button, scroll to the top of the document
     function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

     </script>
<div>
  
</div>-->



<!--------------- footer -------------------

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>copyright by Mansi Priya</p>
  </div>
</footer>-->

<script>



function fetch(){
  $.get("https://api.covid19api.com/summary",

    function(data){
      //console.log(data['Countries'].length);
      var tbval=document.getElementById("tbval");

      for(var i=1; i<(data['Countries'].length); i++){
        var x=tbval.insertRow();
        x.insertCell(0);
        tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background='#7a4a91';
        tbval.rows[i].cells[0].style.color='#fff';

        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background='#4bb7d8';

                x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background='#4bb7d8';

                x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background='#f36e23';

                x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background='#4bb7d8';

                x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background='#9cc850';

                x.insertCell(6);
        tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background='#f36e23';

      }
    }

  );
}
</script>

<!--<footer id="footer" style="background-color: #f7f2f0;">
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

