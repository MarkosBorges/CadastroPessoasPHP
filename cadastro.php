<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>SITE</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href=".css/cadastro.css">
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
					<a href="#">Edição</a>
					<a href="#">Listagem</a>
					<a href="#">Exclusão</a>
					<a href="#"><img src="sair.png"></a>
				</div>

			</div>	
		</header>
		<form id="busca" class="form-inline"> 
				<div  class="input-group">
					<input type="text" placeholder="Buscar" name="buscar" class="form-control">
					<input type="submit" class="btn btn-success input-group-append" name="">
				</div>
		</form>		
		<div id="principal">
			<div class="efeito">
				<div class="container">
					<h1>FORMULÁRIO</h1>
					<form action="form.php" method="POST"><b>
						Nome: <input type="text" name="nome"><br>
						Email: <input type="email" name="email"><br><br>
						Senha: <input type="password" name="senha"><br><br></b><br><br>
						<button type="submit" class="btn btn-danger btn-lg btn-block" name="botao" value="ENVIAR">Enviar</button>
					<!--	<input type="submit" name="botao" value="ENVIAR"> -->
					</form>
				</div>
			</div>
		</div>

		
		<footer>
			<script src="js/jquery-3.5.1.min"></script>
			<script src="js/bootstrap.bundle.min.js"></script>
			<h5>Página 02 - Cadastro - Marcos Borges</h5>
		</footer>
	
	</body>
</html>