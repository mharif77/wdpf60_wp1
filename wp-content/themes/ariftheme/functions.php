
<?php

function register_arif_menu() {
  register_nav_menu( 'primary', __( 'Main Menu location', 'ariftheme' ) );
//   register_nav_menu( 'secondary', __( 'footer Menu location', 'ariftheme' ) );
  
}
add_action('after_setup_theme', 'register_arif_menu');
?>