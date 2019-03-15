<?php
//======================================================================
// Page Header Template
//======================================================================

$themo_page_ID = $post->ID;

// Support for Woo Pages.
// Sometimes the page id isn't explicit so we have to go and look for it.
$themo_woo_page_ID = themo_return_woo_page_ID();
if($themo_woo_page_ID){
    $themo_page_ID = $themo_woo_page_ID;
}

$th_hide_title = 'off';
$th_hide_title = get_post_meta($themo_page_ID, 'themo_hide_title', true);

if($th_hide_title == 'off' || $th_hide_title !== 'on'){
    // Check post type and skip product post types
    $post_type = get_post_type( $themo_page_ID );
    if(isset($post_type) && $post_type == 'product'){
        // Do nothing
    }else{ ?>
        <h1 class="entry-title"><?php echo wp_kses_post(roots_title())  ?>
			<span style="font-size: 20px;display: block;margin-top: 25px;"><span style="font-weight: bold;"><?php echo esc_html_e('Ending: '); ?></span><?php if ( get_field('current_quarter' ) ): 
        	the_field('current_quarter');
        endif; ?></span>
		</h1>
    <?php
    }

}

