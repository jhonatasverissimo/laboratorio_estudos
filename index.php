<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://kit.fontawesome.com/9764beb5be.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-- Navegação -->
  <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="#">
      <img src="css/imagens/Mente_Criativa.png" class="fluid" width="300px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#link" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="link">
      <ul class="navbar-nav  ml-auto">
        <li class="nav-item ">
          <a class="nav-link text-center active" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#"> Serviços
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center btn btn-outline-warning  ml-4" href="login.php">Entrar</a>
        </li>  
      </ul>
    </div>
  </nav>
  <!-- navegação -->

  <!-- Carroussel -->
  <section>
        <div class="container-fluid">
            <div id="controle" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    
                    <!-- Item 1 -->
                    <div class="carousel-item active">
                        <div class="container">
                          <div class="row">
                            <div class="col d-flex pt-5 pb-5">
                                <div class="align-self-center">
                                <center>
                                    <h1 class="display-4">Sua escola ainda não possui uma plataforma?</h1>
                                    <p class="display-5">O laboratório de estudos te ajuda com isso.</p>
                                    <button class="btn btn-outline-warning">Saiba mais</button>
                                </center>
                                </div>
                              </div>
                            <div class="col d-none d-md-block">
                                <img src="css/imagens/velocidade.png" class="img-fluid" alt="">
                            </div>
                          </div>
                        </div> 
                    </div>
                    <!-- Item 1 -->
                    <!-- Item 2 -->
                    <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col d-flex pt-5 pb-5">
                                <div class="align-self-center">
                                <center>
                                    <h1 class="display-4">Obtenha capacitação conosco!</h1>
                                    <p class="display-5">O laboratório de estudos te ajuda com isso.</p>
                                    <button class="btn btn-outline-warning">Saiba mais</button>
                                </center>
                                </div>
                            </div>
                            <div class="col d-none d-md-block">
                                <img src="css/imagens/velocidade.png" class="img-fluid" alt="">
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                </div>
                
                <!-- Controles -->
                <a class="carousel-control-prev" href="#controle" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#controle" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
  <!-- Carroussel -->

  <!-- SEÇÃO HOMEL -->
  <div class="home bg-warning">
    <div class="container  pt-5 pb-5 borda">
      <div class="row" >
        <div class="col d-flex">
          <div class=" col-12 text-center pt-5 pb-5">
            <h1 class="display-3">Laboratório de estudos</h1> 
            <p class="display-4 mt-5">Um ambiente feito amplamente para alunos e escolas!</p>
          </div>  
        </div>
      </div>
      <div class="row text-center">
        <div class="col">
              <button class="btn btn-primary mr-5 p-3">Escolas</button>
              <button class="btn btn-primary p-3">Alunos</button>
            </div>
        </div>
    </div>
  </div>
  <!-- FIM DA SEÇÃO HOME -->
  

  <!-- PARA A ESCOLA ESCOLA -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <h1 class="display-1"> Para as escolas</h1>
        <p></p>
      </div>
    </div>
  </section> 
  <!-- PARA A ESCOLA-->
  
  <!-- BENEFICIOS -->
  <section>
    <div class="container text-center bg-white">
      <div class="row pb-5 pt-5">
        <div class="col-md-4 pt-5 pb-5">
        <img src="css/imagens/velocidade.png" alt="" width="150px">  
        <h2>Facilidade</h2>
        <p>A melhor maneira de você introduzir uma plataforma em sua escola</p>
        </div>
        <div class="col-md-4 pt-5 pb-5">
         <img src="css/imagens/dinheiro.png" alt="" width="150px">
         <h2>Custo benefício</h2>
         <p> Uma ótima ferramenta com umd com custo benefício</p>
        </div>
        <div class="col-md-4 pt-5 pb-5">
          <img src="css/imagens/gerenciamento.png" alt="" width="150px">
          <h2>Gerencimento simples</h2>
          <p>Personalize sua área de alunos de acordo com sua unidade</p>
        </div>
      </div>
    </div>
  </section>
  <!--  BENEFICIOS  -->

  <!-- RODAPÉ -->
  <footer>
    <div class="container-fluid pt-3 pb-3 bg-dark navbar-light">
      <div class="row">
        <div class="col-12 text-center display-5 text-white">
          Todos os direitos servados!
        </div>
      </div>
    </div>
  </footer>
  <!-- RODAPÉ -->
  
  <script src="jquery/jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>