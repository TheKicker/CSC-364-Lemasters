<?php
require_once (FS_TEMPLATES . 'templateEngine.php');
// Include the Products Class
require_once(FS_INCLUDES . 'products.php');

class productProfileTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function productProfile($product)
    {
      // Population of variables

        $id = $product['id'];
        $name = $product['name'];
        $description = $product['description'];
        $qty_available = $product['qty_available'];
        $price = $product['price'];


        echo <<<productProfile
        <!-- PASTE HTML CODE HERE -->

        <div class="container" style="padding-top: 48px;">
        <h2> Product Profile </h2>
        <hr>

          <div class="row mb-2">
            <div class="col-lg-4">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <img src="http://staffordwaltonphoenix.org.uk/wp-content/uploads/2015/01/51_1wine_bottle.jpg" height="55%" width="100%" alt="Guest profile picture" style="#">
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                      <div>
                          <h2> $name </h2>
                          <div style="padding: 10px;">
                              <h4 style="padding: 18px;"> Description: </h4>
                              <div style="padding-left: 36px">
                                $description
                              </div>
                              <h4 style="padding: 18px;"> Available: </h4>
                              <div style="padding-left: 36px">
                                Approx. $qty_available bottles
                              </div>
                              <h4 style="padding: 18px;"> Price: </h4>
                              <div style="padding-left: 36px">
                                $$price (USD)
                              </div>
                          </div>
                    </div>
                  </div>
              </div>


                    <div class="form-group" >
                      <label class="col-md-4 control-label" for="button1id"></label>
                        <div class="col-md-8" align="right">
                          <form action="addToCart.php" method="POST"> <input type="hidden" name="id" value="$id"> <input type="hidden" name="name" value="$name"> <input type="hidden" name="price" value="$price">
                    		    <input class="btn btn-dark" type="submit" value="Add to Cart" />
                          <a href="updateProduct.php?id=$id" class="btn btn-default" role="button">Update Product</a>
                          <a href="catalogue.php" class="btn btn-default" role="button">Back to Catalogue</a>
                          </form>
                        </div>
                  </div>


            </div>
          </div>


        <!-- END HTML CODE -->
productProfile;
        // $this->template = $temp;
    }
}
