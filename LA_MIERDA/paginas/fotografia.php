﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Sany Fernandes - Fotografia</title>
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
                    <a href="audio_video_digital.php">�?udio e Vídeo Digital</a>
                    <a href="culturas_midias_sociais.php">Culturas e Mídias Sociais</a>
                </div>
            </div>
            <div class="menuItem"><a class="menuLink" href="contato.php">Contato</a></div>
        </menu>
    </header>
    <main>
        <div class="conteudo">
            <div class="conteudoTitulo">Fotografia</div>
            <div class="conteudoMeio">
                <div class="controlButtons">
                    <a href="#01">Trab #01</a>
                    <a href="#02">Trab #02</a>
                    <a href="#03">Trab #03</a>
                </div>

                <h1>Introdução</h1>
                <p>
                    <b>Carga Horária:</b> 66 horas / 80 Aulas<br>
                    <b>Professor:</b> Gésion Carvalho<br><br>
                    <b>EMENTA</b><br>

                    Compreender a imagem como elemento significativo e determinante da comunicação contemporânea,
                    pelo seu caráter de recepção instantâneo. Perceber a fotografia como ferramenta indispensável na
                    construção de imagens, seja para elaboração de mensagens em peças gráficas e/ou virtuais, seja como
                    mero instrumento de registro. A disciplina deve fomentar debate sobre as formas de circulação de
                    imagens na sociedade utilizando os princípios da semiótica, e promover o estudo dos componentes
                    estéticos e simbólicos da imagem, assim como o caráter ético do profissional da área.<br><br>
                    <b>OBJETIVOS</b><br>
                    Desenvolver competência profissional para produzir, criticar ou administrar produção fotográfica para
                    fins de aplicação no Design Gráfico, com postura profissional e ética.
                </p>
                <a name="01"></a>
                <div class="controlButtons">
                    <a href="#intro">Introdução</a>
                    <a href="#02">Trab #02</a>
                    <a href="#03">Trab #03</a>
                </div>
                <h1>#01 - Camera Analógia</h1>
                <p>
                    Aula em Campo realizada no Parque Flamboyant
                    com uso de Cameras Analogicas para estudo
                </p>
                <img src="../img/foto/analogica01.jpg">
                <a name="02"></a>
                <div class="controlButtons">
                    <a href="#intro">Introdução</a>
                    <a href="#01">Trab #01</a>
                    <a href="#03">Trab #03</a>
                </div>
                <h1>#02 - Práticas em Casa</h1>
                <p>
                    Práticas realizadas em casa, com a utilizaçao
                    da camera comprada pras aulas.
                </p>
                <img src="../img/foto/pratica01.jpg">
                <img src="../img/foto/pratica02.jpg">
                <img src="../img/foto/pratica03.jpg">
                <a name="03"></a>
                <div class="controlButtons">
                    <a href="#intro">Introdução</a>
                    <a href="#01">Trab #01</a>
                    <a href="#02">Trab #02</a>
                </div>
                <h1>#03 - Aula em Estúdio</h1>
                <p>
                    Aula realizada em estúdio da faculdade, com intençao
                    de aprender e testar os elementos da fotografia e praticar.
                </p>
                <img src="../img/foto/estudio01.jpg">
                <img src="../img/foto/estudio02.jpg">
                <img src="../img/foto/estudio03.jpg">
                <img src="../img/foto/estudio04.jpg">
                <img src="../img/foto/estudio05.jpg">

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