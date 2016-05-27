<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Sany Fernandes - Sobre</title>
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
        <a href="../index.php">
            <img class="logoCabecalho" src="../img/logo_fundo.png" height="120" />
        </a>
        <a href="../index.php">
            <img class="logoCabecalhoTexto" src="../img/logo_texto_cabecalho.png" height="40" />
        </a>
        <menu id="menu-cabecalho">
            <div class="menuItem">
                <a class="menuLink" href="sobre.php">Sobre</a>
            </div>
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
            <div class="menuItem">
                <a class="menuLink" href="contato.html">Contato</a>
            </div>
        </menu>
    </header>
    <main>
        <div class="conteudo">
            <div class="conteudoTitulo">Sobre</div>
            <div class="conteudoMeio">
                <h1>Sany Fernandes</h1>
                <p style="width:650px !important;">
                    Tem 24 anos e nasceu em Anápolis, de onde se mudou aos 3 anos e cresceu em Vianópolis, interior de Goiás. Concluiu o Ensino médio em 2009 e logo ingressou no Curso de Gastronomia da UniEvangélica onde formou-se em 2012.
                    <br />
                    <br />
                    Após muitas idas e vindas na área de Confeitaria, foi chamada pra trabalhar com sites por um empresa de goiania, onde aprendeu algumas coisas sobre php e CSS e começou a produzir, também, layouts impressos.
                    Logo foi chamada para trabalhar na área gráfica em uma em uma empresa de pequeno porte, na qual ficou por mais de 2 anos e descobriu sua verdadeira paixão, e então mudou-se para Goiânia com a intenção de aprimorar seus conhecimentos e adquirir novos. Assim iniciou os estudos no curso de Design Gráfico da Faculdade de Tecnologia Senac Cora Coralina em 2015.
                    <br />
                    <br />

                    Atualmente trabalha na Gráfica Marka, e já passo por um agência  de publicidade da cidade, além de atuar como freelancer.

                </p>
                <img src="../img/Sobre.JPG" width="300" style="float:right;border-radius:50%;margin-left:20px;margin-top:-25px; width:300px !important;" />
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
