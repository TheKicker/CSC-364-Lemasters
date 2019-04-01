<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'profileTemplate.php');
require_once(FS_TEMPLATES . 'checkoutTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();

if ($requestType == 'GET') {
    // Show the Create Product Form
    $form = new checkoutTemplate();
    echo $form->checkout();
 } else {
    // Process form data
    $formData = $_POST;
    $formData['order_date'] = date('Y-m-d H:i:s', time());
    //$formData['customer_ID'] = ;
    // Create User object and save data to the database
    $u = new orderProfile($db);
    $r = $u->create($formData);
    // When done, redirect to a web page
    header('Location: http://csc364dev.com/confirmedOrder.php');
}

// Load shopping cart of current user
$profile = new profileTemplate();
echo $profile->showCartTable2();

// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
