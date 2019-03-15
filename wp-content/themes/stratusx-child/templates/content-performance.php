<?php
/* Template Name: Quarterly Performance */
?>
<section class="content-editor">

<table>

	<?php if( have_rows('quarter_ended') ): ?>

 	<?php while ( have_rows('quarter_ended') ) : the_row(); ?>
 		
 		<tr>
			<td><?php the_field('quarter_end_date'); ?></td>
			<td><?php the_field('nav_per_share'); ?></td>
		</tr>

   	<?php endwhile;
  	else :
   	// no rows found
   	endif; ?>
   
</table>

<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php if(!is_front_page()){
        wp_link_pages(array('before' => '<nav class="pagination th-pagination">', 'after' => '</nav>'));
    }?>
<?php endwhile; ?>
</section>