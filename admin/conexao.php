<?php

$base = 'LOCAL';
//PRD
//HOMO
//LOCAL

if ($base == 'LOCAL') {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $basedados = "sexydream";
} elseif ($base == 'HOMO') {
    $servidor = "";
    $usuario = "";
    $senha = "";
    $basedados = "";
} else {
    $servidor = "";
    $usuario = "";
    $senha = "";
    $basedados = "";
}

// String de Conexao
$ConxDB = mysql_connect("$servidor", "$usuario", "$senha"); // or die("Não é possível conectar ao Banco de Dados");

// Seleciona a base de dados
mysql_select_db("$basedados") or die($base = FALSE);

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');