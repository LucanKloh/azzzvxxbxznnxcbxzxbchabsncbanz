<?php
include ("../conexao.php");

$Id_Categoria = $_POST["id_categoria"];
$nome = $_POST["nome"];

// Verifica se o nome foi preenchido
if (empty($nome)) {
    echo "O nome é obrigatório";
    exit();
}

if (empty($Id_Categoria)) {
    echo "A Categoria é obrigatória";
    exit();
}

$sql = "INSERT INTO t_sub_categoria(ID_CATEGORIA, NOME)
                        VALUES('$Id_Categoria','$nome')";

$query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores " . $sql);
if ($query) {
    echo false;
} else {
    echo 'Não foi possível cadastrar!';
}