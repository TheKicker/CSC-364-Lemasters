<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class jumbotronTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function jumbotron1()
    {
        echo <<<jumbotron1
        <!-- PASTE HTML CODE HERE -->

        <div class="Jumbotron" style="background-image:url(http://vp.cdn.cityvoterinc.com/g/00-00-03-20-49-92-3204992_2297193.jpg); background-size: cover; background-position: center center; background-repeat: no-repeat; width: 100%; height: 80%; border: 3px solid black; opacity: 0.9; background-attachment: fixed;">
          <div class="Jumbotron" style=" background-color: white; color: black; opacity: 0.9;">
            <h3 class="display-3">De Chaunac 2016</h3>
            <h5> The latest Wine Of The Month has arrived, click to read more! </h5>
            <p><a class="btn btn-primary btn-lg" href="wineOfTheMonth.php" role="button">Learn more &raquo;</a></p>
          </div>
        </div>

        <!-- END HTML CODE -->
jumbotron1;

    }

    public function jumbotron2()
    {
        echo <<<jumbotron2
        <!-- PASTE HTML CODE HERE -->

        <div class="Jumbotron" style="background-image:url(http://static1.squarespace.com/static/5953978620099ef4d68c5f12/596e03a93045446edb675963/596e041e3045446edb67839d/1500382238180/Peninsula.jpg?format=original); background-size: cover; background-position: center center; background-repeat: no-repeat; width: 100%; height: 70%; border: 3px solid black; opacity: 0.9; background-attachment: fixed;">
          <div class="Jumbotron" style=" background-color: white; color: black; opacity: 0.9;">
            <h3 class="display-3">Investor Relations</h3>

            <!-- <p><a class="btn btn-primary btn-lg" href="wineOfTheMonth.php" role="button">Learn more &raquo;</a></p> -->
          </div>
        </div>

        <!-- END HTML CODE -->
jumbotron2;

    }
}
