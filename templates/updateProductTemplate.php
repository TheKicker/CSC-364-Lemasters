<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class updateProductTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function updateProd($data)
    {
      $id = $data['id'];
      $name = $data['name'];
      $description = $data['description'];
      $qty_available = $data['qty_available'];
      $price = $data['price'];

        echo <<<updateProd
        <!-- PASTE HTML CODE HERE -->
        <div align:center style="padding-top: 48px; padding-left: 36px; padding-right: 36px;">
              <form id="updateProductForm" action='updateProduct.php' method="POST" class="form-horizontal" enctype="multipart/form-data">
              <input type="hidden" value="$id" name="id">
                                <fieldset>
                                    <!-- Form Name -->
                                    <h2>Fix a Product</h2>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Name</label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" value="$name" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="description">Description</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="description" name="description" required="">$description</textarea>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="qty_available">Quantity Available</label>
                                        <div class="col-md-8">
                                            <input id="qty_available" name="qty_available" type="text" value="$qty_available" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="price">Price</label>
                                        <div class="col-md-8">
                                            <input id="price" name="price" type="text" value="$price" class="form-control input-md" required="">
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
        <!-- END HTML CODE -->
updateProd;
        // $this->template = $temp;
    }
}
