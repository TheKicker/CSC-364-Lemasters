<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class updateCustomerTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function updateCustomer()
    {
      $data = null;
      $firstName = $data['firstname'];
      $lastName = $data['lastname'];
      $address = $data['address'];
      $state = $data['state'];
      $city = $data['city'];
      $zip = $data['zip'];
      $phone = $data['phone'];
      $email = $data['email'];
      $password = $data['password'];
      $billAddress = $data['billing_address'];
      $billState = $data['billing_state'];
      $billCity = $data['billing_city'];
      $billZip = $data['billing_zip'];
      $mailingList = $data['mailing_list'];

        echo <<<updateCustomer
        <!-- PASTE HTML CODE HERE -->

        <div style="padding-top: 48px; padding-left: 36px; padding-right: 36px;">
          <h2> Update an Existing User </h2>
          <hr>
          </div>
                <div class="row justify-content-center" style="padding-top:15px;">
                    <form class="col-md-8" action="updateCustomer.php" method="POST" >
                    <fieldset>
                        <div class="form-group row">
                            <label for="firstName" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-3 w-80" style="padding:5px;">
                                <input id="firstname" name="firstName" placeholder="First" type="text" value="$firstName" class="form-control here" required="required">
                            </div>
                            <div class="col-md-3 w-80" style="padding:5px;">
                                <input id="lastname" name="lastName" placeholder="Last" type="text" value="$lastName" class="form-control here" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address1" class="col-md-3 col-form-label">Address</label>
                            <div class="col-md-9">
                                <input id="address" name="address" type="text" value="$address" class="form-control here" placeholder="1001 Main Street, Apartment 2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 offset-md-3" style="padding:5px;">
                                <input id="city" name="city" type="text" value="$city" placeholder="City" class="form-control here">
                            </div>
                            <div class="col-md-3" style="padding:5px;">
                                <select id="state" name="state" value="$state" class="custom-select">
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
                            <div class="col-md-2" style="padding:5px;">
                                <input id="zip" name="zip" type="text" value="$zip" placeholder="Zip" class="form-control here">
                            </div>
                        </div>

                        <div class="form-group row" style="padding:5px;">
                            <label for="phone" class="col-md-3 col-form-label">Phone</label>
                            <div class="col-md-9">
                                <input id="phone" name="phone" type="text" value="$phone" class="form-control here" required="required" placeholder="1-800-500-1234">
                            </div>
                        </div>
                        <div class="form-group row" style="padding: 5px;">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="text" value="$email" class="form-control here" required="required" placeholder="example@email.com">
                            </div>
                        </div>
                        <div class="form-group row" style="padding: 5px;">
                            <label for="password" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input id="password" name="password" type="password" value="$password" class="form-control here" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address1" class="col-md-3 col-form-label">Billing Address</label>
                            <div class="col-md-9">
                                <input id="billing_address" name="billing_address" type="text" value="$billAddress" class="form-control here" placeholder="1001 Main Street, Apartment 1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 offset-md-3" style="padding:5px;">
                                <input id="billing_city" name="billing_city" type="text" value="$billCity" placeholder="Billing City" class="form-control here">
                            </div>
                            <div class="col-md-3" style="padding:5px;">
                                <select id="billing_state" name="billing_state" value="$billState" class="custom-select">
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
                            <div class="col-md-2" style="padding:5px;">
                                <input id="billing_zip" name="billing_zip" type="text" value="$billZip" placeholder="Billing Zip" class="form-control here">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="submit"></label>
                            <div class="col-md-8">
                                <button id="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
                                <a id="cancel" name="cancel" href="/../index.php" value="Cancel" class="btn btn-info">Cancel</a>
                            </div>
                        </div>

                        <!-- <div class="form-group row" style="padding: 5px; align:center;">
                            <div class="offset-3 col-md-9">
                                <button name="submit" type="submit" class="btn btn-primary">Create User</button>
                            </div>
                        </div> -->
                        <a class="text-muted" href="/logIn.php" style="align:center;"> Already have an account? Sign In! </a>
                        </fieldset>
                    </form>
                </div>
            </div>

        <!-- END HTML CODE -->
updateCustomer;
        // $this->template = $temp;
    }
}
