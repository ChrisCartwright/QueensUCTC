<?php

require( "config.php" );
session_start();

    $results = array();
    $results['pageTitle'] = "Project Sign Up";
    $results['formAction'] = "submit";

    if (isset($_POST['submit'])) {

        $entry = new Entry;
        $entry->storeFormValues($_POST);
        $entry->insert();
        header("Location: ./?action=register");

    } else {
        $results['entry'] = new Entry;
        require(TEMPLATE_PATH . "/project.php");
    }


?>
