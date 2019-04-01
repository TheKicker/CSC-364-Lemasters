<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'productsTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');
// Include the User class
require_once(FS_INCLUDES . 'user.php');

// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();
?>
<div style="padding-left: 24px; padding-right: 24px; padding-top: 48px;">
  <h3> Current Catalogue -- All the finest wines!! </h3>
    <h6 style="padding-left: 24px;"> If you dont see a wine you like... <a href="createProd.php"> Click here </a> to suggest it. </h6>
  <hr>
</div>
<div class="container">
<?php
// Load the current products list
$products = new product();
echo $products->products($db);
?>
</div>
<?php 
// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
?>
