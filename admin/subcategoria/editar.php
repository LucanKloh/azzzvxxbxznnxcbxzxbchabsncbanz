<?php
include ("../header.php");
include ("../conexao.php");

$idGet = $_GET['id'];

$sql = "SELECT ID_SUB_CATEGORIA, ID_CATEGORIA, NOME FROM T_SUB_CATEGORIA WHERE ID_SUB_CATEGORIA = " . $idGet;
$editar = mysql_query($sql);

list($id_sub_categoria, $id_categoria, $nome) = mysql_fetch_row($editar);
?>
<script type="text/javascript" language="javascript">
    $(function ($) {
        $("#formulario").submit(function () {
            var id_sub_categoria = $("#id_sub_categoria").val();
            var id_categoria = $("#id_categoria").val();
            var nome = $("#nome").val();

            $("#status").html("<img src='<?php echo $link_scripts; ?>img/loader.gif' alt='Enviando' ticle='Enviando' />");
            $.post('atualizar.php', {id_sub_categoria: id_sub_categoria, id_categoria: id_categoria, nome: nome}, function (resposta) {
                $(".status").slideDown();
                if (resposta != false) {
                    $(".status").html(resposta);
                }
                else {
                    $(".status").html("Alterado com sucesso!");
                    $(".status").dialog();
                    location.reload();
                }
            });
        });
    });
</script>


<div class="quadro_um">
    <div class="titulo_quadro_um">
        Editar Sub-Categoria
    </div>
    <div class="conteudo_quadro_um">
        <div class="status" title="Mensagem"></div>
        <form id="formulario" name="edicao" action="javascript:func()">
            <dl>
                <dt><label for="id">Código:</label></dt>
                <dd><input readonly id="id_sub_categoria" type="text" value="<?php echo $id_sub_categoria; ?>" size="33" maxlength="6" /></dd>
            </dl>
            <dl>
                <dt><label for="categoria">Categoria:*</label></dt>
                <select id="id_categoria" name="ID_Categoria" style="width: 264px">                                      
                    <?php
                    //monta SQL trazendo todos os obejetivos
                    $sql = 'SELECT id_categoria, '
                            . 'nome '
                            . 'FROM t_categoria'
                            . ' order by nome';
                    $res = mysql_query($sql);
                    while ($ID_Categoria = mysql_fetch_array($res)) {
                        //aparecerá o obejetivo padrão do usuário                        
                        echo '<option value="' . $ID_Categoria['id_categoria'] . '"';
                        if ($ID_Categoria['id_categoria'] == $id_categoria) {
                            echo ' selected ';
                        }
                        echo ' >' . $ID_Categoria['nome'] . '</option>';
                    }
                    ?>
                </select>
            </dl>
            <dl>
                <dt><label for="nome">Nome:*</label></dt>
                <dd><input id="nome" type="text" value="<?php echo $nome; ?>" autofocus="autofocus" size="33" maxlength="30" /></dd>
            </dl>
            </br>               
            <label class="label_camp_obgt">Campos contendo * são obrigatórios.</label>

            </br>
            <input type="submit" class="bt" value="Salvar" />
            <input type="button" class="bt" value="Cancelar" onclick="goBack()" />
        </form>
    </div>
</div>

<?php
include ("../footer.php");
