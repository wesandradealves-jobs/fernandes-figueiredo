<?php get_header(); ?>
<?php if ( is_front_page() ) : ?>
  <main>
    <?php if ( have_posts () ) : while (have_posts()):the_post();?>
      <?php 
        include(get_template_directory()."/".get_post( $post )->post_name.".php");
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
<?php else : ?>
  <main>
    <?php if ( have_posts () ) : while (have_posts()):the_post();?>
      <?php 
        if(get_post( $post )->post_name!="contato"){
          echo '
            <style type="text/css">#webdoor{background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');}</style>
            <section id="webdoor" class="webdoor flex">
              <div class="wrap flex">
                <div class="flex100">
                  <h1 class="b">'.get_the_content().'</h1>
                </div>
              </div>
            </section>
          '; 
        }
        include(get_template_directory()."/".get_post( $post )->post_name.".php");
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
<?php endif; ?>
<?php get_footer(); ?>

