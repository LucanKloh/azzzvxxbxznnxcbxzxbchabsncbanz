<?php
include ("../header.php");
include ("../conexao.php");

$idGet = $_GET['id'];

$sql = "select id_categoria, nome from t_categoria where id_categoria = $idGet";
$editar = mysql_query($sql);

list($id_categoria, $nome) = mysql_fetch_row($editar);
?>
<script type="text/javascript" language="javascript">
    $(function ($) {
        $("#formulario").submit(function () {
            var id_categoria = $("#id_categoria").val();
            var nome = $("#nome").val();

            $("#status").html("<img src='<?php echo $link_scripts; ?>img/loader.gif' alt='Enviando' ticle='Enviando' />");
            $.post('atualizar.php', {id_categoria: id_categoria, nome: nome}, function (resposta) {
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
        Editar Categoria
    </div>
    <div class="conteudo_quadro_um">
        <div class="status" title="Mensagem"></div>
        <form id="formulario" name="edicao" action="javascript:func()">
            <dl>
                <dt><label for="id">Código:</label></dt>
                <dd><input readonly id="id_categoria" type="text" value="<?php echo $id_categoria; ?>" size="33" maxlength="6" /></dd>
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
