<?php get_header(); ?>

<!-- hero -->
<header class="hero">
    <div class="section-center hero-center">
      <article class="hero-info">
        <h1>Hi, i'm <span class="colored">Andrea</span></h1>
        <h4>Web & UI/UX Designer</h4>
        <!--<a href="contact.html" class="btn hero-btn last">Contattami</a>-->
        <!-- social icons -->
        <ul class="social-icons hero-icons">
          <li>
            <a href="https://github.com/andreuhh" class="social-icon second">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a href="https://www.behance.net/andreaguffi" class="social-icon second">
              <i class="fab fa-behance"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/andrea_wanderlust92/" class="social-icon second">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>  
    </div>
  </article>
  </header>
  <!-- end of hero -->
  
  <!-- about -->
  <section class="section about">
  
    <div class="section-center about-center">
      <article class="about-info">
        <!-- section title -->
        <div class="section-title about-title">
        <!--  <h2>chi sono</h2> -->
          <div class="underline"></div>
        </div>
        
        <!--end of section title -->
        <p>
          Il test attitudinale delle superiori diceva che sarei diventato un agente
          segreto, una sorta di James Bond ma più basso.<br>
          Onestamente non ho mai capito se quel test fosse vero oppure no ma
          bugie e vestiti eleganti non mi sono mai piaciutì, quindi ho scelto
          un percorso diverso.
        </p>
        <p>
          Ho svolto vari lavori prima di dedicarmi giorno e notte allo sviluppo web e alla
          creazione di interfacce e in questo periodo ho scoperto 3 cose su di me:
          amo il codice ed il
          suo lato misterioso, amo risolvere problemi e amo le persone.
        </p>

        <p>Find out more <a href="<?php echo site_url('/about')?>">about me</a></p>

      </article>
    </div>
  </section>
  <!-- end of about -->

  <!-- prog overview -->
  <main class="proj-overview">
    <h2>Latest projects</h2>
    
    <?php 
      $homepageProjects = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'projects'
      ));

      while($homepageProjects->have_posts()) {
        $homepageProjects->the_post(); ?>
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

    

    <section class="proj-container">
      <div id="item1" class="proj-text align-left">
        <h3>Casa Blu</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae aspernatur, officiis officia laudantium tempora cupiditate placeat omnis velit nulla quisquam a fuga ex totam molestias earum ratione odio. Perspiciatis, facilis.</p>
        <a href="single-project.html" class="btn-small">View project</a>
      </div>
      <div id="item2" class="proj-img">
        <img src="<?php echo get_theme_file_uri('/images/casablu.jpg')?>;" alt="" width="80%" height="auto">
      </div>
    </section>

    <section class="proj-container">
      <div class="proj-img">
        <img src="<?php echo get_theme_file_uri('/images/navigli1.jpg')?>;" alt="" width="80%" height="auto">
      </div>
      <div class="proj-text">
        <h3>Tranqui</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae aspernatur, officiis officia laudantium tempora cupiditate placeat omnis velit nulla quisquam a fuga ex totam molestias earum ratione odio. Perspiciatis, facilis.</p>
        <a href="single-project.html" class="btn-small">View project</a>
      </div>
    </section>
     
    <a id="btn-no-mobile" href="<?php echo site_url('/projects')?>" class="bottone">Show All</a>
  </main>  

<?php get_footer();?>