<?php

include ("../conexao.php");

$id_sub_categoria = $_POST["id_sub_categoria"];
$id_categoria = $_POST["id_categoria"];
$nome = $_POST["nome"];

// Verifica se o nome foi preenchido
if (empty($nome)) {
    echo "O nome é obrigatório";
    exit();
}

if (empty($id_categoria)) {
    echo "A Categoria é obrigatória";
    exit();
}

$update = "update t_sub_categoria "
           . "SET nome     = '$nome' 
                , id_categoria = '$id_categoria'
            WHERE id_sub_categoria =" . $id_sub_categoria;

$query = mysql_query($update) or die("Houve um erro na gravação dos dados, verifique os valores " . $update);
if ($query) {
    echo false;
} else {
    echo 'Não foi possível alterar o registro';
}