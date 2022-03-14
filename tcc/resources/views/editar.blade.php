
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Editar</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="../../css/login.css" rel="stylesheet">
  
    
      


    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<a href="http://127.0.0.1:8000/inicio" class="back-to-home"><i class="fa fa-home"></i></a>

 <div class="wrapper">
  <br> 
<form enctype="multipart/form-data" action="/editar" method="POST" class="login"><br>
<label>Atualizar imagem de Perfil</label><br><br>
<a href="#"> <img class="rounded-circle mx-auto " src="/uploads/avatars/{{ Auth::user()->avatar }}" width="150px"></a>
<br><br>
<input type="file" name="avatar">
@if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

<input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Atualizar') }}
                                </button>
                            </div>
                        </div>

</form>            
                

                      
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>