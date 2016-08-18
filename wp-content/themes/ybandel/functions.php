<?php

// Define PHP file constants.
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );

show_admin_bar( false );
define('DISALLOW_FILE_MODS',true);

// Load library files.
require_once( TEMPLATEINC . '/cpt.php' );
require_once( TEMPLATEINC . '/template.php' );
require_once( TEMPLATEINC . '/actions.php' );
