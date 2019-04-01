<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();

session_destroy();

echo '<div style="padding-top: 48px;" align="center">';
echo '<h1><b><u>CART CLEARED</u></b></h1>';
echo '<h3><b>Your Cart Has Been Tipped Over & Is Now Empty!</b></h3>';
echo '<img src="http://i2.wp.com/www.photos-a-la-con.fr/wp-content/uploads/2015/05/image-drole-idiot.gif?resize=500%2C435" height="45%" width="45%"';
echo '</div>';
echo '<br>';
echo '<div style="padding: 24px;">';
echo '<a href="catalogue.php" class="btn btn-primary" role="button">Back to Catalogue</a>';
echo '<a href="index.php" class="btn btn-dark" role="button">Back to Index</a>';
echo '</div>';


// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
