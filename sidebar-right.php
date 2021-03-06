<!-- SIDEBAR 1 -->
	<aside id="primary">
              <nav id="nav-sub">
              <?php if(is_page()) : ?>
              
                  <ul>
                  		
                    	<!-- <li><h3><a href="javascript:;" class="about-link">About Us</a></h3></li>
                      	<li><a href="javascript:;" class="training-link">Training With Us</a></li>
                      	<li><a href="javascript:;" class="instructors-link">Instructors</a></li>
                      	<li><a href="javascript:;" class="history-link">History &amp; Lineage</a>
                        </li> -->
                        <?php
						/*$children = get_pages('child_of='.$post->ID);
						if( count ($children ) = 0 )
						{
							echo '<li><h3>' . get_the_title($post->post_parent) . '</li></h3>';
						}
						else
						{
							echo '<li><h3><a href="' . get_permalink($post->post_parent) . '">' . get_the_title($post->post_parent) . '</a></h3></li>';
						}*/
						?>
                        <li><h3><a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); //get the gateway page title?></a></h3></li>
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
                  
				  <?php if(!is_page()) : //If it is the blog feed or post?>
                  <ul>
                  	<li><h3><a href="<?php echo get_permalink(get_page_by_title('Blog')); ?>">Blog</a></h3></li>
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