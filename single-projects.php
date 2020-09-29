<?php 
    get_header();

    while(have_posts()) {
        the_post(); ?>
         <!-- about -->
  <section class="section about single-project">
    <div class="section-center about-center">
      <article class="about-info">
         <!-- section title -->
         <div class="section-title about-title">
          <h2 class="project-title"><?php the_title(); ?></h2> 
        </div>
        <img src="images/navigli1.jpg" alt="" width="80%" height="30%">
        <div class="info-project">
          <p><?php the_time('N M Y'); ?></p>
          <p><?php echo get_the_category_list(', ')?></p>
          <p>#Tag</p>
        </div>
        <p><?php the_content(); ?></p>
      </article>
    </div>

    <div class="btn-cont">
      <a href="projects.html" class="bottone">Visit website</a>
    </div>
    
  </section>
    <?php }

    get_footer();
?>