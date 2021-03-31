<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>SITE</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href=".css/style.css">
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
					<a href="#">Home</a>
					<a href="#">Quem Somos</a>
					<a href="#">Fale Conosco</a>
				</div>
			</div>	
		</header>
		
		<div id="principal">
			<div class="efeito">
				<div class="container">
					<h1>FORMULÁRIO</h1>
					<form action="form.php" method="POST"><b>
						Nome: <input type="text" name="nome"><br>
						Sobrenome: <input type="text" name="sobrenome"><br>
						Email: <input type="email" name="email"><br><br>
						Sexo:<br>
						<select multiple name="sexo[]">
							<option value="masc">Masculino</option>
							<option value="fem">Feminino</option>
							<option value="outro">Outro</option>
						</select><br><br>
						Telefone: <input type="tel" name="telefone"><br>
						Nascimento: <input type="date" name="nascimento"><br>
						Horário de agendamento: <input type="datetime-local" name="agenda"><br>
						Rede social: <input type="url" name="rede"><br></b><br><br>
						<button type="submit" class="btn btn-danger btn-lg btn-block" name="botao" value="ENVIAR">Enviar</button>
					<!--	<input type="submit" name="botao" value="ENVIAR"> -->

					</form>
				</div>
			</div>
		</div>

		
		<footer>
			<script src="js/jquery-3.5.1.min"></script>
			<script src="js/bootstrap.bundle.min.js"></script>
			<h5>Teste - Marcos Borges</h5>
		</footer>
	
	</body>
</html>