<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri()  ?>/./images/logo.png"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
	

<?php 

wp_nav_menu(array(

	'menu'				=> "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
	'menu_class'		=> "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
	'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented
	
	'container_class'	=> "menu", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
	
	
	'theme_location'	=> "primary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
	
) );

?>

		
			
	</div>
</nav>
