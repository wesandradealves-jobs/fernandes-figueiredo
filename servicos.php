<?php 
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$query = new WP_Query( array( 'post_type' => 'servico', 'order' => 'ASC') );
	if($query->have_posts()=="1"){
		echo '<section id="servicos" class="b">
		<div class="wrap">
			<ul class="b accordion">';			
			while ( $query->have_posts() ) : $query->the_post();
			echo '<li>
					<h2 class="b">'.get_the_title().'</h2>
					<p class="b">'.substr(get_the_content(), 0, 90).' ...</p>
			</li>';
			endwhile; 
			wp_reset_query();	
			echo '</ul>
		</div>
		</section>';		
	}
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$query = new WP_Query( array( 'post_type' => 'cliente', 'order' => 'ASC') );
	if($query->have_posts()=="1"){
		echo '<section id="clientes" class="b">
		<div class="wrap">
			<h1 class="b">Clientes</h1>
			<ul class="clientes">';			
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
