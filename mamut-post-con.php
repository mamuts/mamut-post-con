<?php
/**
* Plugin Name: Mamut-Post-Con
* Plugin URI: https://mamut.link/plugins/mamut-post-con/
* Description: Configuració de Posts.
* Version: 0.0.1
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Mamut
* Author URI: https://mamut.link/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: mamaut
* Domain Path: /languages
*/

defined( 'DCOPES_PATH' ) || define( 'DCOPES_PATH', plugin_dir_path(__FILE__) );

function dcopes_install(){
    //Acción a ejecutar
    require_once 'activador.php';
}

register_activation_hook(__FILE__, 'dcopes_install');

function dcopes_uninstall(){
    //Acción a ejecutar
    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, 'dcopes_uninstall');

//CSS i JS
require_once 'includes/mamut_lib.php';

//Menu
require_once 'admin/mamut_menu.php';