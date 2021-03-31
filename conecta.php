<?php
$servidor = "localhost";
 $porta = 5432;
 $bd = "aulaphp";
 $usuario = "postgres";
 $senha_banco = "1234";


$conexao=pg_connect("host=$servidor port=$porta dbname=$bd user=$usuario password=$senha_banco");

if(!$conexao) {
 die("Não foi possível se conectar ao banco de dados.");
 }