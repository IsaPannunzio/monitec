<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

   <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <a class="nav-link js-scroll-trigger" href="#education">Enviar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Enviados</a>
          </li>
      
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">
            <span class="text-primary">{{ Auth::user()->name }}</span>
          </h1>
          <div class="subheading mb-5">
            <a href="mailto:name@email.com">{{ Auth::user()->email }}</a>
          </div>
          <p class="lead mb-5">Bem-vindo ao seu perfil! Aqui você pode consultar as monitorias já disponibilizadas oficialmente pela equipe Monitec. Além disso, você também pode enviar arquivos de monitorias criadas por você, colaborando com a comunidade. </p>
         
        </div>
      </section>
      <a href="http://127.0.0.1:8000/inicio" class="back-to-home"><i class="fa fa-home"></i></a>
      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="container">
        <div class="my-auto">
        <h2 class="mb-0">
        <span class="text-primary">Monitoria</span>
        </h2> 
          <p> Aqui você encontra todo o conteudo oficial disponibilizado até o momento.</p>
          <br>
</div> 
          <div class="container">
        <div class="row mb-4">

            <div class="col-sm-4">

<div class="card">
    <img class="card-img-bottom" src="/media/1ano.jpg">
    <div class="card-body">
        <h3 class="card-title"> 1° ano </h3>
        <h5 class="card-subtitle mb-2 text-muted"> Monitoria</h5>
        <p>Aqui você encontra todo o conteúdo de Matemática e Português já disponível para o 1° ano até o momento.</p>
        <a  href="/perfil/2ano" <button type="button" class="btn btn-success">Acessar</button></a>
        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#salve">Informação</button>
    </div>
    
</div>



            <!-- Modal -->
                <div id="salve" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Matérias</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                
                            </div>
                            <div class="modal-body">
                                
                                <ul>
                                <li>Some text in modal</li>
                                <li>Some text in modal</li>
                                <li>Some text in modal</li>
                                <li>Some text in modal</li>
                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

  
      

            <div class="col-sm-4">

                <div class="card">
                    <img class="card-img-bottom" src="/media/2ano.jpg">
                    <div class="card-body">
                        <h3 class="card-title"> 2° ano </h3>
                        <h5 class="card-subtitle mb-2 text-muted"> Monitoria</h5>
                        <p>Aqui você encontra todo o conteúdo de Matemática e Português já disponível para o 2° ano até o momento.</p>
                        <a  href="/perfil/2ano" <button type="button" class="btn btn-success">Acessar</button></a>
                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#eae">Informação</button>
                    </div>
                    
                </div>
                <!-- Modal -->
                <div id="eae" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Matérias</h4>
                               
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          

                            </div>
                            <div class="modal-body">
                                <p> • trigonometria na circunferência e funções trigonométricas<br><br> 
                                    • Fórmulas de transformação, Relações e Equações trigonométricas<br><br>
                                    • A estatística<br><br>
                                    • Matrizes e Determinantes<br><br>
                                    • Sistemas Lineares<br><br>
                                    • Área de figuras planas<br><br>
                                    • Análise combinatória<br><br>
                                    • Probabilidade<br><br>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
           
        

           <div class="col-sm-4">

<div class="card">
    <img class="card-img-bottom" src="/media/3ano.jpg">
    <div class="card-body">
        <h3 class="card-title"> 3° ano </h3>
        <h5 class="card-subtitle mb-2 text-muted"> Monitoria</h5>
        <p>Aqui você encontra todo o conteúdo de Matemática e Português já disponível para o 3° ano até o momento.</p>
        <a  href="/perfil/3ano"> <button type="button" class="btn btn-success">Acessar</button></a>
        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#salve">Informação</button>
    </div>
    
</div>
<!-- Modal -->
<div id="salve" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><h4>Matérias</h4>
               
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          

            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Enviar</h2>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Envie aqui a sua monitoria</h1>
          <br>
          <form method="POST" action="/perfil" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group text-left">
              <label for="mensagem"><b>Sua mensagem</b></label>
              <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
            </div>
            
            <div class="form-group text-left">
              <label for="ano"><b>Qual o ano referente a monitoria:</b></label><br>
              <INPUT TYPE="RADIO" id="ano" NAME="ano" VALUE="1° ano"> 1° ano &nbsp; 
              <INPUT TYPE="RADIO" id="ano" NAME="ano" VALUE="2° ano"> 2° ano &nbsp;
              <INPUT TYPE="RADIO" id="ano" NAME="ano" VALUE="3° ano"> 3° ano &nbsp;
            </div>
            
            <div class="form-group text-left">
              <label for="tipo"><b>Qual a materia referente a monitoria:</b></label><br>
              <INPUT TYPE="RADIO" id="tipo" NAME="tipo" VALUE="Matematica"> Matematica &nbsp; 
              <INPUT TYPE="RADIO" id="tipo" NAME="tipo" VALUE="portugues"> portugues &nbsp;
              <INPUT TYPE="RADIO" id="tipo" NAME="tipo" VALUE="Fisica"> Fisica &nbsp;
              <INPUT TYPE="RADIO" id="tipo" NAME="tipo" VALUE="quimica"> Quimica &nbsp;
              <INPUT TYPE="RADIO" id="tipo" NAME="tipo" VALUE="Outros"> Outros &nbsp;
            </div>
            

      



            <div class="custom-file">
              <input type="file" class="custom-file-input" id="arquivo" name="arquivo">
              <label class="custom-file-label" for="arquivo">Escolha um arquivo</label>
            </div>
            <br>
            <p>
              <button type="submit" class="btn btn-primary my-2">Enviar</button>
              <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
            </p>
          </form>
        </div>
      </section>

      

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


      


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
