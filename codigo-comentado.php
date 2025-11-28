<!DOCTYPE html> <!-- Declaração do tipo de documento HTML -->
<html lang="pt-BR"> <!-- Define o idioma da página como Português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres para UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Torna o site responsivo para mobile -->
    <title>Biblioteca Online </title> <!-- Título exibido na aba do navegador -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- Importação do CSS do BootStrap -->
</head>
<body>
    <!-- Barra de navegação superior -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Biblioteca Online</a> <!-- Título/link do menu -->

    <!-- Botão de menu para exibição em dispositivos pequenos -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Itens do menu de navegação -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a> <!-- Link para página inicial -->
        </li>

        <!-- Menu Suspenso para Livros -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-livro">Cadastrar</a></li> <!-- Redireciona para o formulário de cadastro de livros -->
            <li><a class="dropdown-item" href="?page=listar-livro">Listar</a></li> <!-- Lista livros cadastrados -->
          </ul>
        </li>

        <!-- Menu Suspenso para Autores -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Autores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-autores">Cadastrar</a></li> <!-- Formulário de cadastro de autores -->
            <li><a class="dropdown-item" href="?page=listar-autores">Listar</a></li> <!-- Lista autores cadastrados -->
          </ul>
        </li>
      </ul>
    </div>

        <!-- Barra de pesquisa -->
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/> <!-- Campo de busca -->
        <button class="btn btn-outline-success" type="submit">Search</button> <!-- Botão de busca -->
        </form>
    </nav>

    <!-- Área principal do site -->
    <div class="container mt-3"> <!-- Container com margem superior -->
	<div class="row">
		<div class="col">

			<?php 
                include('config.php'); // Inclui o arquivo de configuração e conexão com banco de dados

				/* 
					Switch responsável por direcionar as páginas conforme o valor
					passado na URL via parâmetro GET (?page=nomePagina)
				*/

				switch (@$_REQUEST['page']) {

					// LIVROS
					case 'cadastrar-livro':
						include('cadastrar-livro.php'); // Formulário de cadastro
						break;

					case 'listar-livro':
						include('listar-livro.php'); // Exibe lista de livros cadastrados
						break;

					case 'editar-livro':
						include('editar-livro.php'); // Página para edição de livro
						break;

					case 'salvar-livro':
						include('salvar-livro.php'); // Script para salvar dados no banco
						break;

					// AUTORES
					case 'cadastrar-autores':
						include('cadastrar-autores.php'); // Formulário de cadastro de autores
						break;

					case 'listar-autores':
						include('listar-autores.php'); // Lista de autores cadastrados
						break;

					case 'editar-autores':
						include('editar-autores.php'); // Edição de dados de autores
						break;

					case 'salvar-autores':
						include('salvar-autores.php'); // Gravação no banco
						break;

					default:
						print "<h1>Seja bem vindo</h1>"; // Página inicial padrão
				}
			?>
	<script src="js/bootstrap.bundle.min.js"></script> <!-- Script JS do Bootstrap para menus e interações -->
</body>
</html>
