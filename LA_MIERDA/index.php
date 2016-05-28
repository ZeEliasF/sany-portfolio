<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                    <a href="paginas/audio_video_digital.php">�?udio e Vídeo Digital</a>
                    <a href="paginas/culturas_midias_sociais.php">Culturas e Mídias Sociais</a>
                </div>
            </div>
            <div class="menuItem"><a class="menuLink" href="paginas/contato.php">Contato</a></div>
        </menu>
    </header>
    <main>
        <div class="conteudo">
            <div class="conteudoTitulo">
                <div style="width: 100%;height:100px;margin:0">
                    <img src="img/perfil.jpg" style="border-radius:50%; width: 100px;float: left; margin: 0 20px;">
                    <p style="float:left;font-size:12pt; line-height: 23px; font-weight: normal;text-align: left;">
                        Olá, eu sou a Sany.<br>
                        Seja bem vindo ao meu portifólio acadêmico do Modulo III de Design Gráfico.<br>
                        Sinta-se a vontade para conhecer os meus trabalhos.
                    </p>
                </div>
            </div>
            <div class="conteudoMeio">
                <div class="disciplina">
                    <a href="paginas/design_multimidia.php">
                        <img src="img/Dis_Multmidia.png" />
                        <b>Design<br>Multmídia</b>
                    </a>
                </div>
                <div class="disciplina">
                    <a href="paginas/fotografia.php">
                        <img src="img/Dis_fotografia.png" />
                        <b style="top:-150px;">Fotografia</b>
                    </a>
                </div>
                <div class="disciplina">
                    <a href="paginas/interface_usabilidade.php">
                        <img src="img/Dis_Interface.png" />
                        <b>Interface e<br>Usabilidade</b>
                    </a>
                </div>
                <div class="disciplina">
                    <a href="paginas/animacao_grafica.php">
                        <img src="img/Dis_animacao.png" />
                        <b>Animação<br>Gráfica</b>
                    </a>
                </div>
                <div class="disciplina">
                    <a href="paginas/audio_video_digital.php">
                        <img src="img/Dis_audio_video.png" />
                        <b>�?udio e Vídeo<br>Digital</b>
                    </a>
                </div>
                <div class="disciplina">
                    <a href="paginas/culturas_midias_sociais.php">
                        <img src="img/Dis_cultura_midias.png" />
                        <b>Culturas e<br>Mídias Digitais</b>
                    </a>
                </div>
            </div>
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
