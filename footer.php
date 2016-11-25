		</main>

		<footer>
			<div class="logo-rodape wow bounceInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
				<a href="index.html">
					<img src="imagens/logo-rodape.png" alt="Logo do Rodapé">
				</a>

				<p>2016 Todos os Direitos Reservados</p>
			</div>			
		</footer>
	</div>

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/wow/dist/wow.min.js"></script>
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