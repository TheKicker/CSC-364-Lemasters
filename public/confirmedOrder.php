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

echo '<div style="padding-top: 48px;" align="center">';
echo '<h1><b><u>ORDER CONFIRMED</u></b></h1>';
echo '<h3><b>Your order has been confirmed and is on its way!</b></h3>';
echo '<img src="https://media0.giphy.com/media/11sBLVxNs7v6WA/giphy.gif" height="45%" width="45%"';
echo '</div>';
echo '<br>';
echo '<div style="padding: 24px;">';
echo '<a href="index.php" class="btn btn-dark" role="button">Back to Index</a>';
echo '</div>';

// <div style="padding: 10px;">
//   <script>
//     alert("Thank you for your purchase, enjoy your wine! :) ");
//   </script>
// </div>


// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();

session_destroy();
