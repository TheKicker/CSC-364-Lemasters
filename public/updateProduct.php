<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'updateProductTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');
// Include the Product class
require_once(FS_INCLUDES . 'products.php');

// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();

if ($requestType == 'GET') {
    $sql = 'select * from products where id = ' . $_GET['id'];
    $result = $db->query($sql);
    $row = $result->fetch();
    // Show the Create Product Form
    $form = new updateProductTemplate();
    echo $form->updateProd($row);

    // $name = $row['name'];
    // $description = $row['description'];
    // $price = $row['price'];
    // $qty_available = $row['qty_available'];

} elseif ($requestType == 'POST'){
    // Validate and Process Data
    // Save Data
    $id = ($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);
    $qty_available = htmlspecialchars($_POST['qty_available']);

    $sql = "update products set name = '$name', description = '$description', price = $price, qty_available = $qty_available where id = $id;";
    $result = $db->query($sql);
    // When done, redirect to a web page
    header('Location: http://csc364dev.com/index.php');
}

// Load page footer
$footer = new mainFooterTemplate();
echo $footer->pageBottom();
