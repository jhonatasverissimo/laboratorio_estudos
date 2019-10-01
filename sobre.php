<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light">

    <a class="navbar-brand" href="index.php">
      <img src="css/imagens/Mente_Criativa.png" class="fluid" width="300px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#link" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="link">
      <ul class="navbar-nav  ml-auto">
        <li class="nav-item ">
          <a class="nav-link text-center active" href="index.php">Inicio</a>
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

    <!-- Descrição -->
    <section>
        <div class="container">
            <div class="row pt-5">
                <h1 class="display-4">Mente Criativa</h1>
                <p class="pt-3" style="font-size:20px;">
                    Nós somos o grupo mente criativa, nosso grupo foi criado
                    em 2018, para uma trabalho de conclusão de curso, atualmente 
                    nosso foco é o projeto laboratório de estudos.
                    Ele é uma projeto que visa ajudar escolas profissionalizantes a 
                    terem sua própria plataforma. Hoje nossa equipe se localiza na 
                    baixada santista, mas pretendemos expandir nossos serviços em uma futuro próximo.
                </p>
            </div>
        </div>
    </section>

    <!-- Equipe-->
    <section>
        <div class="container">
            <div class="row">
                <h1 class="mt-5 pt-5 pb-5 display-4">Equipe de trabalho</h1>
            </div>
            <div class="row text-center">
                <div class="card ml-1" style="width: 15rem;">
                    <img src="css/imagens/amanda.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Amanda Andrade Souza</p>
                    </div>
                </div>
                <div class="card ml-1" style="width: 15rem;">
                    <img src="css/imagens/jhonatas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Jhonatas Verissimo</p>
                    </div>
                </div>
                <div class="card ml-1" style="width: 15rem;">
                    <img src="css/imagens/marcos.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Marcos Felipe</p>
                    </div>
                </div>
                <div class="card ml-1" style="width: 15rem;">
                    <img src="css/imagens/ryan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ryan Lima</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="jquery/jquery-3.4.1.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>