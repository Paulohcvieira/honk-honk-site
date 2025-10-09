<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_pi";

// Estabelecendo a conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verificando se a conexão foi bem-sucedida
if (!$conexao) {
die("Erro na conexão: " . mysqli_connect_error());
}


