<?php
if (is_single()){
wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>'));
}
?>