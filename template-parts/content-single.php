<div class="d-flex">
<!-- Content  -->
<main class="main flex-3" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID();?>" <?php post_class();?>>
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="thumbnail flex-1">
          <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?> <!-- thumbnail -->
          <div class="byline my-1">
              <span>
                Author: 
                <a href="<?php echo get_author_posts_url( $post->post_author );?>">
                  <?php the_author();?> | 
                </a>
              </span>
              <span>
                Date: <?php the_time( 'M. j, Y') ;?> 
              </span>
              <?php if(has_category()):;?>
              <span>
              | Categories: <?php the_category( ', ' );?> 
              </span>
              <?php endif;?>
              <?php if(has_tag()):;?>
              <span>
              | Tags: <?php the_tags( '', ', ', '') ;?>
              </span>
              <?php endif;?>
          </div><!-- .byline-->
          <div class="entry-header">
          <h3><?php the_title();?></h3>
          </div><!-- .entry-header-->
          <div class="entry-content">
            <?php the_content();?>
          </div><!-- .entry-content-->
        </article>    
    <?php endwhile;else:?>
      <p><?php esc_html_e('Sorry, no content available!');?></p>
    <?php endif;?>
  </main>
  <?php get_sidebar('single');?>
</div><!-- .d-flex -->