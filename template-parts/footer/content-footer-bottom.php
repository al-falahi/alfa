<div class="footer-bottom">
    <div class="container d-flex flex-between flex-center border-top--grid py-1">
        <?php if (is_active_sidebar('footer-bottom__left')){dynamic_sidebar('footer-bottom__left');};?>
        <div class="copy-right d-flex flex-center flex-1"><?php echo bloginfo( 'name' ) ;?> &copy; <?php echo date("Y") ;?></div>
        <?php// if (is_active_sidebar('footer-bottom__center')){dynamic_sidebar('footer-bottom__center');};?>
        <?php if (is_active_sidebar('footer-bottom__right')){dynamic_sidebar('footer-bottom__right');};?>
    </div>
</div><!-- .footer bottom  -->