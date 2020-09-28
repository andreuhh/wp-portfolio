<?php get_header(); ?>

<!-- header -->
<header class="hero">
    
  <div class="section-title">
      <h1 class="dark-title"><?php the_archive_title(); ?></h1>
      <!-- the text of the description is in Post/Categories -->
      <p><?php the_archive_description(); ?></p>
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
            <?php if(has_excerpt()){
            echo get_the_excerpt();
        } else {
            echo wp_trim_words(get_the_content(), 20);
          }?>
          <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a>
            </p>
            <div class="card-footer">
              <p><?php the_time('M Y'); ?></p>
              <a><p><?php echo get_the_category_list(', ')?></p></a>
            </div>
          </div>
        </div>
      </div>
      <?php }
      
    ?>
    </div>
  </section>

  <p class="page-num"><?php echo paginate_links(); ?></p>
  
 <?php get_footer();?>