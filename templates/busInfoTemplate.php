<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class busInfoTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function busInfo()
    {
        echo <<<busInfo
        <!-- PASTE HTML CODE HERE -->
        <div  style="padding-left: 24px; padding-right: 24px;">
          <h2 style="padding-top: 48px;"> About Us! </h2>
          <hr>
        
            <h5> We love to hear what we are doing good or bad! Our dedication to customer service and product quality is unmatched.  For comments or suggestions, feel free to call us at the number listed below, or email us at <b>RecycleBin@InVinoVeritas.Net</b>. We spend most of our time drinking and making wine but will do our best to replay as soon as possible!</h5>

            <div align="center">
                <img src="https://lauritawinery.com/wp-content/uploads/LauritaWinery.jpg" style="width: 65%; height: 65%; padding: 10px; padding-bottom: 18px; frameborder: 3px solid black;">
            </div>
            <div class="container">
            <h3> Our Story </h3>
            <hr>
              <div style="padding: 10;">
                Located in the Western Pennslyvania Wine Country, one half mile North of Beaver Falls, the winery is open daily for wine tastings and restaurant dining. We offer homemade wines as well as being a licensed distributor for several brands.
              </div>
              <div style="padding: 10;">
                In addition to a large selection of Tri-State grown and produced wines, the tasting room also features a gift shop with gourmet foods and wine specialty items from around the world. We carry imported cheeses and all the fixings for a perfect picnic.
              </div>
              <div style="padding: 10;">
                  Since 1756, some of the finest award winning Wines have been produced at In Vino Veritas Winery. Our commitment to quality begins with careful monitoring of the grapes in our vineyard by our Vineyard Manager. Attention to detail continues through the crushing, fermentation and aging process. Our winemaker personally sees to each detail of every process.
              </div>

              <h3 style="padding-top: 18px;"> Our Location </h3>
              <hr>
            <div align="center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.564479431693!2d-80.32535498465076!3d40.77160277932544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834711fb3b14c8f%3A0x42cc894246d532f4!2s31st+St%2C+Beaver+Falls%2C+PA+15010!5e0!3m2!1sen!2sus!4v1519266024986" width="80%" height="60%" frameborder="0" style="border:0; padding-top: 24px; padding-bottom: 24px; padding-left: 8% padding-right: 10%" allowfullscreen></iframe>
            </div>
          </div>

        <div class="container">
          <div class="row mb-2" style="padding-right: 24px; padding-top: 10px; padding-bottom: 10px;">
              <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                      <a class="text-dark"><b>Corporate Address</b></a>
                    </h3>
                    <p class="card-text mb-auto"> 3200 College Avenue, Beaver Falls, Pennslyvania 15010</p>
                    <p class="card-text mb-auto"> 1-800-000-1234 </p>
                  </div>

                </div>
              </div>
              <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                      <a class="text-dark" href="#"><b>Business Hours (EST)</b></a>
                    </h3>
                    <p class="card-text mb-auto"> Monday - Friday:   0800 - 1730 </p>
                    <p class="card-text mb-auto"> Saturday & Sunday: 0900 - 1900 </p>
                  </div>

                </div>
              </div>
          </div>
        </div>
  </div>
        <!-- END HTML CODE -->
busInfo;
        // $this->template = $temp;
    }
}
