﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Sany Fernandes - Contato</title>
    <meta charset="UTF-8" />
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
    <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
</head>
<body>
    <header>
        <a href="../index.html">
            <img class="logoCabecalho" src="../img/logo_fundo.png" height="120" />
        </a>
        <a href="../index.html">
            <img class="logoCabecalhoTexto" src="../img/logo_texto_cabecalho.png" height="40" />
        </a>
        <menu id="menu-cabecalho">
            <div class="menuItem">
                <a class="menuLink" href="sobre.html" onclick="javascript:location.reload()">Sobre</a>
            </div>
            <div class="menuItem" onmouseout="esconderDropdown(this)">
                <a class="menuLink" href="portfolio.html" onmouseover="mostrarDropdown(this)">Portifólio</a>
                <div class="menuDropdown" onmouseover="mostrarDropdown(this)">
                    <a href="design_multimidia.html">Design Multimídia</a>
                    <a href="fotografia.html">Fotografia</a>
                    <a href="interface_usabilidade.html">Interface e Usabilidade</a>
                    <a href="animacao_grafica.html">Animação Gráfica</a>
                    <a href="audio_video_digital.html">Áudio e Vídeo Digital</a>
                    <a href="culturas_midias_sociais.html">Culturas e Mídias Sociais</a>
                </div>
            </div>
            <div class="menuItem">
                <a class="menuLink" href="contato.php">Contato</a>
            </div>
        </menu>
    </header>
    <main>
        <div class="conteudo">
            <div class="conteudoTitulo">Contatos</div>
            <div class="conteudoMeio">
                <form action="../class/acaoCadastrar.php" method="post">
                    <label for="nome">Nome:</label>
                    <br />
                    <input id="nome" name="nome" type="text" />
                    <br />
                    <label for="email">E-mail:</label>
                    <br />
                    <input id="email" name="email" type="email" />
                    <br />
                    <label for="assunto">Assunto:</label>
                    <br />
                    <input id="assunto" name="assunto" type="text" />
                    <br />
                    <label for="mensagem">Mensagem:</label>
                    <br />
                    <textarea id="mensagem" name="mensagem" type="text"></textarea>
                    <input id="enviar" value="Enviar" name="enviar" type="submit" style="cursor:pointer;">
                </form>

            </div>
        </div>
    </main>
    <footer>
        <div id="media">
            <img class="logoRodape" src="../img/logo_rodape.png" />
            <a class="facebook" href="https://www.facebook.com/saanyrock" target="_blank">
                <img src="../img/media_facebook.png" />
                <img src="../img/media_facebook_hover.png" />
            </a>
            <a class="twitter" href="https://twitter.com/SaanyRock" target="_blank">
                <img src="../img/media_twitter.png" />
                <img src="../img/media_twitter_hover.png" />
            </a>
            <a class="instagram" href="https://www.instagram.com/saanyrock/" target="_blank">
                <img src="../img/media_instagram.png" />
                <img src="../img/media_instagram_hover.png" />
            </a>
        </div>
        <div id="copyright">Copyright © 2016 - Sany Fernandes | Todos os direitos reservados e protegidos</div>
    </footer>
</body>
</html>