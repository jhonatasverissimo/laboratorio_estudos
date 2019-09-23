<!DOCTYPE html>
<html>
<head>
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

  <!-- Formulário 
  
  <div class="container-fluid bg-dark" id="containerForm">
    <div class="row d-flex">
      <div class=" col-6 align-self-center">
        <form id="frmLogin" class="align-middle">  
          <label for="email">Endereço de email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email"><br>
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha"class="form-control align-middle" placeholder="Digite sua senha"><br>
          <input type="checkbox" name="" class="">
          <label>Visualizar</label><br><br>
          <button class="btn btn-primary ml-auto mr-auto">Logar</button>
        </form>
      </div>
    </div>
  </div>
  -->

  <div class="container mt-5">
    <div class="row d-flex pt-5">
      <div class="col-sm-12 col-md-6 mr-auto ml-auto">
        <form action="" class="form-group p-5 bg-info text-black">
          <label for="email">Endereço de email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email"><br>
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha"class="form-control align-middle" placeholder="Digite sua senha"><br>
          <input type="checkbox" name="" class="">
          <label>Visualizar</label><br><br>

          <!-- Verificar como alinhar sem o center -->
          <center><button class="btn btn-primary ml-auto mr-auto">Logar</button></center>
        </form>
      </div>
    </div>
  </div>
  

  <script src="jquery/jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>