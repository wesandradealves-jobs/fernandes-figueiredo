<section class="flex">
	<div class="flex100">
		<div class="wrap">
			<h1 class="b">Venha nos fazer uma visita</h1>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1836.4764712239426!2d-43.36066354315801!3d-22.988757846581994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bda304a7599a1%3A0x1f1d768970cbf4b!2sAv.+Jo%C3%A3o+Cabral+de+Melo+Neto%2C+200+-+Barra+da+Tijuca%2C+Rio+de+Janeiro+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1459742308903" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<!-- <div id="map" class="b"></div> -->
	<!-- https://mapbuildr.com/buildr/5qvm78 -->
	<div id="contato" class="flex100">
		<div class="wrap flex">
			<div class="flex50">
				<?php echo do_shortcode('[contact-form-7 id="51" title="Orçamento"]'); ?>
			</div>
			<div class="flex50">
				<h2 class="b">Telefone</h2>
				<br/>
				<?php echo "<p class='b'>".get_theme_mod( 'telefone' )."</p>"; ?>
				<br/>
				<h2 class="b">Email</h2>
				<br/>
				<?php echo "<p class='b'><a href='mailto:".get_theme_mod( 'email' )."' title='".get_theme_mod( 'email' )."'>".get_theme_mod( 'email' )."</a></p>"; ?>
				<br/>
				<h2 class="b">Endereço</h2>
				<br/>
				<?php echo "<p class='b'>".get_theme_mod( 'endereco' )."</p>"; ?>
			</div>
		</div>
	</div>
</section>