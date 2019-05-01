<div class="subscribe_button">
	<div class="subscribe_tab">SUBSCRIBE</div>
	<?php if ( is_active_sidebar( 'subscribe-sidebar' ) ) :
		dynamic_sidebar( 'subscribe-sidebar' );
	endif; ?>
</div>

<section class="content-editor">
<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php if(!is_front_page()){
        wp_link_pages(array('before' => '<nav class="pagination th-pagination">', 'after' => '</nav>'));
    }?>
<?php endwhile; ?>
</section>