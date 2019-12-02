<div class="d-flex">
<!-- Content  -->
<main class="main flex-3" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID();?>" <?php post_class();?>>
            <?php the_content();?>
        </article>    
    <?php endwhile;else:?>
      <p><?php esc_html_e('Sorry, no content available!');?></p>
    <?php endif;?>
  </main>
<?php get_sidebar('page');?>
</div><!-- .d-flex -->