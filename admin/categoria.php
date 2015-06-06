<?php
include './header.php';
?>



<div class="quadro_um">
    <div class="titulo_quadro_um">
        Cadastro de Categoria
    </div>
    <div class="conteudo_quadro_um">
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


            </br></br>
        </form>
    </div>
</div>







<?php
include './footer.php';
?>