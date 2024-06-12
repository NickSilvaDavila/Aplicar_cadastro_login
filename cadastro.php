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

        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }

        .btn-primary {
            background-color: #6a82fb;
            border: none;
        }

        .btn-primary:hover {
            background-color: #fc5c7d;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.7);
        }

        .nav-link:hover, .nav-link.active {
            color: white;
        }

        footer p a {
            color: #6a82fb;
            text-decoration: none;
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
            <h3 class="float-md-start mb-0">Cadastro</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link" href="index.php">Início</a>
                <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                <a class="nav-link active" aria-current="page" href="login.php">Log in</a>
            </nav>
        </div>
    </header>

    <main class="px-3">
        <h1>Cadastre-se</h1>
        <form action="processar_cadastro.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </main>

    <footer class="mt-auto text-white-50">
        <p>Template obtido no <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, criado por <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
        <p>Projeto feito por <a href="https://github.com/NickSilvaDavila" class="text-white">@NickSilvaDavila</a>.</p>
    </footer>
</div>

</body>
</html>
