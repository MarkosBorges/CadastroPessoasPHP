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
					<input type="text" placeholder="Buscar | Pesquisar" name="nome" class="form-control">
					<input id="nome" type="submit" class="btn btn-success input-group-append" name="botao">
				</div>
		</form>		
		<div id="principal">
			<div class="efeito">
				<div class="container">
					<h1>BEM-VINDO!</h1>
		              <p style="margin-top: 150px">A partir de agora, você pode cadastrar novos clientes e usuários, editá-los, listar-los, excluí-los e realizar pesquisas no banco de dados.</p>
		     <!--         <img src="principal.png" align="center">  -->
		        		<div class="container-fluid">
							<div class="row">
								<div class="col-4">
									<div class="card border border-danger bg-warning">
										<img src="cadastrar.png" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Cadastrar</h5>
											<p class="card-text">Aqui você CADASTRA os usuários que quiser.</p>
											<a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
										</div>
									</div>
								</div>
								<div class="col-4">
									<div class="card border border-danger">
										<img src="editar.png" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Editar</h5>
											<p class="card-text">Caso necessite, você pode EDITAR os usuários.</p>
											<a href="editar.php" class="btn btn-primary">Editar</a>
										</div>
									</div>
								</div>
								<div class="col-4">
									<div class="card border border-danger bg-danger">
										<img src="excluir.png" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Excluir</h5>
											<p class="card-text">Aqui você pode EXCLUIR algum usuário</p>
											<a href="excluir.php" class="btn btn-primary">Excluir</a>
										</div>
									</div>
								</div>
								<div class="col-4">
									<div class="card border border-danger bg-dark">
										<img src="listar.png" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Listar</h5>
											<p class="card-text">clique aqui para listar os usuários.</p>
											<a href="listar.php" class="btn btn-primary">Listar</a>
										</div>
									</div>

								</div>		
							</div>
						</div>
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