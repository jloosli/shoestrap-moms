<?php
/**
 * Created by PhpStorm.
 * User: jloosli
 * Date: 2/19/14
 * Time: 12:14 AM
 */

/*
 * Use 'RecursiveDirectoryIterator' if PHP Version >= 5.2.11
 */
function shoestrap_moms_include_modules() {
    // Include all modules from the shoestrap theme (NOT the child themes)
    $modules_path = new RecursiveDirectoryIterator( get_stylesheet_directory() . '/lib/modules/' );
    $recIterator  = new RecursiveIteratorIterator( $modules_path );
    $regex        = new RegexIterator( $recIterator, '/\/module.php$/i' );

    foreach( $regex as $item ) {
        echo $item->getPathname();
        require_once $item->getPathname();
    }
}
shoestrap_moms_include_modules();