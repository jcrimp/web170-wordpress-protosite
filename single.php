<?php get_header(); ?>
<?php get_sidebar('right'); ?>
		<div id="content">
            <?php if(have_posts()) : while(have_posts()) : the_post(); //start the loop?>
            <h2><?php the_title(); ?></h2>
            <small>The byline goes here</small>
            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; //end the loop ?>
            <small>single.php</small>
		</div> <!-- end content -->
        
<?php get_sidebar('left'); ?>
<?php get_footer(); ?>