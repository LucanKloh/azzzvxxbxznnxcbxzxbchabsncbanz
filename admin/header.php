<?php
$base = 'LOCAL';
//PRD
//HOMO
//LOCAL 
if ($base == 'LOCAL') {
    $link_scripts = 'http://localhost/sexydream/admin/';
} elseif ($base == 'HOMO') {
    $link_scripts = '';
} else {
    $link_scripts = 'http://getfit.zz.mu/';
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sexy Dream</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $link_scripts; ?>css/estilo.css?<?php echo filemtime('css/estilo.css'); ?>"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="<?php echo $link_scripts; ?>js/jquery.form.js"></script>
        <link rel="stylesheet" href="<?php echo $link_scripts; ?>tabela/estilo/table_jui.css" />
        <script type="text/javascript" src="<?php echo $link_scripts; ?>tabela/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <header>
            Header

        </header>
        <div class="separator"></div>
        <main>
            <nav>
                <div class="menu">
                    <a href="<?php echo $link_scripts; ?>categorias/cadastro.php">Cadastro</a>
                </div>
                <div class="menu">
                    <a href="<?php echo $link_scripts; ?>categorias/consultar.php">Consultar</a>
                </div>
                <div class="menu">
                    NAV 3
                </div>
            </nav>