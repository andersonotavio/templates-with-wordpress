<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <?php 
            while( have_posts() ):
                the_post();
                ?>
                <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                    
                    <header>
                        <a href="<?php the_permalink();?>">
                          <h2><?php the_title(); ?></h2>
                        </a>
                        <div class="meta-info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                            <p>Categories: <?php the_category( ' ' ); ?></p>
                            <p>Tags: <?php the_tags( '', ', ' ); ?></p>     
                        </div>
                    </header>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php

            endwhile;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>