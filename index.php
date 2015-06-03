<?php get_header(); ?>
<?php get_sidebar('right'); ?>
    
		<div id="content">
        	<h2>Blog</h2>
            <?php if(have_posts()) : while(have_posts()) : the_post(); //start the loop?>
            <article class="post-excerpt">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <small>Posted on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?></small>
            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
            <p><?php echo strip_tags(get_the_excerpt()); ?>
            <a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"> Read More &raquo;</a></p>
            </article>
            <?php endwhile; endif; //end the loop ?>
            <small>index.php</small>
		</div> <!-- end content -->
        
<?php get_sidebar('left'); ?>
<?php get_footer(); ?>