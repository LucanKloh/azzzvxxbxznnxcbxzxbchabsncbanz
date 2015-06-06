<?php
include ("../header.php");
include ("../conexao.php");
?>

<div class="quadro_um">
    <div class="titulo_quadro_um">
        Consulta de Categoria
    </div>
    <div class="conteudo_quadro_um">
        <div class="tabela_consulta">
            <table id="example" class="display" cellspacing="0" width="100%">
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
                        echo '<td><a href="editar.php?id=' . $categoria['ID_CATEGORIA'] . '">' . $categoria['NOME'] . '</a></td>';
                        echo '<td>';
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
        </div>
    </div>

</div>

<?php
include ("../footer.php");
