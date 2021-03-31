<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>SITE</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href=".css/principal.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href=".css/bootstrap.min.css"> 
	</head>
	<body>
		<header>
			<div class="container">
				<div id="logo">
					<a href="index.html">
						<img src="Logo.png" alt="IF Logo">
					</a>					
				</div>
				<div id="menu">
					<a href="principal.php">Home</a>
					<a href="cadastro.php">Cadastro</a>
					<a href="editar.php">Edição</a>
					<a href="listar.php">Listagem</a>
					<a href="excluir.php">Exclusão</a>
					<a href="sair.php"><img src="sair.png"></a>
				</div>

			</div>	
		</header>
		<form id="busca" class="form-inline" action="pesquisa.php" method="POST"> 
				<div  class="input-group">
					<input type="text" placeholder="Buscar | Pesquisar" name="buscar" class="form-control">
					<input id="nome" type="submit" class="btn btn-success input-group-append" name="nome">
				</div>
		</form>		
		<div id="principal">
			<div class="efeito">
				<div class="container">
					<h1>EDITAR USUÁRIO</h1>
					<form action="form_editar.php" method="POST">
						<p><label for='id'> Digite o Código do Usuario para editar: </label> 
						<input type="text" id='id' name='id'></p>
						<button type="submit">Editar</button>
					</form>
				</div>
			</div>
		</div>

		
		<footer>
			<script src="js/jquery-3.5.1.min"></script>
			<script src="js/bootstrap.bundle.min.js"></script>
			<h5>Página 01 - Principal - Marcos Borges</h5>
		</footer>
	
	</body>
</html>