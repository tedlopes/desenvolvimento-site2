<?php
	// Ativando suporte a imagem destacada
	add_theme_support('post-thumbnails');

	// Ativando Menus dinâmicos
	function register_my_menus() {
		register_nav_menus (
			array(
					'header-menu' => __('Menu do Topo')
				)
		);

	}
	add_action('init','register_my_menus');

