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
					<a href="principal.php">
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
					<input type="text" placeholder="nome" name="nome" class="form-control">
					<input type="submit" class="btn btn-success input-group-append" name="botao">
				</div>
		</form>		
		<div id="principal">
			<div class="efeito">
				<div class="container">
					<h1>FORMULÁRIO</h1>
					<?php

						$nome=strtoupper($_POST['nome']);

						include "conecta.php";

						$sql = "select * from usuario where upper(nome) like '%$nome%'";


						$resultado = pg_query($conexao,$sql);
						$linhas = pg_num_rows ($resultado);

						for ($i = 0 ; $i < $linhas ; $i++) {
							$registro=pg_fetch_row($resultado,$i);

						?>
						<section>
						<form action="edicao_usuario.php" method="post">
							<p>ID: <?php echo $registro[0]; ?></p>
							<input type ='hidden' name = 'id' value='<?php echo $registro[0]?>'>
							<p>Nome:  <input type="text" name="nome" value="<?php echo $registro[1]?>"></p>
							<p>Email:<input type ='text' name = 'email' value='<?php echo $registro[2]?>'</p>
							<p>Senha: <input type ='password' name = 'senha' value='<?php echo $registro[3]?>' ?></p>
							<p>Foto: <img src="imagem/<?php echo $registro[4]?>" width='20%'/></p>
							<button type="submit" name="editar" value="<?php echo $usuario['id']; ?>"> Editar </button>
						</form>
							<form action="exclusao_usuario.php" method="post">
							<input type ='hidden' name = 'id' value='<?php echo $registro[0]?>'>
							<button type="submit" name="deletar" value="<?php echo $usuario['id']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
						</form>                                                         
						</section>
						<?php
						} //final do for
					?>
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