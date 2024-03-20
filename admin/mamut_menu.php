<?php

/*
* Menu Principal
*/

if( !function_exists( 'mamut_options_page' ) ){
    function mamut_options_page(){
    add_menu_page(
    'Mamut-Post-Con: Crear Posts configurables',
    'Mamut-Post-Con',
    'manage_options',
    'dcopes_options_page',
    'mamut_options_page_display',
    'dashicons-chart-area',
    '15'
    );
    }
    add_action( 'admin_menu', 'mamut_options_page' );
    }

if ( !function_exists( 'mamut_options_page_display' )){

    function dcopes_options_page_display(){
    
        switch ($_GET['oper']) {
            case 'info':
                include DCOPES_PATH . 'admin/mamut_info_grup.php';
                break;
            case 'editar':
                include DCOPES_PATH . 'admin/mamut_editar_grup.php';
                break;
            default:
                include DCOPES_PATH . 'admin/mamut_display_menu.php';
        }
    }
}

?>