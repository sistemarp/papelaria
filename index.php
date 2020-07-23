<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./_css/index.css">
	<!-- linkando o estilo do slide de iagens gallery-->
	<link rel="stylesheet" href="_css/gallery.theme.css">
	<link rel="stylesheet" href="_css/gallery.min.css">
</head>
<body>
	<?php include_once("./_paginas/menu.php") ?>

	<div class="banner-horizontal-top">
		<!-- Codigo do gallery para rodar o slide -->
		<div class="gallery autoplay items-3">
		<div id="item-1" class="control-operator"></div>
		<div id="item-2" class="control-operator"></div>
		<div id="item-3" class="control-operator"></div>

		<figure class="item">
			<h1><img src="./_img/index/banner-horizontal-1.jpg" width='730' height='230'></h1>
		</figure>

		<figure class="item">
			<h1><img src="./_img/index/banner-horizontal-2.jpg" width='730' height='230'></h1>
		</figure>

		<figure class="item">
			<h1><img src="./_img/index/banner-horizontal-3.jpg" width='730' height='230'></h1>
		</figure>

		<div class="controls">
			<a href="#item-1" class="control-button">•</a>
			<a href="#item-2" class="control-button">•</a>
			<a href="#item-3" class="control-button">•</a>
		</div>
		</div>	
		<!-- Fim codigo gallery -->		
	</div>

	<section class="container">

		<div class="icon-produtos">
			<div class="produto">
				<div class="border-icon"><img class="iconPDT" src="./_img/index/livro.svg"></div>
				<div class="pdt-desc">
					<img class='img_pdt' src="./_img/index/pdt1.png">
					<span>Desde 2010 o mercado de personalizados não para de crescer. Por isso, ele se tronou, sem dúvidas, um investimento de retorno garantido. Isso claro, se tiver comprometimento com seu cliente e qualidade em seus produtos.</span>
					<button class="continuar" id='pdt1'><span hidden="hide">Continuar</span></button>
				</div>
				
			</div>

			<div class="produto-center">
				<div class="border-icon-center"><img class="iconPDT2" src="./_img/index/camisa.svg"></div>
				<div class="pdt-center-desc">
					<img class='img_pdt' src="./_img/index/pdt2.png">
					<span>Desde 2010 o mercado de personalizados não para de crescer. Por isso, ele se tronou, sem dúvidas, um investimento de retorno garantido. Isso claro, se tiver comprometimento com seu cliente e qualidade em seus produtos.</span>
					<button class="continuar" id='pdt1'><span hidden="hide">Continuar</span></button>					
				</div>
				
			</div>

			<div class="produto">
				<div class="border-icon"><img class="iconPDT" src="./_img/index/caneta.svg"></div>
				<div class="pdt-desc">
					<img class='img_pdt' src="./_img/index/pdt1.png">
					<span>Desde 2010 o mercado de personalizados não para de crescer. Por isso, ele se tronou, sem dúvidas, um investimento de retorno garantido. Isso claro, se tiver comprometimento com seu cliente e qualidade em seus produtos.</span>
					<button class="continuar" id='pdt1'><span hidden="hide">Continuar</span></button>					
				</div>
				
			</div>
		</div>
		
	</section>

	<?php include_once("./_paginas/rodape.php") ?>
</body>
<script type='text/javascript' src='./_java/index.js'></script>
</html>