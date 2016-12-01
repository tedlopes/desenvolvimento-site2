<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("name"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/geral.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/plugins.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/<?php echo $style; ?>.css">
	
</head>
<body <?php body_class(); ?>>
	
	<?php include('includes/organisms/menu-responsivo.php'); ?>
	

	<div class="layout">
		<style>
			<?php if(get_the_post_thumbnail()) : ?>
				header {
					background-image: url('<?php the_post_thumbnail_url(); ?>');
				}
			<?php else : ?>
				header {
					background-image: url('<?php bloginfo('template_url'); ?>/imagens/foto-slide-pagina-inicial.jpg');
				}
			<?php endif; ?>
		</style>		

		<header>

			<div class="container">
				<div class="logo wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="0.1s">
				    <a href="<?php bloginfo("url") ?>">
						<img src="<?php bloginfo("template_url"); ?>/imagens/logo-slide.png" alt="Logo do Topo">
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
			            		<img src="<?php bloginfo("template_url"); ?>/imagens/icone-facebook.png" alt="Link para o Facebook">
			            	</a>
			            </li>
			            	
			            <li>
			            	<a href="https://www.youtube.com/">
			            		<img src="<?php bloginfo("template_url"); ?>/imagens/icone-youtube.png" alt="Link para o Youtube">
			            	</a>
			            </li>
			            
			        </ul>

		        </div>

		            <h1><?php echo $chamada; ?></h1>

		            <p>Code // Share // Reboot</p>

			</div>

		</header>

		<main>