<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?> 
    </head>
    <body>
        
        <!-- navbar -->
  <nav class="nav" id="nav">
    <div class="nav-center">
      <!-- nav header -->
      <div class="nav-header">
        <!--<img src="./images/logo.svg" class="nav-logo" alt="nav logo" />-->
      
          <a href="<?php echo site_url('/')?>">Guffi Andrea</a>
        
        <button class="nav-btn" id="nav-btn">
          <i class="fas fa-bars"></i>
        </button>
      </div>

      <!-- nav-links -->
     <ul class="nav-links">
        <li >
          <a <?php if(is_page('projects')) echo'class="active"'?> href="<?php echo site_url('/projects')?>">projects</a>
        </li>

        <li>
          <a <?php if(is_page('about')) echo'class="active"'?> href="<?php echo site_url('/about')?>">about</a>
        </li>
        <li>
          <a <?php if(is_page('blog')) echo'class="active"'?> href="<?php echo site_url('/blog')?>">blog</a>
        </li>       
      </ul>

    </div>
  </nav>
  <!-- end of navbar -->
  <!-- sidebar -->
  <aside class="sidebar" id="sidebar">
    <div>
      <button class="close-btn" id="close-btn">
        <i class="fas fa-times"></i>
      </button>
      <!-- nav-links -->
      <ul class="sidebar-links">
        <li><a href="<?php echo site_url('/about')?>">About</a></li>
        <li><a href="<?php echo site_url('/projects')?>">Projects</a></li>
        <li><a href="<?php echo site_url('/blog')?>">Blog</a></li>
      </ul>
      <!-- social icons -->
      <ul class="social-icons ">
        <li>
          <a href="https://github.com/andreuhh" class="social-icon mobile">
            <i class="fab fa-github"></i>
          </a>
        </li>
        <li>
          <a href="https://www.behance.net/andreaguffi" class="social-icon mobile">
            <i class="fab fa-behance"></i>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/andrea.guffi/" class="social-icon mobile">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- end of sidebar -->
   