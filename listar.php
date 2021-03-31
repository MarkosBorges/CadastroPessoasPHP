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
					<h1>LISTAGEM DE USUÁRIOS</h1>
					<?php

						include "conecta.php";

						$sql = "select * from usuario order by id";

						$resultado = pg_query($conexao,$sql);
						$linhas = pg_num_rows ($resultado);

						for ($i = 0 ; $i < $linhas ; $i++) {
							$registro=pg_fetch_row($resultado,$i);

					?>
						<section>
							<form action="edicao_usuario.php" method="post" enctype="multipart/form-data">
							<p>ID: <?php echo $registro[0]; ?></p>
							<input type ='hidden' name = 'id' value='<?php echo $registro[0]?>'>
							<p>Nome:  <input type="text" name="nome" value="<?php echo $registro[1]?>"></p>
							<p>Email:<input type ='text' name = 'email' value='<?php echo $registro[2]?>'</p>
							<p>Senha: <input type ='password' name = 'senha' value='<?php echo $registro[3]?>' ?></p>
							<button type="submit" name="editar" value="<?php echo $usuario['id']; ?>"> Editar </button>
							</form>
							<form action="exclusao_usuario.php" method="post">
							<input type ='hidden' name = 'id' value='<?php echo $registro[0]?>'>
							<button type="submit" name="deletar" value="<?php echo $usuario['id']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
							</form>                                                 
						</section>
						<?php
						}
						?>
				</div>
			</div>
		</div>

		
		<footer>
			<script src="js/jquery-3.5.1.min"></script>
			<script src="js/bootstrap.bundle.min.js"></script>
			<h5>Página 04 - Listar usuário - Marcos Borges</h5>
		</footer>
	
	</body>
</html>