<?php
include ("../header.php");
include ("../conexao.php");
?>

<script type="text/javascript" language="javascript">
    $(function ($) {
        $("#formulario").submit(function () {
            var nome = $("#nome").val();
            $(".status").html("<img src='<?php echo $link_scripts; ?>img/loader.gif' alt='Enviando' ticle='Enviando' />");
            $.post('gravar.php', {nome: nome}, function (resposta) {
                $(".status").slideDown();
                if (resposta != false) {
                    $(".status").html(resposta);
                }
                else {
                    $(".status").html("Cadastrado com sucesso!");
                    $(".status").dialog();
                    $("#nome").val("");
                }
            });
        });
    });
</script>

<div class="quadro_um">
    <div class="titulo_quadro_um">
        Cadastro de Categoria
    </div>
    <div class="conteudo_quadro_um">
        <div class="status" title="Mensagem"></div>
        <form id="formulario" name="cadastro" action="javascript:func()" class="formulario" method="post">
            <dl>
                <dt><label for="nome">Nome:*</label></dt>
                <dd><input id="nome" type="text" autofocus="autofocus" size="33" maxlength="30" /></dd>
            </dl>
            <label class="label_camp_obgt">Campos contendo * são obrigatórios.</label>
            <dl>
                <dt>
                <input type="submit" class="bt" value="Salvar" />
                <input type="button" class="bt" value="Cancelar" onclick="goBack()" />
                </dt>
            </dl>
        </form>
    </div>
</div>
<?php
include ("../footer.php");
