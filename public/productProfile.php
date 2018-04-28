<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'productProfileTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');
// Include the Products class
require_once(FS_INCLUDES . 'products.php');

// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();

$sql = 'Select * from Products where id =' . $_GET['id'];
// $sql = 'select * from products';
$product = $db->query($sql);
$p = $product->fetch();

// Load profile of current User
$profile = new productProfileTemplate();
echo $profile->productProfile($p);

// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
