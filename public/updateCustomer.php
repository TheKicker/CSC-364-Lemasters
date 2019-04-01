<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'updateCustomerTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();

if ($requestType == 'GET') {
    $sql = 'select * from products where id = ' . $_GET['id'];
    $result = $db->query($sql);
    $row = $result->fetch();
    // Show the Create Product Form
    $form = new updateCustomerTemplate();
    echo $form->updateCustomer();

    $firstName = $row['firstname'];
    $lastName = $row['lastName'];
    $address = $row['address'];
    $city = $row['city'];
    $state = $row['state'];
    $zip = $row['zip'];
    $phone = $row['phone'];
    $email = $row['email'];
    $password = $row['password'];
    $billAddress = $row['billing_address'];
    $billCity = $row['billing_city'];
    $billState = $row['billing_state'];
    $billZip = $row['billing_zip'];

} elseif ($requestType == 'POST'){
    // Validate and Process Data
    // Save Data
    $firstName = htmlspecialchars($_POST['firstname'], END_QUOTES);
    $lastName = htmlspecialchars($_POST['lastname'], END_QUOTES);
    $address = htmlspecialchars($_POST['address'], END_QUOTES);
    $city = htmlspecialchars($_POST['city'], END_QUOTES);
    $state = htmlspecialchars($_POST['state'], END_QUOTES);
    $zip = htmlspecialchars($_POST['zip'], END_QUOTES);
    $phone = htmlspecialchars($_POST['phone'], END_QUOTES);
    $email = htmlspecialchars($_POST['email'], END_QUOTES);
    $password = htmlspecialchars($_POST['password'], END_QUOTES);
    $billAddress = htmlspecialchars($_POST['billing_address'], END_QUOTES);
    $billCity = htmlspecialchars($_POST['billing_city'], END_QUOTES);
    $billState = htmlspecialchars($_POST['billing_state'], END_QUOTES);
    $billZip = htmlspecialchars($_POST['billing_zip'], END_QUOTES);

    $sql = "update products set firstname = '$firstName', lastname = '$lastName', address = '$address', city = '$city', state = '$state', zip = '$zip', phone = '$phone', email = '$email', password = '$password', billing_address = '$billAddress', billing_city = '$billCity', billing_state = '$billState', billing_zip = 'billing_zip' where id = $id;";
    $result = $db->query($sql);
    // When done, redirect to a web page
    header('Location: http://csc364dev.com/index.php');
}
// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
