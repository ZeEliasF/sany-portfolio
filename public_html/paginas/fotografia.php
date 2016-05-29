<!DOCTYPE html>
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
    <meta name="description" content="Responsive Image Gallery with jQuery" />
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../css/demo.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/elastislide.csss">
  		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />  
    <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/responsivo.js"></script>
    		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
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
            </div>
            </div>
    </main>
    		<div class="container">
			<div class="header">

				<div class="clr"></div>
			</div><!-- header -->
			
			<div class="content">
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="../images/thumbs/1.jpg" data-large="images/1.jpg" alt="image01" data-description="Fotografia com camera anal�gica tirada no Parque Flamboyant" /></a></li>
									<li><a href="#"><img src="../images/thumbs/2.jpg" data-large="images/2.jpg" alt="image02" data-description="Fotografia com camera anal�gica tirada no Parque Flamboyant" /></a></li>
									<li><a href="#"><img src="../images/thumbs/3.jpg" data-large="images/3.jpg" alt="image03" data-description="Light Painting fotografado em aula no auditorio da Faculdade" /></a></li>
									<li><a href="#"><img src="../images/thumbs/4.jpg" data-large="images/4.jpg" alt="image04" data-description="Fotografia tirada no ensaio em est�dio" /></a></li>
									<li><a href="#"><img src="../images/thumbs/5.jpg" data-large="images/5.jpg" alt="image05" data-description="Fotografia tirada no ensaio em est�dio" /></a></li>
									<li><a href="#"><img src="../images/thumbs/6.jpg" data-large="images/6.jpg" alt="image06" data-description="Fotografia tirada no ensaio em est�dio" /></a></li>
									<li><a href="#"><img src="../images/thumbs/7.jpg" data-large="images/7.jpg" alt="image07" data-description="Fotografia tirada no ensaio em est�dio" /></a></li>
									<li><a href="#"><img src="../images/thumbs/8.jpg" data-large="images/8.jpg" alt="image08" data-description="Fotografia de Produto tirado em ensaio no est�dio" /></a></li>
									<li><a href="#"><img src="../images/thumbs/9.jpg" data-large="images/9.jpg" alt="image09" data-description= "Light Painting fotografado em aula no auditorio da Faculdade" /></a></li>
									<li><a href="#"><img src="../images/thumbs/10.jpg" data-large="images/10.jpg" alt="image10" data-description="Which fortified her visage from the sun" /></a></li>
									<li><a href="#"><img src="../images/thumbs/11.jpg" data-large="images/11.jpg" alt="image11" data-description="Whereon the thought might think sometime it saw" /></a></li>
									<li><a href="#"><img src="../images/thumbs/12.jpg" data-large="images/12.jpg" alt="image12" data-description="The carcass of beauty spent and done" /></a></li>
									<li><a href="#"><img src="../images/thumbs/13.jpg" data-large="images/13.jpg" alt="image13" data-description="Time had not scythed all that youth begun" /></a></li>
									<li><a href="#"><img src="../images/thumbs/14.jpg" data-large="images/14.jpg" alt="image14" data-description="Nor youth all quit; but, spite of heaven's fell rage" /></a></li>
									<li><a href="#"><img src="../images/thumbs/15.jpg" data-large="images/15.jpg" alt="image15" data-description="Some beauty peep'd through lattice of sear'd age" /></a></li>
									<li><a href="#"><img src="../images/thumbs/16.jpg" data-large="images/16.jpg" alt="image16" data-description="Oft did she heave her napkin to her eyne" /></a></li>
									<li><a href="#"><img src="../images/thumbs/17.jpg" data-large="images/17.jpg" alt="image17" data-description="Which on it had conceited characters" /></a></li>
									<li><a href="#"><img src="../images/thumbs/18.jpg" data-large="images/18.jpg" alt="image18" data-description="Laundering the silken figures in the brine" /></a></li>
									<li><a href="#"><img src="../images/thumbs/19.jpg" data-large="images/19.jpg" alt="image19" data-description="That season'd woe had pelleted in tears" /></a></li>
									<li><a href="#"><img src="../images/thumbs/20.jpg" data-large="images/20.jpg" alt="image20" data-description="And often reading what contents it bears" /></a></li>
									<li><a href="#"><img src="../images/thumbs/21.jpg" data-large="images/21.jpg" alt="image21" data-description="As often shrieking undistinguish'd woe" /></a></li>
									<li><a href="#"><img src="../images/thumbs/22.jpg" data-large="images/22.jpg" alt="image22" data-description="In clamours of all size, both high and low" /></a></li>
									<li><a href="#"><img src="../images/thumbs/23.jpg" data-large="images/23.jpg" alt="image23" data-description="Sometimes her levell'd eyes their carriage ride" /></a></li>
									<li><a href="#"><img src="../images/thumbs/24.jpg" data-large="images/24.jpg" alt="image24" data-description="As they did battery to the spheres intend" /></a></li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                <script type="text/javascript" src="../js/jquery.tmpl.min.js"></script>
                <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="../js/jquery.elastislide.js"></script>
                <script type="text/javascript" src="../js/gallery.js"></script>
            </div>
        </div>
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
