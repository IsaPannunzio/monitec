@extends('layouts.designhome')
@section('content')

</div>
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Bem Vindo a Monitec!</h2>
                <p>Um site de monitoria dedicado aos alunos da escola ETEC Pedro Ferreira Alves.</p>
                <a href="http://127.0.0.1:8000/perfil" class="btn-get-started scrollto">Conheça as monitorias</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Bem Vindo a Monitec!</h2>
                <p>Também estamos nas redes sociais</p>
                <a href="https://www.facebook.com/monitec2/?modal=admin_todo_tour" class="btn-get-started scrollto">veja!</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Bem Vindo a Monitec!</h2>
                <p>Veja como ultilizar os serviços do site.</p>
                <a href="#services" class="btn-get-started scrollto">Aqui</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>

      </div>
    </div>
  </section>

  <main id="main">




    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Sobre nós</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="fa fa-question"></i></div>
              </div>
              <h2 class="title"><a href="#">O Que é a Monitec</a></h2>
              <p>
              A Monitec é uma plataforma online de auxílio à monitoria da escola ETEC Pedro Ferreira Alves (Mogi-Mirim). Visando a praticidade e a simplicidade, o site conta com diversos recursos para facilitar o aprendizado dos estudantes, tais como:
              resumos dos capítulos dos livros didáticos, vídeo aulas, listas de exercícios elaboradas po professores e arquivos disponibilizados pelos próprios usuários do site.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Como Surgiu</a></h2>
              <p>
              A Monitec surgiu como um projeto de TCC de um grupo de alunos da escola ETEC Pedro Ferreira Alves, da turma de informática para a internet de 2018.
              A princípio, o objetivo do time era desenvolver um sistema de educação à distância, para possibilitar a prática online da Monitoria realizada entre os alunos.
              Porém, devido a alguns empecilhos, esse fim só será alcançado se a equipe decidir dar continuidade ao projeto após o término do ano letivo.
              </p> 
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Como Utilizar</a></h2>
              <p>
              Para ter acesso ao material didático disponibilizado pelo site, é obrigatório estar logado em uma conta Monitec. 
O cadastro e a utilização da plataforma são totalmente gratuitos, o conteúdo oferecido é eficiente e de fácil entendimento, além de ser regularmente atualizado e verificado pelos administradores do site.
 Os usuários também podem enviar e baixar arquivos de outros utilizadores da plataforma. 


              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Política do Site</h3>
          <p>Esse website foi desenvolvido para o projeto de TCC dos alunos do 3º EMIA (2018) da escola Etec Pedro Ferreira Alves e está em constante atualização, com a finalidade de oferecer um serviço de monitoria gratuito.</p>
        </header>

        <div class="row">

          <div class="col-lg-6 col-md-4 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h5 class="title"><a href="">Política de Conteúdo</a></h5>
            <p class="description">Todo o conteúdo desse website, tal como textos, imagens, gráficos, video, desenhos, ícones, informações, dados e demais materiais ("Conteúdo"), será disponibilizado com caráter meramente informativo. Desta forma, de acordo com este Termo de uso, você somente poderá utilizar o Conteúdo desse website para obter informações para uso próprio. É vedado ao usuário distribuir, publicar, transmitir ou modificar qualquer título desse site para outra finalidade.
É vedado ao usuário disponibilizar conteúdo que possa conter qualquer malefício aos demais usuários e a própria Monitec.
</p>
          </div>
          <div class="col-lg-6 col-md-4 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h5 class="title"><a href="">Garantias e Responsabilidades</a></h5>
            <p class="description">Você, como usuário, aceita e reconhece que toda a conexão com a Internet e os outros recursos de telecomunicações utilizados pela Monitec são fornecidos por terceiros provedores de serviços, e o website não garante e não será de qualquer forma responsável por qualquer falha ou interrupção nos serviços prestados pelos referidos provedores, nem por qualquer perda ou responsabilidade resultante de falha ou interrupção nos serviços prestados por terceiros ao website.
Você, como usuário, concorda com a Política do Site e aceita obedecer às regras da Política de Conteúdo.</p>
          </div>

          <div class="col-lg-6 col-md-4 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h5 class="title"><a href="">Direitos da Monitec</a></h5>
            <p class="description">O conteúdo intelectual deste site constitui direito autoral de propriedade intelectual da Monitec.
Os conteúdos de outros usuários que são ou possam ser apresentadas nesse website pertencem respectivamente a seus respectivos proprietários.
</p>
          </div>
          
          <div class="col-lg-6 col-md-4 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h5 class="title"><a href="">Alterações</a></h5>
            <p class="description">A Monitec poderá alterar ou complementar o presente termo a qualquer momento.
Se for de seu interesse, visite essa página periodicamente, com o objetivo de acompanhar eventuais modificações que venham a ser realizadas nesse documento. 
</p> 
</div>
          <div class="col-lg-6 col-md-4 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <p class="description">O presente termo é regido pelas leis da República Federativa do Brasil.</p>
          </div>

        </div>

      </div>
    </section>
   
   
   
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Veja o que estão dizendo</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Lucas Delfini</h3>
            <h4>3° EMIA</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Incrível, muito bom! É bem melhor por aqui.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Silvio Raphael</h3>
            <h4>3° EMIA</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Um site que ajudou muito durante os estudos. E com ele pude melhorar as materias que tive mais dificuldade.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Matheus</h3>
            <h4>3° EMIA</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              inovador o site mudou a forma como eu estudo. unindo o util com o agradavel
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Sandy</h3>
            <h4>3° EMIA</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                o site me ajudou muito na escola, Recomendo a todos o que precissam de ajuda!
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>Iris</h3>
            <h4>3° EMIA</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Otimo arrasei no vestibular!
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>

    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Equipe</h3>
          <p>A Monitec foi desenvolvida por uma equipe que conta com 6 integrantes com funções preestabelecidas. A seguir estão os contatos e a colaboração de cada um com o projeto.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/Bru.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bruna F. de Oliveira</h4>
                  <span>Banco de Dados</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-5.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gabriel Franco</h4>
                  <span>Documentação</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-6.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Graziela Anacleto</h4>
                  <span>Banco de Dados e Organização</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/Isa.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Isabella Menato</h4>
                  <span>Programação e Design</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


           		   <div class="row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Lucas Delfini</h4>
                  <span>Programação</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Micael Rogério</h4>
                  <span>Design</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<br>        

			
      </div>
	  
	

    </section>
	
	 <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Principais Dúvidas</h3>
              <h5>Por que a Monitec precisa das minhas informações?</h5>
              <p class="description">O site Monitec necessita de algumas informações básicas do usuário (nome, endereço de e-mail e senha) para que seja capaz de autenticar seu vínculo com a escola Etec Pedro Ferreira Alves (Mogi-Mirim) e para que seja possível diferenciá-lo dos demais usuários.</p>
              <h5>Minhas informações estão seguras?</h5>
              <p class="description">Suas informações estão seguras em nosso site. Os dados dos usuários não serão revelados a terceiros e além disso a Monitec conta com um sistema de armazenamento altamente seguro e em constante monitoramento pelos desenvolvedores do site.</p>
              <h5>O serviço de monitoria oferecido pela Monitec é gratuito?</h5>
              <p class="description">O serviço de monitoria oferecido pelo site Monitec é gratuíto e voluntário, sendo executado apenas por estudantes com a ambição de realizar a função de acompanhar e auxiliar outros alunos em seus estudos, espontâneamente e de bom grado.</p>
              <h5>Como faço o download de algum arquivo do site?</h5>
              <p class="description">Há um botão de download embaixo de cada arquivo disponível no site. Após clicar no o botão, irá aparecer uma mensagem de confirmação de download. Clique em "aceitar" e selecione o local onde o arquivo será baixado.</p>
              <h5>Por que o arquivo que eu "upei" não aparece no meu perfil?</h5>
              <p class="description">Todos os itens "upados" na Monitec passam por um processo seletivo antes de aparecerem no site. Se um arquivo "upado" ainda não apareceu, ele provavelmente não foi verificado pelos nossos administradores ou contém algum item considerado indevido de acordo nossa política.</p>
              <h5>Como faço upload de algum arquivo no site?</h5>
              <p class="description">Logado na sua conta Monitec, clique em seu perfil (localizado no menu do site) e depois na categoria "monitor", então escolha a opção "upload", selecione o arquivo desejado e aguarde na mesma página até que o mesmo termine de ser enviado(caso contrário poderá ocorrer algum erro).</p>

      </div>
    </section>

    
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Fale Conosco</h3>
          <p>Nos envie seu feedback!</p>
        </div>

        

             <center><form method="post" action="{{action('ContactController@submit')}}">

  @csrf
 
  <div class="col-md-10">
  <div class="form-group">
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
      </div>
      </div>
 
      <div class="col-md-10">
      <div class="form-group">
        <input type="text" id="email" name="email" class="form-control" placeholder="E-Mail">
      </div>
      </div>
 
      <div class="col-md-10">
      <div class="form-group">
        <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Mensagem"></textarea>
      </div>
      </div>
 
      <button type="submit" class="btn btn-info btn-md">Enviar</button>
 
    </form></center>

        </div>

      </div>
    </section>

  </main>

@endsection('content')
