<?php get_header(); ?>
<?php get_sidebar('right'); ?>
		<div id="content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p>404 Page Not Found - Try a search</p>
            <?php get_search_form(); ?>
            <small>404.php</small>
		</div> <!-- end content -->
        
<?php get_sidebar('left'); ?>
<?php get_footer(); ?>