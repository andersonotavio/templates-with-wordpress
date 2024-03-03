<!DOCTYPE html>
<html lang="<?php language_attributes() ?>;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head()?>
</head>
<body <?php body_class()?>>

  <div id="page" class="site">
    <header>
      <section class="top-bar">
        <div class="container">
          <div class="logo">
            <?php 
              if(has_custom_logo()){
                the_custom_logo();
              }else{
            ?>
            <a href="<?php home_url('/');?>"><span><?php bloginfo('name');?></span></a>
            <?php 
              }
            ?>
          </div>
          <div class="searchbox">
            search
          </div>
        </div>
      </section>
      <section class="menu-area">
        <div class="container">
          <nav class="main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'otaviow_main_menu', 'depth' => 2));?>
          </nav>
        </div>
      </section>
    </header>