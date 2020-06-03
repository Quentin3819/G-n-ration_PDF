<?php
/*
* Plugin Name: PDF Generator
* Description: Create PDF.
* Version: 2.0
* Author: Quentin COMELLI
*/


include(plugin_dir_path(__FILE__) . 'getTitile.php');

add_action('admin_menu', 'add_links_menu');
function add_links_menu()
{
    add_menu_page('', 'Documentation Génération PDF', 'administrator', 'script-perso', 'page_gen', 'images/marker.png', 50);

}

function page_gen()
{
    include('README.php');
}
