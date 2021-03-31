<!DOCTYPE html>
<?php 
header("Location:login.php");
session_start(); // abre ou restaura os dados de uma sessão 
if(isset($_SESSION["msg"])) // testa a variável de sessão msg 
{ 
echo $_SESSION["msg"]; // mostra mensagem armazenada 
unset($_SESSION['msg']); // elimina variável de sessão msg 
} 
?>
<html lang="pt-br">
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href=".css/login.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"> 
	</head>
	<body>
		<header>
			<div class="container">
					<img src="Logo.png" alt="IF Logo">							
			</div>	
		</header>	
		<div id="principal">
			<div class="efeito">
				<div class="container">
					<div id="div_esq">
						<img src="login.png" height="60%" width="60%">
					</div>
					<div id="div_dir">
						<h1>Login</h1><br>
						<form name="acesso" action="valida_sessao.php" method="POST"><b>
							Login: <input type="email" name="email"><br><br>
							Senha: <input type="password" name="senha"><br><br><br>
							<button type="submit" class="btn btn-success btn-lg btn-block" name="botao" value="ENVIAR">Entrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>	
		<footer>
			<script src="js/jquery-3.5.1.min"></script>
			<script src="public/js/bootstrap.bundle.min.js"></script>
			<h5>Página 00 - Login - Marcos Borges</h5>
		</footer>
	</body>
</html>