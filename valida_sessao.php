<?php 
session_start(); 

$email=$_POST["email"]; 
$senha=$_POST["senha"]; 
	if(!(empty($email) OR empty($senha))){ 
	include "conecta.php"; 
	$resultado=pg_query("SELECT * from usuario WHERE email='$email' and senha='$senha'"); 
			if (pg_num_rows($resultado)== 1){ 

				$_SESSION["logado"]=true;
				$_SESSION["email"]=$email;
				header("Location:principal.php"); // direciona para a home do site 
			} 
			else{ //teste do resultado da função pg_num_rows
					$_SESSION["msg"]="Usuário ou senha inválidos!"; 
					header("Location:login.php");
						// caso não exista uma linha na tabela usuario com o login e a senha 		// válidos uma mensagem é armazenada na variável de sessão msg 	 
				                     // o fluxo da aplicação é direcionado novamente para o 
				                     // formulário de login - onde a variável de sessão 
				                     //contendo a mensagem será exibida 
				} 
	} else  // else correspondente ao resultado da função !empty

	 { $_SESSION["msg"]="Preencha campos usuário e senha"; 
	                      // caso contrário, ou seja, 
	                      // os campos do formulário login e senha estejam vazios, 
	 	            // a mensagem é armazenada na variável msg 	h  			header("Location:login.php"); 
	// o fluxo da aplicação é direcionado novamente para o formulário de login - onde a variável de sessão contendo a mensagem será exibida 
	} 

?> 
