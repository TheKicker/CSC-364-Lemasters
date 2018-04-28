<?php
require_once (FS_TEMPLATES . 'templateEngine.php');
require_once (FS_TEMPLATES . 'profileTemplate.php');

class mainHeaderTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function pageTop()
    {

      // initialize user as a guest
      $user = 'Cav';
      // If user is identified
      // Populate $user as appropriate name

      // Set default timezone to Eastern Standard Time
      date_default_timezone_set('EST');
      // H = 24 hour time WHEREAS h = 12 hour time
      // if time is less than 12 hours, 18, else(up to 24)
      // display appropriate saying and users name if identified
       if (date('H', time()) < 12)
        {
          $text = 'Good Morning, ' . $user;
        }
        elseif (date('H', time()) < 18)
        {
          $text = 'Good Afternoon, ' . $user;
        }
        else
        {
          $text = 'Good Evening, ' . $user;
        }

        echo <<<pageTop
        <!-- PASTE HTML CODE HERE -->
        <!doctype html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
           <!--<link rel="icon" href="../../../../favicon.ico"> -->

            <!-- PASTE THIS BEFORE EACH FRAMEWORK IN HEADER -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

            <title>CSC364 In Vino Veritas</title>

          </head>

          <body>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/penguino.php"> In Vino Veritas </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wineOfTheMonth.php">Wine of the Month</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogue.php">Catalogue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="makeYourOwn.php">Make Your Own</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Corporate</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="investorRelations.php">Investor Relations</a>
              <a class="dropdown-item" href="contactUs.php">About Us</a>
              <a class="dropdown-item" href="returnPolicy.php">Return Policy</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">User Center</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a class="dropdown-item" href="createUser.php">Create User</a>
              <a class="dropdown-item" href="logIn.php">Log In</a>
              <a class="dropdown-item" href="seeCart.php">Current Cart</a>
              <a class="dropdown-item" href="promoDeals.php">Specials</a>
              <a class="dropdown-item" href="#"></a>
            </div>
          </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
          <a class="nav-link" href="profile.php"> $text </a>
        </div>
      </div>
    </nav>
        <!-- END HTML CODE -->
pageTop;
        // $this->template = $temp;
    }
}
