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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0049)http://www.3heaven.com/dev/responsive-admin-menu/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <meta name="viewport" content="width=device-width" />
        <title>Sistema Sexy Dream</title>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?php echo $link_scripts; ?>css/estilo.css" />

        <!-- Tabela-->
        <link rel="stylesheet" type="text/css" href="<?php echo $link_scripts; ?>tabela/css/jquery.dataTables.css" />
        <script type="text/javascript" language="javascript" src="<?php echo $link_scripts; ?>tabela/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo $link_scripts; ?>tabela/js/jquery.dataTables.js"></script>

        <!--<link href="./Responsive Admin Menu1_files/css" rel="stylesheet" type="text/css" />-->
        <!--[if lt IE 9]>
                <script  type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <!--[if IE 7]>
        <link rel="stylesheet" href="css/font-awesome-ie7.min.css" />
        <![endif]-->


        <style type="text/css">
            /* body	*/
            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
                font-family: "Open Sans", Helvetica, sans-serif;
                background-color: #404040;
            }
            /* body	*/
        </style>

        <script type="text/javascript">
            eval(function (p, a, c, k, e, r) {
                e = function (c) {
                    return c.toString(a)
                };
                if (!''.replace(/^/, String)) {
                    while (c--)
                        r[e(c)] = k[c] || e(c);
                    k = [function (e) {
                            return r[e]
                        }];
                    e = function () {
                        return'\\w+'
                    };
                    c = 1
                }
                ;
                while (c--)
                    if (k[c])
                        p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
                return p
            }('$(o).i(4(){$("p").q(\'<r t="u" m="9/3-6-0.9"/>\');s a="";$("#3-0").c(4(){$("#3-6-0 #0").g()});$(h).f(4(){$("#3-6-0 #0").j("k")});$("#0 a.l").c(4(){d(a!=""){$("#"+a).n("a").e("7");$("#"+a).b("8")};d(a==$(1).5("2")){$("#"+$(1).5("2")).b("8");$(1).e("7");a=""}v{$("#"+$(1).5("2")).w("8");a=$(1).5("2");$(1).x("7")};y z})});', 36, 36, 'menu|this|name|responsive|function|attr|admin|downarrow|fast|css||slideUp|click|if|removeClass|resize|slideToggle|window|ready|removeAttr|style|submenu|href|prev|document|head|append|link|var|rel|stylesheet|else|slideDown|addClass|return|false'.split('|'), 0, {}))
        </script>

        <script type="text/javascript" language="javascript" class="init">


            $(document).ready(function () {
                // Setup - add a text input to each footer cell
                $('#example tfoot th').each(function () {
                    var title = $('#example thead th').eq($(this).index()).text();
                    $(this).html('<input type="text" placeholder="Search ' + title + '" />');
                });

                // DataTable
                var table = $('#example').DataTable({
                    "scrollY": 480,
                    "scrollX": true,
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
                });

                // Apply the search
                table.columns().every(function () {
                    var that = this;

                    $('input', this.footer()).on('keyup change', function () {
                        that
                                .search(this.value)
                                .draw();
                    });
                });
            });


        </script>
    </head>
    <body>

        <div id="responsive-admin-menu">
            <div id="responsive-menu">Sistema Sexy Dream
                <div class="menuicon">≡</div>
            </div>

            <div id="logo"></div>

            <!--Menu-->
            <div id="menu"> 
                <a href="<?php echo $link_scripts; ?>index.php" title="Dashboard">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
                <a href="" title="Categorias" class="submenu" name="media1-sub">
                    <i class="icon-cogs"></i><span>Categorias</span>
                </a>
                <!-- Media Sub Menu -->
                <div id="media1-sub">
                    <a href="<?php echo $link_scripts; ?>categorias/cadastro.php" title="Cadastrar Categorias">
                        <i class="icon-film"></i><span>Cadastro</span>
                    </a>
                    <a href="<?php echo $link_scripts; ?>categorias/consultar.php" title="Consultar Categorias">
                        <i class="icon-picture"></i><span>Consultar</span>
                    </a>
                </div>
                <a href="" title="Categorias" class="submenu" name="subcategoria">
                    <i class="icon-cogs"></i><span>Sub-categoria</span>
                </a>
                <!-- Media Sub Menu -->
                <div id="subcategoria">
                    <a href="<?php echo $link_scripts; ?>subcategoria/cadastro.php" title="Cadastrar Categorias">
                        <i class="icon-film"></i><span>Cadastro</span>
                    </a>
                    <a href="<?php echo $link_scripts; ?>subcategoria/consultar.php" title="Consultar Categorias">
                        <i class="icon-picture"></i><span>Consultar</span>
                    </a>
                </div>
                <!-- Media Sub Menu -->
                <a href="" class="submenu" name="teste" title="Other Contents">
                    <i class="icon-book"></i><span>Teste</span>
                </a>
                <!-- Other Contents Sub Menu -->
                <div id="teste">
                    <a href="" title="Forms"><i class="icon-list"></i><span>  
                            Forms</span></a>
                    <a href="" title="Mail Lists"><i class="icon-list-ul"></i><span>  
                            Mail Lists</span></a>
                    <a href="" title="Maps"><i class="icon-map-marker"></i><span>  
                            Maps</span></a>
                </div>
                <!-- Other Contents Sub Menu -->
                <a href="" title="Admin Tools"><i class="icon-cogs"></i><span>  
                        Admin Tools</span></a>
            </div>
            <!--Menu-->


        </div>
        <div id="content-wrapper">





