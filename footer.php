</div> <!-- end #middle -->

<!-- FOOTER -->

  
<footer>
	<!--<nav id="nav-footer">
    	<ul>
        	<li class="narrow"><a href="home.html" class="home-link">Home</a></li>
        	<li><a href="javascript:;" class="about-link">About Us</a></li>
        	<li><a href="javascript:;" class="classes-link">Classes</a></li>
        	<li><a href="javascript:;" class="sd-link">Self Defense</a></li>
        	<li class="wide"><a href="javascript:;" class="resources-link">Student Resources</a></li>
        	<li><a href="javascript:;" class="contact-link">Contact</a></li>        
        </ul>
    </nav> -->
    
    <!-- Begin new Navigation -->
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'nav', 'container_id' => 'nav-footer' ) ); ?>
    <!-- End new navigation -->
    
    
    <nav id="nav-contact">
    	<ul>
        	<li id="facebook"><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/fb-round-white.png" alt="facebook"/>Find us on Facebook</a></li>
    		<li>Seven Star Women's Kung Fu</li>
            <li>525 21st Ave. Seattle, WA 98122</li>
            <li>(206)720-1046</li>
    		<li><a href="contact.php">info@sevenstarwomenskungfu.org</a></li>
    	</ul>
    </nav>
    <p id="copyright"><small><a href="javascript:;">Site Map</a>  |  Content &copy; 2015 Seven Star Women's Kung Fu  |  Design &amp; logo &copy; 2015 <a href="http://madebyjennycrimp.com" target="_blank">Jenny Crimp</a>  |  <?php wp_loginout(); ?></small></p>
    
    
    
</footer>


<!-- begin validation buttons -->
<p>
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
  width="31" height="32" alt="valid HTML5" />
 </a>
 <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
   alt="Valid CSS3" height="31" width="88" />
 </a>
</p>
<!-- end validation buttons -->

</div>
<!-- end wrapper -->
<!-- start WP footer -->
<?php wp_footer(); ?>
<!-- end WP footer -->
</body>
</html>