<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
    default:
        homepage();
}

function homepage() {
    $results = array();
    $results['pageTitle'] = "Queen's CTC 2016";
    require( TEMPLATE_PATH . "/home.php" );
}


