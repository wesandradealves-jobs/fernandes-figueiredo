<?php get_header(); ?>
<main>
  <?php if ( have_posts () ) : while (have_posts()):the_post();?>
    <?php 
    echo '
    <style type="text/css">#webdoor{background-image:url('.wp_get_attachment_url(get_post_thumbnail_id(16)).');}</style>
    <section id="webdoor" class="webdoor flex">
      <div class="wrap flex">
        <div class="flex100">
          <h1 class="b">'.get_the_title().'</h1>
          <p class="b">'.substr(get_the_content(), 0, 90).' ...</p>
        </div>
      </div>
    </section>
    <div id="breadcrumb" class="b">
      <div class="wrap">
        <ul>
          <li><a href="'.site_url().'" title="Página Inicial">Home</a></li>
          <li>Serviços</li>
          <li>'.get_the_title().'</li>
        </ul>
      </div>
    </div>
    <section class="b" style="background-color:#fff !important;">
      <div class="wrap">
        <h1 class="b">'.get_the_title().'</h1>
        <p class="b">'.get_the_content().'</p>
      </div>
    </section>
    '; 
    ?>
    <?php endwhile; ?>
  <?php endif; ?> 
</main>
<?php get_footer(); ?>

