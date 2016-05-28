﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Sany Fernandes - Interface e Usabilidade</title>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
</head>
<body>
    <header>
        <a href="../index.php"><img class="logoCabecalho" src="../img/logo_fundo.png" height="120" /></a>
        <a href="../index.php"><img class="logoCabecalhoTexto" src="../img/logo_texto_cabecalho.png" height="40" /></a>
        <menu id="menu-cabecalho">
            <div class="menuItem"><a class="menuLink" href="sobre.php" onclick="javascript:location.reload()">Sobre</a></div>
            <div class="menuItem" onmouseout="esconderDropdown(this)">
                <a class="menuLink" href="portfolio.php" onmouseover="mostrarDropdown(this)">Portifólio</a>
                <div class="menuDropdown" onmouseover="mostrarDropdown(this)">
                    <a href="design_multimidia.php">Design Multimídia</a>
                    <a href="fotografia.php">Fotografia</a>
                    <a href="interface_usabilidade.php">Interface e Usabilidade</a>
                    <a href="animacao_grafica.php">Animação Gráfica</a>
                    <a href="audio_video_digital.php">Áudio e Vídeo Digital</a>
                    <a href="culturas_midias_sociais.php">Culturas e Mídias Sociais</a>
                </div>
            </div>
            <div class="menuItem"><a class="menuLink" href="contato.php">Contato</a></div>
        </menu>
    </header>
    <main>
        <div class="conteudo">
            <div class="conteudoTitulo">Interface e Usabilidade</div>
            <div class="conteudoMeio">
                <a name="intro"></a>
                <div class="controlButtons">
                    <a href="#01">Trab #01</a>
                    <a href="#02">Trab #02</a>
                    <a href="#03">Trab #03</a>
                </div>

                <h1>Introdução</h1>
                <p>
                    <b>Carga Horária:</b> 50 horas / 60 Aulas<br>
                    <b>Professor:</b> Daniel Cabral Borges<br><br>
                    <b>EMENTA</b><br>

                    Conceitos e fundamentos dos processos da interação homem‐máquina em mídias digitais diversas. Os
                    elementos de interface e suas aplicações, hierarquia de informações e navegação. Reflexão sobre o uso e
                    adequação das interfaces aos diferentes suportes do ambiente digital, e sua variedade de demandas.<br><br>
                    <b>OBJETIVOS</b><br>
                    Planejar navegação e desenvolver visão critica de usabilidade. Desenvolver interface para sistemas
                    interativos de meio digital.
                </p>
            </div>
        </div>
    </main>
    <footer>
        <div id="media">
            <img class="logoRodape" src="../img/logo_rodape.png">
            <a class="facebook" href="https://www.facebook.com/saanyrock" target="_blank">
                <img src="../img/media_facebook.png">
                <img src="../img/media_facebook_hover.png">
            </a>
            <a class="twitter" href="https://twitter.com/SaanyRock" target="_blank">
                <img src="../img/media_twitter.png">
                <img src="../img/media_twitter_hover.png">
            </a>
            <a class="instagram" href="https://www.instagram.com/saanyrock/" target="_blank">
                <img src="../img/media_instagram.png">
                <img src="../img/media_instagram_hover.png">
            </a>
        </div>
        <div id="copyright">Copyright © 2016 - Sany Fernandes | Todos os direitos reservados e protegidos</div>
    </footer>
</body>
</html>