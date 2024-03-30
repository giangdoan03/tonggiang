<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tonggiang
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php tonggiang_post_thumbnail(); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
