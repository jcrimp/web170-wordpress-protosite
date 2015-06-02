<!DOCTYPE html>
<html>
<head>
<title><?php get_my_title_tag(); ?></title>

<!-- Begin meta-->
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<!-- don't load page at full width on mobile -->
<meta name="viewport" content="initial-scale=1">

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
<style type="text/css">
<!--
   /* replace this line with embedded style rules */
-->  
</style>  

<script> 
<!--
var originalNavClasses;

function toggleNav() {
    var elem = document.getElementById('nav-toggle');
    var classes = elem.className;
    if (originalNavClasses === undefined) {
        originalNavClasses = classes;
    }
    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}
-->  
</script>
<!-- start WP head -->
<?php wp_head(); ?>

<!-- end WP head -->
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

<!-- HEADER -->

<header>
    <h1>
    	<a href="../wordpress">
    		<img src="<?php bloginfo('template_directory'); ?>/images/logo-7star-785.png" id="logo" alt="Seven Star Logo"/>
			<span>Seven Star Women's Kung Fu</span>
    	</a>
    </h1>
    <p id="fb"><a href="javascript:;" target="_blank"><span>Find us on Facebook</span><img src="<?php bloginfo('template_directory'); ?>/images/fb-round-almost-black.png" alt="Facebook icon" /></a></p>
    
    <p id="tagline"><em>Four generations of women teaching women</em><br />
    <span>Est. 1981 Seattle, WA</span></p>
    
</header>



<!-- MAIN NAV -->

<!-- <nav id="nav-main">
	<ul>
    	<li class="narrow"><a href="../wordpress/" class="home-link">Home</a></li>
        <li><a href="javascript:;" class="about-link">About Us</a></li>
        <li><a href="javascript:;" class="classes-link">Classes</a></li>
        <li><a href="javascript:;" class="sd-link">Self Defense</a></li>
        <li class="wide"><a href="javascript:;" class="resources-link">Student Resources</a></li>
        <li><a href="javascript:;" class="contact-link">Contact</a></li>    
    </ul>
</nav>

<!-- MOBILE NAV -->

<!-- <nav id="nav-mobile">
    <a class="menu-button" href="#nav-footer" onclick="toggleNav(); return false;">&#9776;  MENU</a>
    <ul id="nav-toggle">
    	<li class="narrow"><a href="home.html" class="home-link">Home</a></li>
        <li><a href="javascript:;" class="about-link">About Us</a></li>
        <li><a href="javascript:;" class="classes-link">Classes</a></li>
        <li><a href="javascript:;" class="sd-link">Self Defense</a></li>
        <li class="wide"><a href="javascript:;" class="resources-link">Student Resources</a></li>
        <li><a href="javascript:;" class="contact-link">Contact</a></li>    </ul>
</nav> -->

<!-- Begin New Navigation -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'nav-main' ) ); ?>

<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'container' => 'nav', 'container_id' => 'nav-mobile' ) ); ?>
<!-- End new Navigation -->

<div id="spotlight">
	
</div>

<div id="middle">
<!-- MAIN CONTENT -->