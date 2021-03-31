<?php

include "conecta.php";

$id= $_POST['id'];

//echo "id $id";

$SQL= "delete from usuario where id = '$id'";

//echo "sql".$SQL;

$resultado=pg_query($conexao,$SQL);

$linha=pg_affected_rows($resultado);

//echo "linha".$linha;

if($linha>0)
{

	echo "Usuário excluido com sucesso <br>";
	echo "<a href='principal.php'>Voltar </a>";
}
else
{

	echo "Usuario não excluido";
}


