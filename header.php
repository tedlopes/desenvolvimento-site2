<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Criando um site responsivo do começo ao fim</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/<?php echo $style; ?>.css">
	
</head>
<body>
	
	<?php include('includes/organisms/menu-responsivo.php'); ?>
	

	<div class="layout">
		<header>

			<div class="container">
				<div class="logo wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="0.1s">
				    <a href="index.php">
						<img src="imagens/logo-slide.png" alt="Logo do Topo">
					</a>
				</div>
				
				<div class="links wow bounceInDown" data-wow-duration="0.5s" data-wow-delay="0.1s">

				<?php include('includes/organisms/menu.php'); ?>
						

					<a class="toggle" href="javascript:;">
						<span></span>
						<span></span>
						<span></span>
					</a>

			        <ul class="social">
			            
			            <li>
			            	<a href="https://www.facebook.com/">
			            		<img src="imagens/icone-facebook.png" alt="Link para o Facebook">
			            	</a>
			            </li>
			            	
			            <li>
			            	<a href="https://www.youtube.com/">
			            		<img src="imagens/icone-youtube.png" alt="Link para o Youtube">
			            	</a>
			            </li>
			            
			        </ul>

		        </div>

		            <h1><?php echo $chamada; ?></h1>

		            <p>Code // Share // Reboot</p>

			</div>

		</header>

		<main>