<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');
require_once(FS_TEMPLATES . 'profileTemplate.php');
  // print_r ($_POST);

  // Load page header
  $header = new mainHeaderTemplate();
  echo $header->pageTop();
  // Load buttons
  $buttons = new profileTemplate();
  echo $buttons->buttons2();

  Echo '<h4 style="padding-left: 24px;"> Item has been added! </h4>';

  // Add our specific item to cart
  $item = $_POST;
  // Variable we will use to determine if the item exists in cart already
  $exists = 0;

  // If our cart exists within SESSION
  if(array_key_exists('cart',$_SESSION))
  {
    // Make $cart hold _SESSION cart
    $cart = $_SESSION['cart'];

  // Cycle through the products in our cart
  foreach($cart as $key => $value)
  {
      // If the value id we are sending equals an item id already in the Cart
      // Increment the qty_selected and change our exists value to 1
      // then break out of the foreach loop to prevent accidental repeats
      if($value['id'] == $item['id'])
      {
        $cart[$key]['qty_selected']++;
        $exists = 1;
        break;
      }
  }
}
  // If the item does not exist, add the new item to cart
  if(!$exists)
  {
    $cart[]=$item;
  }

  // Saves session cart to cart
  $_SESSION['cart'] = $cart;

  // Output the contents of the cart
  echo '<div style="padding-left: 48px;"><pre>'; print_r($_SESSION['cart']); echo '</pre></div>';

  // Load page footer
  $footer = new mainFooterTemplate();
  echo $footer->pageBottom();

 ?>
