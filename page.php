<?php get_header(); ?>

<!-- SIDEBAR 1 -->
	<aside id="primary">
              <nav id="nav-sub">
              <?php if(is_page()) : ?>
              <h3><?php echo get_the_title($post->post_parent); //get the gateway page title?></h3>
                  <ul>
                    	<!-- <li><h3><a href="javascript:;" class="about-link">About Us</a></h3></li>
                      	<li><a href="javascript:;" class="training-link">Training With Us</a></li>
                      	<li><a href="javascript:;" class="instructors-link">Instructors</a></li>
                      	<li><a href="javascript:;" class="history-link">History &amp; Lineage</a>
                        </li> -->
                        <?php 
						if($post->post_parent) 
						{//if it's a child of a parent, list the child's title
							wp_list_pages( array( 
							'child_of' => $post->post_parent,
							'title_li' => __(''), 
							)); 
						}
						else
						{
							wp_list_pages( array( 
							'child_of' => $post->ID,
							'title_li' => __(''), 
							));
						}
						?>
				  </ul>
                  <?php endif; ?>
                  
				  <?php if(!is_page()) : ?>
                  <h3>Blog</h3>
                  <ul>
                  	<?php wp_list_categories( array(
						'title_li' => '',
					)); ?>
                  </ul>
                  <?php endif; ?>
              </nav>
              
        </aside><!-- end #primary sidebar-->
    
		<div id="content">
            <?php if(have_posts()) : while(have_posts()) : the_post(); //start the loop?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; endif; //end the loop ?>
            <small>page.php</small>
		</div> <!-- end content -->
        
		<aside id="secondary">
        	<section id="sidebar-donate">
            	<h4>Support Seven Star</h4>
            	<p>We accept donations via PayPal.<br />
                Thanks for your support!</p>
            	<a href="javascript:;" class="paypal"><img src="<?php bloginfo('template_directory'); ?>/images/paypal_donate_button.jpg" alt="Paypal donate button" title="Donate via PayPal"></a>
            </section>
            
        	 <section class="clear">
                <h4>Upcoming Events</h4>
                    				<dl>
                    <dt class="date">Tuesday 3/31</dt>
                    <dt>Beginner's Cycle Starts</dt>
                    <dd>6:00-7:30PM at Seven Star</dd>
                </dl>
                <dl>
                    <dt class="date">Sunday 4/19</dt>
                    <dt>Meditation</dt>
                    <dd>1:30-3:00PM at Seven Star</dd>
                </dl>
                <dl>
                    <dt class="date">Saturday 4/25</dt>
                    <dt>Green Belt Test:<br/>
                    Shelly, Tyler, Martha, and Allison</dt>
                    <dd>10AM at Seven Star</dd>
                </dl>                
                <p><a href="javascript:;"><strong>View our Calendar</strong></a></p>
			</section>
        </aside>
<?php get_footer(); ?>