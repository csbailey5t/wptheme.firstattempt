
<DOCTYPE HTML>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title><?php bloginfo('site_title'); ?></title>


<link href="http://fonts.googleapis.com/css?family=Droid+Serif|Droid+Sans" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

</head>

<body>
	<div class="container">
		<header class="block">
			<h1 id="brand"><?php echo get_bloginfo('site_title'); ?></h1>
				<nav>
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Navigation', 'container_id' => 'header' ) ); ?>
				</nav>
				<!--This php should output the menu in a div with the id "header." For the CSS I need to style unorder list elements within the id header" -->
		</header>


			<!-- Header.php stuff above here -->

			<div class="main block push">		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				
					<article class="post">
						<h3 class="title">
							<?php the_title(); ?>
						</h3>
						<div class="thecontent">
							<?php the_content(); ?>
						</div>
					</article>

					<?php endwhile; else: ?>
						<article class="error">
							<h1 class="404">Nothing posted yet</h1>
						</article>
				<?php endif; ?>
			</div>

			<!-- footer stuff below here -->

			<footer class="block">
				<div id="footer-sidebar">	
					<div id="left-footer">
	    				<?php dynamic_sidebar('left-footer'); ?>
					</div>
					<div id="middle-footer">
	    				<?php dynamic_sidebar('middle-footer'); ?>
					</div>
					<div id="right-footer">
	    				<?php dynamic_sidebar('right-footer'); ?>
					</div>
				</div>	
				<p id="copyright">Design by Scott Bailey</p>	
			</footer>	
	</div>
</body>




</html>