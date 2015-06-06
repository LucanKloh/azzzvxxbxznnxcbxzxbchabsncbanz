<?php
include ("../conexao.php");

$nome = $_POST["nome"];

// Verifica se o nome foi preenchido
if (empty($nome)) {
    echo "O nome é obrigatório";
    exit();
}

$sql = "INSERT INTO t_categoria(NOME)
                        VALUES('$nome')";

$query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores " . $sql);
if ($query) {
    echo false;
} else {
    echo 'Não foi possível cadastrar!';
}