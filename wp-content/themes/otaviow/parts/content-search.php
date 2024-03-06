<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    
    <header>
        <a href="<?php the_permalink();?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <?php if('post' == get_post_type()):?>
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
        <?php if( has_category()) :?>
            <p>Categories: <?php the_category( ' ' ); ?></p>
        <?php endif; ?>
        <?php if( has_tag()) :?>
            <p>Tags: <?php the_tags( '', ', '); ?></p>
        <?php endif; ?>
        </div>
        <?php endif ;?>
    </header>
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>