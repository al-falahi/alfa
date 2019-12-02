<?php get_header();?>
<?php get_template_part( 'template-parts/content', 'archive' ); ?>
<?php echo paginate_links(); ?>
<?php get_footer();?>