<?php
/**
 * Created by PhpStorm.
 * User: jloosli
 * Date: 2/18/14
 * Time: 4:40 PM
 */

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );