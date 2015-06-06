<?php
include ("../header.php");
include ("../conexao.php");
?>

<script type="text/javascript" language="javascript">
    $(function ($) {
        $("#formulario").submit(function () {
            var nome = $("#nome").val();
            var id_categoria = $("#ID_Categoria").val();
            $(".status").html("<img src='<?php echo $link_scripts; ?>img/loader.gif' alt='Enviando' ticle='Enviando' />");
            $.post('gravar.php', {id_categoria:id_categoria, nome: nome}, function (resposta) {
                $(".status").slideDown();
                if (resposta != false) {
                    $(".status").html(resposta);
                }
                else {
                    $(".status").html("Cadastrado com sucesso!");
                    $(".status").dialog();
                    $("#nome").val("");
                    $("#goal").val("");
                }
            });
        });
    });
</script>

<div class="quadro_um">
    <div class="titulo_quadro_um">
        Cadastro de Sub-Categoria
    </div>
    <div class="conteudo_quadro_um">
        <div class="status" title="Mensagem"></div>
        <form id="formulario" name="cadastro" action="javascript:func()" class="formulario" method="post">
            <dt><label for="categoria">Categoria:*</label></dt>
            <dd>
                <select id="ID_Categoria" name="ID_Categoria" onChange="ordenacao(this);">
                    <option value ="">Selecione</option>                    
                    <?php
                    //monta SQL trazendo todos os obejetivos
                    $sql = 'SELECT id_categoria, '                                
                                . 'nome '
                          .  'FROM t_categoria order by nome';
                    $res = mysql_query($sql);
                    while ($ID_Categoria = mysql_fetch_array($res)) {
                        //aparecerá o obejetivo padrão do usuário                        
                        echo '<option value="'.$ID_Categoria['id_categoria'] . '" >' . $ID_Categoria['nome'] . '</option>';
                    }
                    ?>
                </select>
            </dd>
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
