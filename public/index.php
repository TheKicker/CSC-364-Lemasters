<?php
/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'createUserTemplate.php');
require_once(FS_TEMPLATES . 'jumbotronTemplate.php');
require_once(FS_TEMPLATES . 'productsRand.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');
// Include the User class
require_once(FS_INCLUDES . 'user.php');
// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();
// Load jumbotron
$jumbo = new jumbotronTemplate();
echo $jumbo->jumbotron1();
?>

  <div class="container">
      <main role="main">
          <!-- Get customer's attention (call to action) -->
          <h2 style="padding-left: 24px;">Recommended for you </h2>
          <hr>

<?php
// Display three random products from catalogue
$randProducts = new productRand();
$randProducts->products3($db);
?>

          <div style="padding: 24px;">
          	<h2>In Wine, Truth </h2>
            <hr>
            	<p> We are a one-stop shop for all things wine.  Our humble beginings from the inside of a shed to our billion dollar coporate headquarters exhibits our drive to make customers like you feel welcome.  At In Vino, we believe the secret to any shopping experience comes in 3 things.
            	<ol>
              	<li><b>Customer Service:</b> The interactions we have with you (the customer) are made to feel like family, because that is what you are to us.</li>
              	<li><b>Low Prices But High Quality Products:</b> We want you to get the best taste our inventory has to offer but why pay an arm and a leg for it? Money is tight! Our vision is to have the fairest prices on the market, a win-win for customer and store alike!</li>
              	<li><b>Integrity:</b> We want to know how we are doing! This means you can give feedback in a multitude of ways -- or if you can't locate something, simply shoot us a message!!</li>
            </ol>
        	</div>

          <!-- style="text-shadow: 0.08em 0.08em gold" -->
          <div style="padding: 12px;">
            <h2> Company News </h2>
            <hr>
            <div style="padding: 10px;">
              <div align="center">
                  <img src="http://img.timeinc.net/time/magazine/archive/covers/1972/1101721127_400.jpg" style="width: 30%; height: 55%; padding: 10px; padding-bottom: 18px; frameborder: 3px solid black;">
              </div>
              <h3>Time Magazine</h3> <b>Named us the Top-Wine in 37 countries around the world.  They also gave us a list of awards we honestly dont care about. </b> Quisque id diam vel quam elementum. Leo in vitae turpis massa sed elementum tempus egestas sed. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Tristique sollicitudin nibh sit amet commodo. Porta non pulvinar neque laoreet suspendisse interdum. Viverra nam libero justo laoreet sit amet.
            </div>
            <div style="padding: 10px;">
              <div align="center">
                  <img src="/assets/FortniteScreenshot2.png" style="width: 85%; height: 60%; padding: 10px; padding-bottom: 18px; frameborder: 3px solid black;">
              </div>
              <h3>Partnership with Fortnite </h3> <b> In an upcoming update, players will use our wine rather than blue goo. Change will happen following Tilted Towers being demolished.  </b> Quisque id diam vel quam elementum. Leo in vitae turpis massa sed elementum tempus egestas sed. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Tristique sollicitudin nibh sit amet commodo. Porta non pulvinar neque laoreet suspendisse interdum. Viverra nam libero justo laoreet sit amet. <a href="https://www.epicgames.com/fortnite/en-US/battle-pass/brace-for-impact"> Download Fortnite here </a>
            </div>
          </div>

        </div>
        </main>
        <?php
        // Load page footer
        $footer = new mainFooterTemplate();
        echo $footer->pageBottom();
        ?>
