<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'spotifyTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');
// Include the User class
require_once(FS_INCLUDES . 'user.php');

// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();

// Load Spotify playlist easter egg
$spotify = new spotifyTemplate();
echo $spotify->Spotify();

// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
