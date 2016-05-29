<!DOCTYPE html>

<?php
require_once 'class/trocaURL.php';
?>

<html>
    <head>
        <title>Sany Fernandes</title>
        <meta charset="UTF-8">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/responsivo.js"></script>
    </head>
    <body onresize="responsivo()" onload="responsivo()">
        
            <div id='bloqueioPagina'></div>

        <header>
            <a href="index.php"><img class="logoCabecalho" src="img/logo_fundo.png"/></a>
            <a href="index.php"><img class="logoCabecalhoTexto" src="img/logo_texto_cabecalho.png"/></a>
            <menu id="menu-cabecalho">
                <div class="menuItem"><a class="menuLink" href="?pagina=sobre">Sobre</a></div>
                <div class="menuItem" onmouseout="esconderDropdown(this)">
                    <a class="menuLink" href="?pagina=portfolio" onmouseover="mostrarDropdown(this)">Portfólio</a>
                    <div class="menuDropdown" onmouseover="mostrarDropdown(this)">
                        <a href=?pagina=design_multimidia">Design Multimídia</a>
                        <a href=?pagina=fotografia">Fotografia</a>
                        <a href=?pagina=interface_usabilidade">Interface e Usabilidade</a>
                        <a href=?pagina=animacao_grafica">Animação Gráfica</a>
                        <a href=?pagina=audio_video_digital">Áudio e Vídeo Digital</a>
                        <a href=?pagina=culturas_midias_sociais">Culturas e Mídias Sociais</a>
                    </div>
                </div>
                <div class="menuItem"><a class="menuLink" href="?pagina=contato">Contato</a></div>
            </menu>
            <a href='#' class="menu-compacto-trigger" onclick="mudarMenuCompacto()">
                <img src='img/menu_icone.png' width='20' height="20"/>
            </a>
            <menu id="menu-compacto">
                <div class="menuItem"><a class="menuLink" href="?pagina=sobre">Sobre</a></div>
                <div class="menuItem" onmouseout="esconderDropdown(this)">
                    <a class="menuLink" href="#" onclick="$('.subMenu').toggle(150)">Portfólio</a>
                    <div class="subMenu">
                        <a href=?pagina=design_multimidia">Design Multimídia</a>
                        <a href=?pagina=fotografia">Fotografia</a>
                        <a href=?pagina=interface_usabilidade">Interface e Usabilidade</a>
                        <a href=?pagina=animacao_grafica">Animação Gráfica</a>
                        <a href=?pagina=audio_video_digital">Áudio e Vídeo Digital</a>
                        <a href=?pagina=culturas_midias_sociais">Culturas e Mídias Sociais</a>
                    </div>
                </div>
                <div class="menuItem"><a class="menuLink" href="?pagina=contato">Contato</a></div>
            </menu>
        </header>
        <main>
            <div class="conteudo">
                <?php
                $u = new trocaURL();

                include($u->url);
                ?>
            </div>
        </main>
        <footer>
            <div id="media">
                <img class="logoRodape" src="img/logo_rodape.png">
                <a class="facebook" href="https://www.facebook.com/saanyrock" target="_blank">
                    <img src="img/media_facebook.png">
                    <img src="img/media_facebook_hover.png">
                </a>
                <a class="twitter" href="https://twitter.com/SaanyRock" target="_blank">
                    <img src="img/media_twitter.png">
                    <img src="img/media_twitter_hover.png">
                </a>
                <a class="instagram" href="https://www.instagram.com/saanyrock/" target="_blank">
                    <img src="img/media_instagram.png">
                    <img src="img/media_instagram_hover.png">
                </a>
            </div>
            <div id="copyright">Copyright © 2016 - Sany Fernandes | Todos os direitos reservados e protegidos</div>
        </footer>
    </body>
</html>
