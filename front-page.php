<?php get_header(); ?>

    
		<h2>Seven Star Women's Kung Fu</h2>  
          <div id="intro">
          <?php while( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; ?>
          </div>
          
     <section id="top-row">	
        <aside id="primary">
        	<a href="main.html">
                <img src="<?php bloginfo('template_directory'); ?>/images/beginnerscycle-thumb-420.jpg" alt="Beginner's Cycle" class="lg" />
                <h3>Beginner's Cycle</h3>
                <p>Next cycle starts March 31st<br />
                <strong>Sign up now!</strong></p>
            </a>
        
        </aside>
        <div id="content">
        	<div id="center-column">
                <a href="main.html">
                    <img src="<?php bloginfo('template_directory'); ?>/images/self-defense-thumb-420.jpg" alt="Self Defense Series" class="lg" />
                    <h3>Self Defense Series</h3>
                    <p>Next series beginning soon<br />
                    <strong>Find out more</strong></p>
                </a>
            </div>
            
            <div id="right-column">
            	<a href="main.html">
                	<img src="<?php bloginfo('template_directory'); ?>/images/try-a-class-420.jpg" alt="Try A Class Night" class="lg"/>
                	<h3>Try A Class Night - Free!</h3>
                    <p>Next class Wednesday April 29th 6:30-8:00 PM<br />
                    <strong>Find out more</strong></p>
            	</a>
            </div>
            
		</div><!-- end content -->
    </section>
    
    <section id="bottom-row">
    	<div id="home-donate">
    		<h4>Support Seven Star</h4>
            <p>We accept donations via PayPal. Thanks for your support!</p>
            <a href="javascript:;" class="paypal"><img src="<?php bloginfo('template_directory'); ?>/images/paypal_donate_button.jpg" alt="Paypal donate button" title="Donate via PayPal"></a>
        </div>

        <div id="kajukenbo">
            <h4>What is Kajukenbo?
            <img src="<?php bloginfo('template_directory'); ?>/images/kajukenbo-420.png" alt="Kajukenbo crest" class="sm alignright"/>
            </h4> 
            <p>Kajukenbo is an eclectic martial art from Hawaii that combines techniques from Tang Soo Do (Korean karate), Kodokan judo, jujitsu, Kosho Ryu kenpo, and Shaolin kung fu into a style that is effective in real-life situations. Kajukenbo does not rely solely on size or strength, making it well-suited for women. Seven Star’s style is also influenced by aikido, wun hop kuen do, and the unique experiences of our instructors. We include self-defense training throughout our curriculum.</p>
            <p><a href="main.html"><strong>Read more about our history and lineage</strong></a></p>
            <h4>Latest Posts</h4>
            <?php rewind_posts(); ?>
            <?php query_posts( 'showposts=4' ); ?>
            <?php while( have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </div>
    
    	<p class="top"><a href="#wrapper">Back to top</a></p>
        <small>front-page.php</small>
    </section>
        
<?php get_sidebar('left'); ?>
<?php get_footer(); ?>