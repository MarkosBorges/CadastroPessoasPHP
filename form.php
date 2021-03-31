<?php 

include "conecta.php";

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];


$SQL= "insert into usuario (nome,email,senha) values ('$nome','$email','$senha')";

$resultado=pg_query($conexao,$SQL);

if($resultado)
{

	echo "Usuário inserido com sucesso <br>";
	echo "<a href='principal.php'>Voltar </a>";
}
else
{

	echo "Erro ao inserir as informações no banco de dados!";
}



