<?php
include ("../conexao.php");

$id_categoria = $_POST['id_categoria'];

$excluir = "delete from t_categoria where id_categoria = $id_categoria";
mysql_query($excluir);

if ($excluir) {
    echo 'Registro excluido com sucesso!';
} else {
    echo 'Não foi possível excluir o registro!';
}