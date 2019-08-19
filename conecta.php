<?php

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "etec";

	$conexao = new MySQLi("$host","$usuario","$senha","$banco");

/*	if ($conexao->connect_error) {
		echo "Erro de Conexão";
	}else{
		echo "Conexão Bem-Sucedida";
	}
*/
	
?>