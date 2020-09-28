<?php get_header(); ?>

<!-- header -->
<header class="hero">
    
  <div class="section-title">
      <h1 class="dark-title">Blog</h1>
    </div>
  </header>
<!-- end of header -->

  <section class="section blog">
    <div class="section-center blog-center">
    <?php  
      while(have_posts()) {
      the_post(); ?>
      
      <!-- single article -->
      <div class="card">
        <!-- front of the card -->
        <div class="card-side card-front">
          <img src="./images/foto3.jpg" alt="" />
          <div class="card-info">
          <a href="single-article.html">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
          </a>
            <p>
              <?php the_excerpt(); ?>
            </p>
            <div class="card-footer">
              <p><?php the_time('M Y'); ?></p>
              <a href="https://acme-mohole.netlify.app/">
                <p>#tag article</p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php }
      
    ?>
    </div>
  </section>
  
 <?php get_footer();?>