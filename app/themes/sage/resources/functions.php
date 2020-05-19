<?php

/**
* Do not edit anything in this file unless you know what you're doing
*/

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
* Helper function for prettying up errors
* @param string $message
* @param string $subtitle
* @param string $title
*/
$sage_error = function ($message, $subtitle = '', $title = '') {
  $title = $title ?: __('Sage &rsaquo; Error', 'sage');
  $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
  $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
  wp_die($message, $title);
};

/**
* Ensure compatible version of PHP is used
*/
if (version_compare('7.1', phpversion(), '>=')) {
  $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
* Ensure compatible version of WordPress is used
*/
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
  $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
* Ensure dependencies are loaded
*/
if (!class_exists('Roots\\Sage\\Container')) {
  if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
    $sage_error(
      __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
      __('Autoloader not found.', 'sage')
    );
  }
  require_once $composer;
}

/**
* Sage required plugins
*/
if ( file_exists(dirname( __DIR__ ) . '/app/activation.php') ) {
  require_once dirname( __DIR__ ) . '/app/activation.php';
}

/**
* Sage required files
*
* The mapped array determines the code library included in your theme.
* Add or remove files to the array as needed. Supports child theme overrides.
*/
array_map(function ($file) use ($sage_error) {
  $file = "../app/{$file}.php";
  if (!locate_template($file, true, true)) {
    $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
  }
}, ['helpers', 'setup', 'filters', 'admin', 'plugins', 'media', 'acf', 'gf', 'shortcodes', 'post-types']);

/**
* Here's what's happening with these hooks:
* 1. WordPress initially detects theme in themes/sage/resources
* 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
* 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
*
* We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
* But functions.php, style.css, and index.php are all still located in themes/sage/resources
*
* This is not compatible with the WordPress Customizer theme preview prior to theme activation
*
* get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
* get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
* locate_template()
* ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
* └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
*/
array_map(
  'add_filter',
  ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
  array_fill(0, 4, 'dirname')
);
Container::getInstance()
->bindIf('config', function () {
  return new Config([
    'assets' => require dirname(__DIR__).'/config/assets.php',
    'theme' => require dirname(__DIR__).'/config/theme.php',
    'view' => require dirname(__DIR__).'/config/view.php',
  ]);
}, true);

function mytheme_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );


/// Registers Block Category for Gutenberg

function my_blocks_plugin_block_categories( $categories ) {
  return array_merge(
    $categories,
    array(
      array(
        'slug' => 'brm_blocks',
        'title' => __( 'Big Rig Media Blocks', 'mydomain' ),
        'icon'  => 'wordpress',
      ),
    )
  );
}
add_filter( 'block_categories', 'my_blocks_plugin_block_categories', 10, 2 );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
  @media (min-width: 782px) {
    .is-sidebar-opened .block-editor-editor-skeleton__sidebar {
      width: 20% !important;
      min-width: 20% !important;
      transition: all ease 1s;
      position: fixed !important;
      right: 0px !important;
      left: auto !important;
      margin-top: 88px;
    }

    .is-sidebar-opened .block-editor-editor-skeleton__sidebar:hover {
      width: 40% !important;
    }
  }

  .edit-post-sidebar {
    width: 100%;
  }

  .components-notice-list,
  .edit-post-layout__metaboxes {
    max-width: 77%;
  }

  .wp-core-ui .button,
  .wp-core-ui .button-secondary {
    background: transparent !important;
    background-color: inherit !important;
    color: black;
  }

  .editor-styles-wrapper .button {
    color: inherit !important;
  }

  </style>';
}


///////////////////////////////////////////////////////   User Role Rules  ///////////////////////////////////////////////////////

if ( !current_user_can('administrator') ) {

  function remove_menus() {

    remove_menu_page( 'index.php' );
    remove_menu_page( 'jetpack' );
    //remove_menu_page( 'edit.php' );
    remove_menu_page( 'upload.php' );
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'themes.php' );
    remove_menu_page( 'plugins.php' );
    remove_menu_page( 'users.php' );
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit.php?post_type=page' );
    remove_menu_page( 'edit.php?post_type=testimonials' );
    remove_menu_page('acf-options-page-components');
    remove_menu_page( 'edit.php?post_type=testimonials' );
    remove_menu_page( 'options-general.php' );
  }

  add_action( 'admin_menu', 'remove_menus' );




  function shapeSpace_remove_toolbar_nodes($wp_admin_bar) {

    $wp_admin_bar->remove_node('updates');
    $wp_admin_bar->remove_node('comments');
    $wp_admin_bar->remove_node('new-content');
    //$wp_admin_bar->remove_node('site-name');
    $wp_admin_bar->remove_node('edit');


    //$wp_admin_bar->remove_node('my-account');
    $wp_admin_bar->remove_node('search');

    $wp_admin_bar->remove_node('customize');

  }

  ///   Remove Admin bar menu items

  add_action('admin_bar_menu', 'shapeSpace_remove_toolbar_nodes', 999);
  // Removes Evetns from Admin bar
  define('TRIBE_DISABLE_TOOLBAR_ITEMS', true);


  function hide_personal_options(){
    echo "\n" . '<script type="text/javascript">jQuery(document).ready(function($) { $(\'form#your-profile > h3:first\').hide(); $(\'form#your-profile > table:first\').hide(); $(\'form#your-profile\').show(); });</script>' . "\n";
  }
  add_action('admin_head','hide_personal_options');




  if(!function_exists('remove_plain_bio')){
    function remove_bio_box($buffer){
      $buffer = str_replace('<h3>About Yourself</h3>','<h3>User Password</h3>',$buffer);
      $buffer = preg_replace('/<tr class=\"user-description-wrap\"[\s\S]*?<\/tr>/','',$buffer,1);
      return $buffer;
    }
    function user_profile_subject_start(){ ob_start('remove_bio_box'); }
    function user_profile_subject_end(){ ob_end_flush(); }
  }
  add_action('admin_head-profile.php','user_profile_subject_start');
  add_action('admin_footer-profile.php','user_profile_subject_end');
}

if ( current_user_can('coyote_ranch') ) {
  function remove_menu() {
    //remove_menu_page( 'edit.php?post_type=coyote-ranch' ); // Events
    remove_menu_page( 'edit.php?post_type=cactus-ranch' ); // Events
    remove_menu_page( 'edit.php?post_type=araby-acres' ); // Events
    remove_menu_page( 'edit.php?post_type=ranch-rialto' ); // Events
    remove_menu_page( 'edit.php?post_type=tuscany-park' ); // Events

  }

  add_action( 'admin_menu', 'remove_menu' );

}

// Add class to next and previous links
function add_class_next_post_link($html){
  $html = str_replace('<a','<a class="next-post"',$html);
  return $html;
}
add_filter('next_post_link','add_class_next_post_link',10,1);
function add_class_previous_post_link($html){
  $html = str_replace('<a','<a class="prev-post"',$html);
  return $html;
}
add_filter('previous_post_link','add_class_previous_post_link',10,1);
