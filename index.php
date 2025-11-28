<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Biblioteca Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-livro">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-livro">Listar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Autores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-autores">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-autores">Listar</a></li>
          </ul>
        </li>
      </ul>
    </div>
          <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </nav>
    <div class="container mt-3">
	<div class="row">
		<div class="col">
			<?php 
                include('config.php');
				switch (@$_REQUEST['page']) {
					//livro
					case 'cadastrar-livro':
						include('cadastrar-livro.php');
						break;
					case 'listar-livro':
						include('listar-livro.php');
						break;
					case 'editar-livro':
						include('editar-livro.php');
						break;
					case 'salvar-livro':
						include('salvar-livro.php');
						break;
					//autores
					case 'cadastrar-autores':
						include('cadastrar-autores.php');
						break;
					case 'listar-autores':
						include('listar-autores.php');
						break;
					case 'editar-autores':
						include('editar-autores.php');
						break;
					case 'salvar-autores':
						include('salvar-autores.php');
						break;
					default:
						print "<h1>Seja bem vindo</h1>";
				}
			?>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
