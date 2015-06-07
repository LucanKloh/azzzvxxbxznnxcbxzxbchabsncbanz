<?php
include ("../header.php");
include ("../conexao.php");
?>

<div class="quadro_um">
    <div class="titulo_quadro_um">
        Consulta de Categoria
    </div>
    <div class="conteudo_quadro_um">

        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Categoria</th>
                    <th>Nome</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $retorno = mysql_query("SELECT SUB.ID_SUB_CATEGORIA, 
                                               SUB.ID_CATEGORIA, 
                                               SUB.NOME AS NOME_SUB,
                                               CAT.NOME AS NOME_CAT
                                          FROM T_SUB_CATEGORIA SUB INNER JOIN T_CATEGORIA CAT ON CAT.ID_CATEGORIA = SUB.ID_CATEGORIA");

                while ($categoria = mysql_fetch_array($retorno)) {
                    echo '<tr>';
                      echo '<td align="center">' . $categoria['ID_SUB_CATEGORIA'] . '</td>';
                      echo '<td>' . $categoria['NOME_CAT'] . '</td>';
                      echo '<td><a href="editar.php?id=' . $categoria['ID_SUB_CATEGORIA'] . '">' . $categoria['NOME_SUB'] . '</a></td>';
                      echo '<td></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Código</th>
                    <th>Categoria</th>
                    <th>Nome</th>
                    <th>Ação</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php
include ("../footer.php");
