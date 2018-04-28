<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class checkoutTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function checkout()
    {
      $data = null;
      $customerID = $data['customer_ID'];
      $shippingAdd = $data['shipping_address'];
      $shippingCit = $data['shipping_city'];
      $shippingSta = $data['shipping_state'];
      $shippingZip = $data['shipping_zip'];
      $method = $data['payment_method'];

        echo <<<checkout
        <!-- PASTE HTML CODE HERE -->
        <div align="center" style="padding-top: 48px; padding-left: 36px; padding-right: 36px;">
              <form id="createOrderForm" action='checkout.php' method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <fieldset>
                                    <!-- Form Name -->
                                    <h2>Shipping Information</h2>
                                    <hr>
                                    <div class="container">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Customer ID</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="customer_ID" name="customer_ID" required="">$customerID</textarea>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="address">Address</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="shipping_address" name="shipping_address" required="">$shippingAdd</textarea>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="city">City</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="shipping_city" name="shipping_city" required="">$shippingCit</textarea>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="state">State</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="shipping_state" id="shipping_state" value="$shippingState" class="custom-select" required="">
                                                <option value="">-- State --</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Marylnd</option>
                                                <option value="MA">Massacheusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Mizzou</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>

                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="zip">Zip</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="shipping_zip" name="shipping_zip" required="">$shippingZip</textarea>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="method">Payment Method</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="payment_method" name="payment_method" required="">$method</textarea>
                                        </div>
                                    </div>

                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="submit"></label>
                                        <div class="col-md-8">
                                            <button id="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
                                            <a id="cancel" name="cancel" href="/../index.php" value="Cancel" class="btn btn-info">Cancel</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            </div>
                  </div>
        <!-- END HTML CODE -->
checkout;
        // $this->template = $temp;
    }
}
