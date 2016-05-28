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
</head>
<body>
    <header>
        <a href="index.html"><img class="logoCabecalho" src="img/logo_fundo.png" height="120" /></a>
        <a href="index.php"><img class="logoCabecalhoTexto" src="img/logo_texto_cabecalho.png" height="40" /></a>
        <menu id="menu-cabecalho">
            <div class="menuItem"><a class="menuLink" href="paginas/sobre.php">Sobre</a></div>
            <div class="menuItem" onmouseout="esconderDropdown(this)">
                <a class="menuLink" href="paginas/portfolio.php" onmouseover="mostrarDropdown(this)">Portifólio</a>
                <div class="menuDropdown" onmouseover="mostrarDropdown(this)">
                    <a href="paginas/design_multimidia.php">Design Multimídia</a>
                    <a href="paginas/fotografia.php">Fotografia</a>
                    <a href="paginas/interface_usabilidade.php">Interface e Usabilidade</a>
                    <a href="paginas/animacao_grafica.php">Animação Gráfica</a>
                    <a href="paginas/audio_video_digital.php">Áudio e Vídeo Digital</a>
                    <a href="paginas/culturas_midias_sociais.php">Culturas e Mídias Sociais</a>
                </div>
            </div>
            <div class="menuItem"><a class="menuLink" href="paginas/contato.php">Contato</a></div>
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
