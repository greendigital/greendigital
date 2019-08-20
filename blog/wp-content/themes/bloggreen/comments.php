<?php
 /**
 *
 *
 * 	
 * 
 */
if ( post_password_required() ) {
	return;
}
?>

<style type="text/css">
	
</style>

<div id="comments" class="comments-area container">

	<div class="col-md-8 col-md-offset-2">
		
		<?php if ( have_comments() ) : ?>
		<h2 class="comments-title" style="text-align: center;">
			<?php
				$comments_number = get_comments_number();
				
			?>
			COMENTÁRIOS
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			$comentarios  =  wp_list_comments();

			var_dump($comentarios);
			?>
		</ol>
		<?php //the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
	<?php endif; ?>

	<?php
		comment_form(  );
	?>

	</div>

	

</div><!-- .comments-area -->
