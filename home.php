<?php 
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$query = new WP_Query( array( 'post_type' => 'webdoor', 'posts_per_page' => 1, 'offset' => $offset, 'order' => 'ASC') );
	if($query->have_posts()=="1"){
		echo '<section id="webdoor" class="webdoor flex">
		<div class="wrap flex">
			<div class="flex100">';			
			while ( $query->have_posts() ) : $query->the_post();
			echo '<style type="text/css">#webdoor{background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');}</style>';
			echo '<h1 class="b">'.get_the_title().'</h1>';
			echo '<p class="b">'.get_the_content().'</p>';
			if(get_field('url_externa')=="Sim"){
				if(get_field('url')){
					echo '<a href="http://'.get_field('url').'" class="b btn btn_default" title="'.get_the_title().'">Consultar</a>';
				}
			}
			endwhile; 
			wp_reset_query();	
			echo '
			</div>
		</div>
		</section>';		
	}
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$query = new WP_Query( array( 'post_type' => 'servico', 'order' => 'ASC') );
	if($query->have_posts()=="1"){
		echo '<section id="servicos" class="b">
		<div class="wrap">
			<h1 class="b">Serviços</h1>
			<ul class="servicos">';			
			while ( $query->have_posts() ) : $query->the_post();
			echo '<li onclick="document.location='."'".get_the_permalink()."'".';return false;"><div class="b">
					<h2 class="b">'.get_the_title().'</h2>
					<p class="b">'.substr(get_the_content(), 0, 90).' ...</p>
					<p class="b"><a href="'.get_the_permalink().'" title="'.get_the_title().'">Saiba Mais</a></p>
				</div>
			</li>';
			endwhile; 
			wp_reset_query();	
			echo '</ul>
		</div>
		</section>';		
	}
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$query = new WP_Query( array( 'post_type' => 'associado', 'order' => 'ASC') );
	if($query->have_posts()=="1"){
		echo '<section id="associados" class="b">
		<div class="wrap">
			<h1 class="b">Associados</h1>
			<ul class="associados">';			
			while ( $query->have_posts() ) : $query->the_post();
			if(get_field(url)!=""){
				echo '<li onclick="document.location='."'http://".get_field(url)."'".';return false;"><div class="b">';
			} else {
				echo '<li><div class="b">';
			}
			echo '<img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'" class="b">
				</div>
			</li>';
			endwhile; 
			wp_reset_query();	
			echo '</ul>
		</div>
		</section>';		
	}
?>
<section id="contato" class="webdoor flex" style="background-image:url(<?php echo site_url()."/wp-content/uploads/2016/04/CALC.jpg"; ?>);">
	<div class="wrap flex">
		<div class="flex100">
			<h1 class="b">Faça já uma consulta</h1>
			<p class="b">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam porro aperiam, ipsum blanditiis voluptatem tempore?</p>
			<?php echo do_shortcode('[contact-form-7 id="51" title="Orçamento"]'); ?>
		</div>
	</div>
</section>