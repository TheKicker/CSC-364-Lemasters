// <?php
// Include the basic configuration elements
require_once($_SERVER['DOCUMENT_ROOT'].'/../includes/config.php');
// Include the database connection and query class
require_once(FS_INCLUDES . 'Database.php');
// Connect to the database
$db = new Database();
// Include products
require_once(FS_INCLUDES . 'products.php');
// Include user
require_once(FS_INCLUDES . 'user.php');
// Include orders
require_once(FS_INCLUDES . 'orders.php');
// Initialize variables
$requestType = $_SERVER[ 'REQUEST_METHOD' ];
// Session Start
session_start();
