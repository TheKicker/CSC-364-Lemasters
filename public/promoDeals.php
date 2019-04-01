<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');
// Include the User class
require_once(FS_INCLUDES . 'user.php');
// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();

?>
<div style="padding-top: 48px; padding-left: 24px; padding-right: 24px; padding-bottom: 48px;">
  <h2> ERROR #45809-430A12 </h2>
  <h4 style="padding-left: 60px; padding-bottom: 10px;"> We don't have any deals -- we already save you tons of money! <br> Good wine takes cash!</h4>
  <div align="center">
    <img src="http://media-cache-ak0.pinimg.com/736x/25/7d/78/257d78482737662f623156a8084736d0.jpg" style="width: 65%; height 20%; padding-top: 24px; padding-left: 48px">
  </div>
</div>
<?php
// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
