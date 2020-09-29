<?php get_header(); ?>

<header class="hero">
    <div class="section-center titolo">
      <article class="hero-info">
        <h1>A small selection of my <br>
          projects, enjoy !</h1>       
      </article> 
    </div>
  </header>
  <!-- end of header -->

<main class="proj-overview">
    <?php  
      while(have_posts()) {
      the_post(); ?>
      
     
      <section class="proj-container">
      <div class="proj-img">
        <img src="<?php echo get_theme_file_uri('/images/acme.jpg')?>;" alt="" width="100%" height="auto">
      </div>
      <div class="proj-text">
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_content(),20)?></p>
        <a href="<?php the_permalink(); ?>" class="btn-small">View project</a>
      </div>
    </section>
        <?php }
    ?>
</main>     
    

  <p class="page-num"><?php echo paginate_links(); ?></p>
  
 <?php get_footer();?>