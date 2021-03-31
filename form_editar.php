<?php 

	include "conecta.php";

	$id= $_POST['id'];

	$SQL= "select * from usuario where id = '$id'";

	$resultado=pg_query($conexao,$SQL);

	$registro= pg_fetch_row($resultado,0);

?>
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
					<a href="principal.html">
						<img src="Logo.png" alt="IF Logo">
					</a>					
				</div>
				<div id="menu">
					<a href="principal.php">Home</a>
					<a href="cadastro.php">Cadastro</a>
					<a href="editar.php#">Edição</a>
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
					<h1>FORM EDITAR</h1>
					<form action="edicao_usuario.php" method="POST">
						<p><label for='nome'> Nome </label> 
						<input type="text" id='nome' name='nome' value="<?php echo $registro[1]; ?>" ></p>
						<p><label for='email'> Email </label> 
						<input type="text" id='email' name='email' value="<?php echo $registro[2]; ?>" ></p>
						<p><label for='senha'> Senha </label> 
						<input type="password" id='senha' name='senha' value="<?php echo $registro[3]; ?>"></p>
						<input type="hidden" name='id' value="<?php echo $registro[0]; ?>">
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