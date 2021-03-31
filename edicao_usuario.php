<?php

include "conecta.php";

$id= $_POST['id'];
$nome= $_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];


$SQL= "update usuario set nome='$nome', email='$email', senha='$senha' where id = '$id'";

$resultado=pg_query($conexao,$SQL);

$linha=pg_affected_rows($resultado);


if($linha>0)
{

	echo "Usuário alterado com sucesso <br>";
	echo "<a href='listar.php'>Voltar </a>";
}
else
{

	echo "Erro ao alterar";
}


