<?php get_header(); ?>
<?php the_post();?>
<div class="main_container">
	<div class="container">
		<h1 class='main_title'><?php single_term_title(); ?></h1>
		<div class="cat_news_list">
			<?php if ($posts) : ?>
				<?php foreach ($posts as $post) : setup_postdata ($post); ?>
					<?php 
						the_permalink();
						the_post_thumbnail();
						the_title();
						the_field('');
					?>
				<?php endforeach; ?>
			<?php endif; ?>
			<?php get_template_part( 'include/pagination'); ?>	
        </div>   
	</div>
</div>
<?php get_footer(); ?>

