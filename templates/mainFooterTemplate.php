<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

// date_default_timezone_set('EST');
// $now = print strftime('%c');

class mainFooterTemplate extends templateEngine
{
    public function pageBottom(){

        echo <<<pageBottom

        <footer>
          <hr>
            <p style="padding-left: 24px;"> Developed by <a href="https://www.linkedin.com/in/cavan-lemasters/"><i> Cavan Lemasters </i></a> <br> In Vino Veritas &copy; 2018-2019 </p>
        </footer>
        </body>
        </html>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 
pageBottom;
 // echo '<pre>'; print_r($_SESSION['cart']); echo '</pre>';
    }
}

?>
