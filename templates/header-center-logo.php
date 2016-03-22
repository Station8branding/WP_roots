<header class="navbar center-logo navbar-static-top" role="banner">
  <div class="banner">
  	<div class="container">
  		<nav class="collapse navbar-collapse" role="navigation">
  			<div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
		    </div>
        <ul>
          <li>
            <!-- Left Nav -->
            <?php if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;  ?>
          </li>
          <li><a class="navbar-brand main-brand hidden-xs" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></li>
          <li>
            <!-- Right nav -->
            <?php if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;  ?>
        </li>
      </ul>
	    </nav>
  	</div>
  </div>
</header>
