<?php get_header(); ?>

<div id="bd" class="index">
<div id="yui-main"><div class="yui-b">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post-wrap" id="post-<?php the_ID(); ?>">
		<h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
	<div><?php the_time('F j, Y'); ?></div>

		
		<div class="post-meta">
			<?php edit_post_link('Edit', '', ' |'); ?> <?php the_tags('tags: ', ', ', '<br />'); ?>
			
			
		</div>
	</div><!-- end post -->
	<?php endwhile; ?>
		<div class="nav">
			<div class="previous"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="next"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="post-title"><?php _e('Not Found'); ?></h2>
		<p><?php _e("Sorry, but you are looking for something that isn't here. Double check your URL or you should try searching for it."); ?></p>
		<?php @include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
