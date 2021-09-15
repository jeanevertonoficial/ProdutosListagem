<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bem-vindos(a)</title>
    <link rel="stylesheet" href="src/assets/css/reset.css">
    <link rel="stylesheet" href="src/assets/css/style.css">
    <link rel="stylesheet" href="src/assets/css/footer.css">
    <link rel="stylesheet" href="src/assets/css/index.css">
    <link rel="stylesheet" href="src/assets/css/card.css">
    <link rel="stylesheet" href="src/assets/css/cadastrar.css">
    <link rel="stylesheet" href="src/assets/css/botao.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: black;">
            <!-- Image and text -->
            <nav class="navbar navbar">
                <a class="navbar-brand" href="#">
                    <img src="src/img/telegram.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    EverSite
                </a>
            </nav>
            <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../../site-de-produtos/index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../site-de-produtos/produtos.php">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../../site-de-produtos/Cadastrar.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../site-de-produtos/administrativo/login.php">Login</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                    <button class="btn--busca" type="submit">Buscar</button>

                </form>
            </div>
            <?php
                            session_start();
                            if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)and (!isset ($_SESSION['id']) == true))
                                {
                                    unset($_SESSION['id']);
                                    unset($_SESSION['usuario']);
                                    unset($_SESSION['senha']);
                                    header('location: login.php');
                                }
                            
                            ?>  
        </nav>
    </header>