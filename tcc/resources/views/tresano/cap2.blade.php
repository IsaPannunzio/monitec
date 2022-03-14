<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="../../https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/resume.min.css" rel="stylesheet">

   <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  </head>

  <body id="page-top">
  <a href="http://127.0.0.1:8000/perfil/2ano" class="back-to-home"><i class="fa fa-book"></i></a>
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
            <a class="nav-link js-scroll-trigger" href="#about">Monitoria - Capítulo 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Matemática</a>
          </li>
        </ul>
      </div>
    </nav>

  

      <br>
    <h4>  &nbsp;&nbsp;&nbsp;&nbsp;Bem vindo Sr(a)' {{ Auth::user()->name }}</h4>
    <br>
    <h3>  &nbsp;&nbsp;&nbsp;Monitoria do Capítulo 2 - Matemática </h3>
      <br>
     
      <center><iframe src="https://onedrive.live.com/embed?cid=2127A8DE6BB5953D&resid=2127A8DE6BB5953D%215515&authkey=AI0EEJCWUIFYYzY&em=2" width="800" height="650" frameborder="0" scrolling="no"></iframe></center>
  </div>
  <a href="/perfil/tresano/cap1" class="back-to-left"><i class="fa fa-chevron-left"  aria-hidden="true"></i>
  <a href="/perfil/tresano/cap3" class="back-to-top"><i class="fa fa-chevron-right"  aria-hidden="true"></i>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/resume.min.js"></script>

  </body>

</html>
