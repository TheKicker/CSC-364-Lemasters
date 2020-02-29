<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

// create variables
$username = $_POST['email'];
$password = $_POST['password'];

if ($username && $password)
{
    login($username, $password);
    $_SESSION[''];
}
