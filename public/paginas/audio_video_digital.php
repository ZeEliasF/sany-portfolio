<!DOCTYPE html>
<html>
<head>
    <title>Sany Fernandes - Audio e Video Digital</title>
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
            <div class="conteudoTitulo">Audio e Vídeo Digital</div>
            <div class="conteudoMeio">
                <a name="intro"></a>
                <div class="controlButtons">
                    <a href="#01">Trab #01</a>
                    <a href="#02">Trab #02</a>
                    <a href="#03">Trab #03</a>
                </div>
                <h1>Introdução</h1>
                <p>
                    <b>Carga Horária:</b> 55 horas / 60 Aulas<br>
                    <b>Professor:</b> Diogo Maia<br><br>
                    <b>EMENTA</b><br>
                    Estudo dos sistemas de televisão e formatos de arquivos de áudio e vídeo para utilização em mídias diversas. Edição de áudio e vídeo digital; produção de vídeos através de imagens estáticas (stop‐motion); técnicas de composição; renderização de arquivos para diversos tipos de saída.<br><br>
                    <b>OBJETIVOS</b>
                    Ao final do curso o estudante será capacitado a trabalhar com captura, edição de vídeos digitais e aplicar
                    efeitos visuais e sonoros a vídeos.
                </p>
            </div>
            <div class="conteudoMeio">
                <div class="controlButtons">
                    <a href="#intro">Introdução</a>
                    <a href="#02">Trab #02</a>
                    <a href="#03">Trab #03</a>
                </div>
                <a name="01"></a>
                <h1>#01 - Mixagem</h1>
                <p>
                    Mixagem de duas musicas com versões em dois idiomas diferentes, foi utilizada  musica Let it Go/Livre Estou do filme "Frozen"<br>
                    .<audio controls>
                        <source src="../Trabalhos/Mixagem.wav">
                        <source src="../Trabalhos/Mixagem.mp3">
                        <source src="../Trabalhos/Mixagem.ogg">
                    </audio>
                    <div class="download">
                        <a href="../Trabalhos/Mixagem.wav" target="_blank" download>Download</a>
                    </div>
                </p>
            </div>
            <div class="conteudoMeio">
                <a name="02"></a>
                <div class="controlButtons">
                    <a href="intro">Introdução</a>
                    <a href="#01">Trab #01</a>
                    <a href="#03">Trab #03</a>
                </div>
                <h1>#02 - Loop</h1>
                <p>
                    Edição de audio de forma a deixar o aúdio continuo, sem cortes de um mesmo som. Foi utilizada a música What's Up - 4 Non Blondes<br>
                    .<audio controls>
                        <source src="../Trabalhos/Mixagem.wav">
                        <source src="../Trabalhos/Mixagem.mp3">
                        <source src="../Trabalhos/Mixagem.ogg">
                    </audio>
                    <div class="download">
                        <a href="../Trabalhos/Mixagem.wav" target="_blank" download>Download</a>
                    </div>

                </p>
            </div>
            <div class="conteudoMeio">
                <a name="03"></a>
                <div class="controlButtons">
                    <a href="#intro">Introdução</a>
                    <a href="#01">Trab #01</a>
                    <a href="#02">Trab #02</a>
                </div>

                <h1>#03 - Stop Motion</h1>
                <p>
                    Criaçao de um video em stop motion<br>
                    <iframe width="950" height="560" src="https://www.youtube.com/embed/d-MV5P7052k" frameborder="0" allowfullscreen></iframe>
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
