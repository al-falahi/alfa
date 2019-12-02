<div class="d-flex">
<!-- Content  -->
<main class="main flex-3 d-grid" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID();?>" <?php post_class();?>>
        <div class=" \my-1 card">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="thumbnail ">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
            </a>
            </div>
          <?php endif; ?> <!-- thumbnail -->
          <div class="post  p-1"> 
        <div class="entry-header">
          <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
          </div><!-- .entry-header-->
            <div class="byline my-1">
              <span>
                Author: 
                <a href="<?php echo get_author_posts_url( $post->post_author );?>">
                  <?php the_author();?>  
                </a>
              </span>
              <span>
              | Date: <?php the_time( 'M. j, Y') ;?> 
              </span>
              <?php if(has_category()):;?>
              <span>
              | Categories: <?php the_category( ', ' );?> 
              </span>
              <?php endif;?>
             <?php if(has_tag()):;?>
                <span>
                |  Tags: <?php the_tags( '', ', ', '') ;?>
                </span>
              <?php endif;?>
          </div><!-- .byline-->
          <div class="entry-content">
            <?php the_excerpt();?>
          </div><!-- .entry-content-->
          </div><!-- .post -->
          </div><!-- .d-flex -->
        </article>    
    <?php endwhile;else:?>
      <p><?php esc_html_e('Sorry, no content available!');?></p>
    <?php endif;?>
  </main>
<?php get_sidebar('category');?>
</div><!-- .d-flex -->