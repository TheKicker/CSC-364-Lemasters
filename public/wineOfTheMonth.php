<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');
// Include the User class
require_once(FS_INCLUDES . 'user.php');
// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();

// Option exists to make this page reactive
?>

    <div style="padding-top: 48px; padding-right: 10%; padding-left: 10%;">
        <div>
          <div align=right><h4>“The discovery of a wine is of greater moment than the discovery of a constellation. <br> The universe is too full of stars.”</h4></div>
          <div align=right><h5><strong> ― Benjamin Franklin</strong></h5></div>
          </div>
      </div>

      <hr>

    <div class="container">
      <div class="row mb-2">
        <div class="col-lg-4">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <img src="http://www.narcisiwinery.com/wp-content/uploads/2014/02/x12_red_dechaunac-548x822.png.pagespeed.ic.DOak7kk8Gv.webp" width="360" height="595" alt="De Chaunac wine from Narcisi Winery in Gibsonia PA." style="#">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <div>
                  <h4> Description </h4>
                  <div style="padding: 10px;">
                    A French-American hybrid, this grape produces a medium bodied wine with a full fruity flavor. Distinct notes of orange, strawberry, and cherry with a fruity bouquet. Balanced acidity and a uniquely tart finish.
                  </div>
                  <h4> Why we love it </h4>
                  <div style="padding: 10px;">
                    The fruity flavor paired a medium-red provides a wonderful glass.  The aroma and alcohol content are appropriately good, and will be a bottle of wine you can enjoy again and again.  Also features the price and convenience of a domestic local wine -- with authentic italian taste. Definitely a glass to remember!
                  </div>
                  <h4> Suggested Dinner Pairing </h4>
                  <div style="padding: 10px;">
                    De Chaunac offers great versatility, making it a great companion for savory or sweet dishes. Well suited to stand up to slightly spicy dishes and poultry. The light acidity and semi-sweetness of this wine also pairs wonderfully with creamy desserts.
                  </div>
                  <h4> Suggested Cheese Pairing </h4>
                  <div style="padding: 10px;">
                    Any aged cheedar -- or we especially like the pepper jack or blue options.
                  </div>
                  <h4> WOTM -- Honorable Mentions </h4>
                  <div style="padding: 10px;">
                    <a href="https://www.wine.com/product/caymus-napa-valley-cabernet-sauvignon-2015/309394">  Cabernet Sauvignon 2015</a> by from Caymus Napa Valley. <br>
                    <a href="https://www.wine.com/product/virna-barolo-2013/340473">  Virna Barolo 2013 </a> by Nebbiolo from Barolo, Piedmont, Italy. <br>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
        <div>
          <hr>
            <h4> About the Winemaker </h4>
              <div style="padding: 10px;" align="center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2834.6577946155744!2d-79.89638253369624!3d40.60960275554542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834919305fa1ecb%3A0xc59e868eaf4ed986!2sLa+Casa+Narcisi+Winery!5e0!3m2!1sen!2sus!4v1519327333772" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            <div style="padding: 10px;">
              Founded in 2001, Narcisi Winery is a family-owned and operated winery located just 10 miles north of Pittsburgh in Gibsonia, Pennsylvania. Nestled within the beautiful rolling hills of Western PA, the winery will draw you back to a setting reminiscent of a Tuscan villa, where time and worries dissolve into the countryside.

            </div>
            <div style="padding: 10px;">
              Narcisi features authentic italian dining with quality that is unmatched.  Come in for a visit -- Bon Appétit!
                  <ul>
                    <li>
                      <a href="http://www.narcisiwinery.com/">Narcisi Winery -- Home page </a>
                    </li>
                    <li>
                      <a href="http://www.narcisiwinery.com/wp-content/uploads/2014/02/Dinner-Menu-2018.pdf">Narcisi Winery -- Online Menu </a>
                    </li>
                    <li>
                      <a href="http://www.narcisiwinery.com/events/">Narcisi Winery -- Events List </a>
                    </li>
                  </ul>
            </div>
          </div>
        </div>
<?php
        // Load footer
        $footer = new mainFooterTemplate();
        echo $footer->pageBottom();
