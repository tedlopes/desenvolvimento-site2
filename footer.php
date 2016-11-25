		</main>

		<footer>
			<div class="logo-rodape">
				<a href="index.html">
					<img src="<?php bloginfo("template_url"); ?>/imagens/logo-rodape.png" alt="Logo do Rodapé">
				</a>

				<p>2016 Todos os Direitos Reservados</p>
			</div>			
		</footer>
	</div>

	<script src="<?php bloginfo("template_url"); ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/bower_components/wow/dist/wow.min.js"></script>
	<script>
		$(function(){
			$('.toggle').click(function(){
				$('.layout').toggleClass('ativo');
				$('.menu-responsivo').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});
			new WOW().init();
		});
	</script>

</body>
</html>