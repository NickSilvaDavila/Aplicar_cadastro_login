<?php
$nomeDoLink = "GitHub";
$urlDoLink = "https://github.com/NickSilvaDavila/Aplicar_cadastro_login";
?> 

<!DOCTYPE html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade Cadastro e Login</title>

    <style>
      body {
        background: linear-gradient(135deg, #1f1c2c, #928dab);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: white;
      }

      .cover-container {
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 15px;
        padding: 30px;
      }

      .nav-link {
        color: rgba(255, 255, 255, 0.7);
        transition: color 0.2s;
      }

      .nav-link:hover, .nav-link.active {
        color: white;
      }

      .lead a {
        color: #6a82fb;
        text-decoration: none;
        transition: color 0.2s;
      }

      .lead a:hover {
        color: #fc5c7d;
      }

      footer p a {
        color: #6a82fb;
        text-decoration: none;
        transition: color 0.2s;
      }

      footer p a:hover {
        color: #fc5c7d;
      }
    </style>
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Início</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        <a class="nav-link" href="cadastro.php">Cadastre-se</a>
        <a class="nav-link" href="login.php">Log-in</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Seja bem-vind@</h1>
    <p class="lead">Esta é a página principal desenvolvida para uma atividade avaliativa do segundo trimestre na disciplina de Programação Web.</p>
    <p class="lead">
      <a href="<?php echo $urlDoLink; ?>" class="btn btn-primary">Visite meu <?php echo $nomeDoLink; ?></a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Template obtido no <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, criado por <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
    <p>Projeto feito por <a href="https://github.com/NickSilvaDavila" class="text-white">@NickSilvaDavila</a>.</p>
  </footer>
</div>

  </body>
</html>
