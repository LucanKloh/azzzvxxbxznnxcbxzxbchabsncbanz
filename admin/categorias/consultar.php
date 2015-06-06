<?php
include ("../header.php");
include ("../conexao.php");
?>

<div class="titulo">
    <h1>Consulta de Categorias</h1>
</div>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabela">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $retorno = mysql_query("SELECT ID_CATEGORIA, NOME FROM t_categoria");

        while ($categoria = mysql_fetch_array($retorno)) {
            echo '<tr>';
            echo '<td class="center">' . $categoria['ID_CATEGORIA'] . '</td>';
            echo '<td>' . $categoria['NOME'] . '</td>';
            echo '<td>';
            echo '<form id="excluir" name="excluir">';
            echo '<input type="hidden" id="id" name="id" value="' . $categoria['ID_CATEGORIA'] . '" />';
            echo '<input type="image" name="excluir" src="../tabela/delete.png" alt="Excluir" title="Excluir" width="16" height="16" />';
            echo '</form>';
            echo '<a href="editar.php?id=' . $categoria['ID_CATEGORIA'] . '"><img src="../tabela/edit.png" width="16" height="16" alt="Editar" title="Editar" /></a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
    </tfoot>
</table>


<?php
include ("../footer.php");
