<!DOCTYPE html>
<html lang="br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil-ADM</title>

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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Seu nome</span>
        <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/uploads/avatars/default.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav">
	
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Enviadas</a>
          </li>

        </ul>
      </div>
    </nav>
    
<a   class="back-to-home" href="{{ route('logout') }}" 
              onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
           {{ __('X') }}
      </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                                </div>
          </li>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">
            <span class="text-primary">Administrador</span>
          </h1>
          <div class="subheading mb-5">
            <a href="mailto:name@email.com"></a>
          </div>
          <p class="lead mb-5">Abaixo você encontra todas as monitorias postadas por usuarios da Monitec para baixar e analisar 
          <br>
          selecione uma e baixe para colocar nos Padrões do site
          </p>

        </div>
      </section>

      <hr class="m-0">

          <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Enviados pelos usuários</h2>

         <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top figure-img img-fluid rounded" src="img/documento.jpg"> 
                    <div class="card-body">
                    <b><p> Email </p></b>
                      <p class="card-text"> {{ Auth::user()->email }} </p>
                      <b><p> Mensagem </p></b>
                      <p class="card-text"> {{$post -> mensagem}} </p>
                      <b><p> Ano </p></b>
                      <p class="card-text"> {{$post -> ano}} </p>
                      <b><p> Materia </p></b>
                      <p class="card-text"> {{$post -> tipo}} </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                          <a type="button" class="btn btn-sm btn-outline-secondary" href="perfil/download/{{$post->id}}">Download</a>
                        <form method="POST" action="/arquivo/{{$post->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="delete"> 
                            &nbsp; <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>

    </main>

      </section>


     
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
