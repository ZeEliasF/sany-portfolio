<!DOCTYPE html>
<html>
<head>
    <title>Sany Fernandes - Animação Gráfica</title>
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
            <div class="menuItem"><a class="menuLink" href="contatos.php">Contatos</a></div>
        </menu>
    </header>
    <main>
        <div class="conteudo">
            <div class="conteudoTitulo">Animação Gráfica</div>
            <div class="conteudoMeio">
                <a name="intro"></a>

                <h1>Introdução</h1>
                <p>
                    <b>Carga Horária:</b> 66 horas / 80 Aulas<br>
                    <b>Professor:</b> Cloves Elias Ferreira<br><br>
                    <b>EMENTA</b><br>
                    Conceitos, história, princípios básicos e operacionais (planejamento) da animação quadro a quadro convencional, produção e finalização de animações – roteiro, personagens e ficha técnica, storyboard, layouts, sincronia de som e movimentos, pós‐produção e uso de aplicativos digitais. Estudo de aplicativos gráficos e de áudio, mixagem, edição final de áudio‐vídeo, masterização e técnicas de acabamento. Desenvolvimento de animação bidimensional (curtas ou longas) para aplicação em mídias interativas digitais explorando seu potencial de comunicação.<br><br>
                    <b>OBJETIVOS</b>
                    Planejar, analisar, identificar e desenvolver projetos de animação gráfica digitais, tradicionais e mistas.
                </p>

                <div class="controlButtons">
                    <div class="download">
                        <a href="../trabalhos/animacoes.zip" target="_blank" download>Download Animacões</a>
                    </div>
                </div>
                <a name="01"></a>
                <div class="controlButtons">
                    <a href="../trabalhos/animacao01.swf" target="controlbuttons">Interpolação</a>
                    <a href="../trabalhos/animacao02.swf" target="controlbuttons">Bola Pingando</a>
                    <a href="../trabalhos/animacao03.swf" target="controlbuttons">Borboleta</a>
                    <a href="../trabalhos/animacao04.swf" target="controlbuttons">Bola Movimentando</a>
                    <a href="../trabalhos/animacao05.swf" target="controlbuttons">Corda</a>
                    <a href="../trabalhos/animacao06.swf" target="controlbuttons">Personagem</a>


                    <iframe align="left" width="400" height="200" frameborder="0" name="controlbuttons"></iframe>
                </div>




                </object>
                </object>

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
