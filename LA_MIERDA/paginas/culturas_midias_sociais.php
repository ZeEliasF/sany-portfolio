﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Sany Fernandes - Culturas e Mídias Sociais</title>
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
            <div class="conteudoTitulo">Culturas e Mídias Sociais</div>
            <div class="conteudoMeio">
                <a name="intro"></a>
                <div class="controlButtons">
                    <a href="#01">Trab #01</a>
                    <a href="#02">Trab #02</a>
                    <a href="#03">Trab #03</a>
                </div>

                <h1>Introdução</h1>
                <p>
                    <b>Carga Horária:</b> 33 horas / 40 Aulas<br>
                    <b>Professor:</b> Maria Cristina Nunes Ferreira Neto<br><br>
                    <b>EMENTA</b><br>

                    Modificações e impactos das inovações tecnológicas na comunicação visual, nas relações entre sociedade, culturas urbanas, mídias e produção estética. Características e constituição da sociedade
                    virtual da informação e do conhecimento. Novos usos das mídias sociais no final do séc. XX e início do
                    XXI. Estudos Culturais e as novas tendências da comunicação frente às culturas regionais. Novos papéis e
                    lugares da comunicação na sociedade contemporânea.<br><br>
                    <b>OBJETIVOS</b><br>
                    Compreender a rápida transformação da cultura global e analisar o papel que as diferentes
                    mídias desempenham nas interações sociais e nas novas experiências de sociabilidades.
                    Proporcionar aos discentes oportunidades de desenvolver reflexão teórica e crítica das redes
                    sociais em sua dimensão política, entendendo‐as como uma possibilidade de resgate de valores
                    humanos e de busca de um senso de cidadania global compartilhada.
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
