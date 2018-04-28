<?php
require_once (FS_TEMPLATES . 'templateEngine.php');
// Include the User
// require_once(FS_INCLUDES . 'user.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

?>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

thead {
  background-color: #25383C;
  color: white;
}

tfoot {
  background-color: #25383C;
  color: white;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<?php

class profileTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */

    public function profile1()
    {
      $firstName = 'Cav';
      $lastName = 'Lemasters';
      $origin = 'Just now...';
      $address = 'Young North 306';
      $city = 'Geneva College';
      $state = 'PA';
      $zip = '15010';
      $billAddress = '3200 College Avenue';
      $billCity = 'Beaver Falls';
      $billState =  'PA';
      $billZip = '15010';
      $phone = '1-800-500-1234';
      $email = 'Cav@BeesWaxNotYours.Com';

        echo <<<profile1
        <!-- PASTE HTML CODE HERE -->

        <div class="container" style="padding-top: 96px;">
          <div class="row mb-2">
            <div class="col-lg-4">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <img src="https://ajp.com.au/wp-content/uploads/2015/09/Depositphotos_19198641_m.jpg" height="39%" width="100%" alt="Guest profile picture" style="#">
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <div>
                      <h2> <b>$firstName $lastName </b></h2>
                      <div style="padding: 15px;">
                        Last Update : [$origin]
                      </div>
                      <h5> <u>Contact Info</u> </h5>
                      <div style="padding: 15px;">
                        Current Phone : $phone <br>
                        Current Email : $email
                      </div>
                      <h5> <u>Home Address</u> </h5>
                      <div style="padding: 15px;">
                        $address, $city, $state, $zip
                      </div>
                      <h5> <u>Billing Address</u> </h5>
                      <div style="padding: 15px;">
                        $billAddress, $billCity, $billState $billZip
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

        <!-- END HTML CODE -->
profile1;
    }

    // Posts the buttons at the end of the page
        public function profile2()
        {
          $firstName = 'Guest';
          $lastName = 'User';
          $origin = 'Never Updated';
          $address = 'Unknown';
          $city = 'N/A';
          $state = 'N/A';
          $zip = '12345';
          $billAddress = 'Unknown';
          $billCity = 'N/A';
          $billState =  'N/A';
          $billZip = '12345';
          $phone = '1-800-500-1234';
          $email = 'Guest@BeesWaxNotYours.Com';

            echo <<<profile2
            <!-- PASTE HTML CODE HERE -->

            <div style="padding-top: 48px; padding-left: 18px;">
            <h2> Order Confirmation </h2>
            <hr>
            </div>
              <div align="center" style="padding: 48px;">
              <div style="padding: 8px;">
                  <h2> <b> $firstName , $lastName </b></h2>
                  </div>
              <div style="padding: 8px;">
                  <h5><u>Contact Information </u></h5>
                    Current Phone : $phone <br>
                    Current Email : $email <br>
                    </div>
                <div style="padding: 8px;">
                  <h5><u> Shipping Address </u></h5>
                    $address, $city, $state, $zip
                    </div>
                </div>

            <!-- END HTML CODE -->
profile2;
            // $this->template = $temp;
    }

// Posts the table that is generated to display the shopping cart
    public function showCartTable()
    {
          // Set items to 0
          // Set tbl = array
          $items = 0;
          $tbl = array();
          $total = 0;

          // Testing to see if cart passes
          // echo $_SESSION['cart'];

              // Add our specific item to cart
              $item = $_POST;
              // Variable we will use to determine if the item exists in cart already
              $exists = 0;

              // If our cart exists within SESSION
              if(array_key_exists('cart',$_SESSION))
              {
                // Make $cart hold _SESSION cart
                $cart = $_SESSION['cart'];

                echo ' <div align="center" style="padding-24px;"><h3> Currently in your Cart</h3><table border="1"><thead><tr>'
                    . '<th>Item</th>'
                    . '<th>Quantity</th>'
                    . '<th>Unit Price</th>'
                    . '<th>SubTotal</th>'
                    . '<th>Actions</th>'
                    . '</tr></thead><tbody>'
                  ;

                  foreach($_SESSION['cart'] as $key => $item)
                    {
                      // print_r($_SESSION['cart']);
                      $sub = $item['qty_selected']*$item['price'];
                      // If value is greater than zero


                                    echo '<tr>'
                                      . '<td>' . $item['name'] . '</td>'
                                      . '<td>' . $item['qty_selected'] . '</td>'
                                      . '<td>$' . number_format( $item['price'], 2 ) . '</td>'
                                      . '<td>$' . number_format( $sub, 2) . '</td>'
                                      . '<td>'
                                      . ' <a href="minicart.php?remove=' . $item['id'] . '">[-]</a> '
                                      . ' <a href="minicart.php?add=' . $item['id'] . '">[+]</a> '
                                      . ' <a href="minicart.php?delete=' . $item['id'] . '">[Delete]</a>'
                                      . '</td>'
                                      . '</tr>'
                                    ;

                            $total += $sub;
                    }

                    echo '</tbody> </div>';
                    echo '<tfoot><tr>'
                               . '<td colspan="3" style="text-align:right; font-weight:bold">Total:</td>'
                               . '<td>$' . number_format($total, 2) . '</td></tr></tfoot></table>';
                        // echo implode( "\n", $tbl );
              }
              else
              {

                echo '<div align="center"><h2> [ Nothing in Cart ] </h2></div>';
              }
    }

    // Posts the table that is generated to display the shopping cart
        public function showCartTable2()
        {
              // Set items to 0
              // Set tbl = array
              $items = 0;
              $tbl = array();
              $total = 0;

              // Testing to see if cart passes
              // echo $_SESSION['cart']

                  // Add our specific item to cart
                  $item = $_POST;
                  // Variable we will use to determine if the item exists in cart already
                  $exists = 0;

                  // If our cart exists within SESSION
                  if(array_key_exists('cart',$_SESSION))
                  {
                    // Make $cart hold _SESSION cart
                    $cart = $_SESSION['cart'];

                    echo ' <div align="center" style="padding-24px;"><h3> Currently in your Cart</h3><table border="1"><thead><tr>'
                        . '<th>Item</th>'
                        . '<th>Quantity</th>'
                        . '<th>Unit Price</th>'
                        . '<th>SubTotal</th>'
                        . '<th>Actions</th>'
                        . '</tr></thead><tbody>'
                      ;

                foreach($_SESSION['cart'] as $key => $item)
                  {
                    // print_r($_SESSION['cart']);
                    $sub = $item['qty_selected']*$item['price'];
                    // If value is greater than zero

                                  echo '<tr>'
                                    . '<td>' . $item['name'] . '</td>'
                                    . '<td>' . $item['qty_selected'] . '</td>'
                                    . '<td>$' . number_format( $item['price'], 2 ) . '</td>'
                                    . '<td>$' . number_format( $sub, 2) . '</td>'
                                    . '<td>'
                                    . ' <a href="minicart.php?remove=' . $item['id'] . '">[-]</a> '
                                    . ' <a href="minicart.php?add=' . $item['id'] . '">[+]</a> '
                                    . ' <a href="minicart.php?delete=' . $item['id'] . '">[Delete]</a>'
                                    . '</td>'
                                    . '</tr>'
                                  ;

                          $total += $sub;
                  }
                  echo '</tbody> </div>';
                  echo '<tfoot><tr>'
                             . '<td colspan="3" style="text-align:right; font-weight:bold">Total:</td>'
                             . '<td>$' . number_format($total, 2) . '</td></tr></tfoot></table>';
                      // echo implode( "\n", $tbl );
        }
        else {
          echo '<div align="center"><h2> [ Nothing in Cart ] </h2></div>';
        }
      }


// Posts the buttons at the top of
    public function buttons1()
    {

        echo <<<buttons1
        <!-- PASTE HTML CODE HERE -->

        <div class="container" style="padding-top: 24px;">
          <fieldset>
          <!-- Button (Double) -->
          <div  style="padding: 24px;">
          <form>
          <div class="form-group" method="POST">
            <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-8" align="right">
              <a href="confirmedOrder.php" class="btn btn-success" role="button">Confirm Order</a>
              <a href="updateCustomer.php" class="btn btn-primary" role="button">Update User Info</a>
              <a href="clearCart.php" class="btn btn-danger" role="button">Clear Cart</a>
              <a href="index.php" class="btn btn-dark" role="button">Back to Index</a>
            </div>
          </div>
          </div>
          </div>
          </fieldset>
          </form>

        <!-- END HTML CODE -->
buttons1;
        // $this->template = $temp;
    }

    // Posts the buttons at the top of
        public function buttons2()
        {

            echo <<<buttons2
            <!-- PASTE HTML CODE HERE -->

            <div class="container" style="padding-top: 24px;">
              <fieldset>
              <!-- Button (Double) -->
              <div  style="padding: 24px;">
              <form>
              <div class="form-group" method="POST">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8" align="right">
                  <a href="checkout.php" class="btn btn-success" role="button">Go to Checkout</a>
                  <a href="catalogue.php" class="btn btn-primary" role="button">Back to Catalogue</a>
                  <a href="clearCart.php" class="btn btn-danger" role="button">Clear Cart</a>
                  <a href="index.php" class="btn btn-dark" role="button">Back to Index</a>
                </div>
              </div>
              </div>
              </div>
              </fieldset>
              </form>

            <!-- END HTML CODE -->
buttons2;
            // $this->template = $temp;
        }
}
