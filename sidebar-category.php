<?php 
  if (is_active_sidebar( 'category-sidebar' )){;?>
    <aside class="widget-area sidebar cat-sidebar flex-1">
      <?php dynamic_sidebar( 'category-sidebar' );?>
   </aside><!-- .cat-sidebar -->
   <?php
  }
;?>