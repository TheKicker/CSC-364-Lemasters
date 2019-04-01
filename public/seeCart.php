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
?>

<div style="padding-top: 48px; padding-left: 36px; padding-right: 36px;">
  <h2> Cart Contents </h2>
  <hr>
</div>

<?php
// Load shopping cart of current user
$profile = new profileTemplate();
echo $profile->showCartTable2();

// Load buttons
$profile2 = new profileTemplate();
echo $profile2->buttons2();

// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
