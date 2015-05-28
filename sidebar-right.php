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
              <!-- end sub-navigation --?
              
              <!-- begin pull quote -->
			  <?php if(get_post_meta($post->ID, 'Quote', true)) : //check and see if there's a Quote?>
              <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); //echo the value of Quote ?></blockquote>
              <?php endif; ?>
        </aside><!-- end #primary sidebar-->