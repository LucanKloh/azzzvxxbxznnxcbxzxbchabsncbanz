<?php

include ("../conexao.php");

$id_categoria = $_POST["id_categoria"];
$nome = $_POST["nome"];

// Verifica se o nome foi preenchido
if (empty($nome)) {
    echo "O nome é obrigatório";
    exit();
}

$update = "update t_categoria SET nome     = '$nome'
                        WHERE id_categoria =" . $id_categoria;

echo $update;
    exit();

$query = mysql_query($update) or die("Houve um erro na gravação dos dados, verifique os valores " . $update);
if ($query) {
    echo false;
} else {
    echo 'Não foi possível alterar o registro';
}