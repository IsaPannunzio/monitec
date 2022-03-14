<!DOCTYPE html>
<html lang="pt br">
<head>
  <meta charset="utf-8">
  <title>Monitec</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/resume.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

 <body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
  <a class="navbar-brand js-scroll-trigger" href="#page-top">
    <span class="d-block d-lg-none">Seu nome</span>
    <span class="d-none d-lg-block">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="">
    </span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav">
    
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#experience">Monitoria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#education">Envie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
      </li>
    </ul>
  </div>
</nav>
       
                            
                     
            
      </nav>
    </div>
    
  </header><!-- #header -->
    
  <section id="portfolio"  class="section-bg" >
      <br><br>
  <div class="container">

<header class="section-header">
  <h3 class="section-title">Materias</h3>
</header>

<div class="row">
  <div class="col-lg-12">
    <ul id="portfolio-flters">
      <li data-filter="*" class="filter-active">Todas</li>
      <li data-filter=".filter-app">Matematica</li>
      <li data-filter=".filter-card">Portugues</li>
      <li data-filter=".filter-web">outras</li>
    </ul>
  </div>
</div>

<div class="row portfolio-container">

  <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/app1.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">App 1</a></h4>
        <p>App</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/web3.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">Web 3</a></h4>
        <p>Web</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/app2.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">App 2</a></h4>
        <p>App</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/card2.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">Card 2</a></h4>
        <p>Card</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/web2.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">Web 2</a></h4>
        <p>Web</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/app3.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">App 3</a></h4>
        <p>App</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/card1.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">Card 1</a></h4>
        <p>Card</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/card3.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">Card 3</a></h4>
        <p>Card</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/web1.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">Web 1</a></h4>
        <p>Web</p>
      </div>
    </div>
  </div>
<div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.3s">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/web1.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 4" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">Matematica</a></h4>
        <p>Web</p>
      </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.3s">
    <div class="portfolio-wrap">
      <figure>
        <img src="../../img/portfolio/web1.jpg" class="img-fluid" alt="">
        <a href="../../img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="app 4" title="Preview"><i class="ion ion-eye"></i></a>
        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </figure>

      <div class="portfolio-info">
        <h4><a href="#">Matematica</a></h4>
        <p>Web</p>
      </div>
    </div>
</div>

</div>
 

</div>
</section><!-- #portfolio -->





    
    </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../../lib/jquery/jquery.min.js"></script>
  <script src="../../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../lib/easing/easing.min.js"></script>
  <script src="../../lib/superfish/hoverIntent.js"></script>
  <script src="../../lib/superfish/superfish.min.js"></script>
  <script src="../../lib/wow/wow.min.js"></script>
  <script src="../../lib/waypoints/waypoints.min.js"></script>
  <script src="../../lib/counterup/counterup.min.js"></script>
  <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../../lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../../js/main.js"></script>


</body>
</html>