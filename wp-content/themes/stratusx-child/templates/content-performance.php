<?php
/* Template Name: Quarterly Performance */
?>

<div class="subscribe_button">
	<div class="subscribe_tab">SUBSCRIBE</div>
	<?php if ( is_active_sidebar( 'subscribe-sidebar' ) ) :
		dynamic_sidebar( 'subscribe-sidebar' );
	endif; ?>
</div>

<?php global $post;  ?>
<?php include( locate_template( 'templates/page-layout.php' ) ); ?>
<div class="inner-container">
	<?php include( locate_template( 'templates/page-header-performance.php' ) ); // Page Header Template ?>

	<section class="content-editor">
	
	<?php if( have_rows('quarter_ended') ): ?>
	<div class="mobile-overflow">
		<table class="quarterly-performance">
		 	<tr>
		 		<th>Quarter Ended</th>
		 		<th>NAV Per Share</th>
		 		<th>Quarterly % change</th>
		 		<th>Cumulative % change</th>
		 	</tr>
		 	<?php while ( have_rows('quarter_ended') ) : the_row(); ?>
		 	<tr>
				<td><?php the_sub_field('quarter_end_date'); ?></td>
				<td><?php the_sub_field('nav_per_share'); ?></td>
				<td><?php the_sub_field('quarterly_per_change'); ?></td>
				<td><?php the_sub_field('cumulative_per_change'); ?></td>
			</tr>
			<?php endwhile; ?>
		</table>
	</div>
	<?php endif; ?>
	
	<?php while (have_posts()) : the_post(); ?>
	    <?php the_content(); ?>
		<h3 style="text-align: center;margin: 25px 0;"><?php echo esc_html_e('Plotted Against the TSX 300 Index (1 year)'); ?></h3>
		<?php
		$image = get_field('tsx_300_index_comparison');
		if( !empty($image) ) :
		$url = $image['url'];
		$alt = $image['alt'];
		$title = $image['title'];
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ]; ?>
		<div class="comparison-image">
			<a href="<?php echo $url; ?>" title="<?php echo $title; ?>" target="_blank">
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
			</a>
		</div>
		<?php endif; ?>
	    <?php if(!is_front_page()){
	        wp_link_pages(array('before' => '<nav class="pagination th-pagination">', 'after' => '</nav>'));
	    }?>
	<?php endwhile; ?>
	</section>
</div>