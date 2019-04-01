<?php
// Based on generic product layout
// Reduced to 3 random options
// Connecting to our Database
// include('../includes/application_includes.php');

require_once (FS_TEMPLATES . 'templateEngine.php');

// Create product class
class productRand extends templateEngine
{
  // Display 3 products at random
	public static function products3($db)
    {
    // SQL = select all products and order by random -- displaying only 3
    $sql = 'Select * from Products Order by rand() Limit 3';
		//print_r($db);
    // $sql = 'select * from products';
    $posts = $db->query($sql);

// Begin HTML Layout of Products
				echo <<<products3
        <!-- Page Content -->
		<div class="container-fluid" style="padding-left: 24px;">
			<div class="row">
				<div class="col-md-3">
					<div class="page-header">
						<h2 style='padding-top: 36px;'></h2>
            <!-- <a href="/createProduct.php" style="float:right" type="button" class="btn btn-default">Add Product</a> -->
					</div>
				</div>
			</div>
			<div class="row margin-b-2">
products3;

          // Loop through the posts and displays them
          // Initialize count to 0
          $count = 0;

				foreach ($posts->fetchAll() as $key => $post) {
          	// Populate our variables by breaking down information in Database
						$id = $post['id'];
          	$name = $post['name'];
            $desc = $post['description'];
            $price = $post['price'];
            $row = "";
            $rowEnd = "";
          	// If $count divided by 3 is equal to 0 and $count does not equal zero
          	// ie default divide products into groups of 3 until you run out of products
          	if ($count % 3 == 0 && $count != 0)
            {
              $row = "<div class='row margin-b-2'>";
              $rowEnd = "</div>";
            }
          // Complete Format
					echo $rowEnd;
					echo $row;
					echo '<div class="col-sm-4 productBox"> <img class="img-fluid thumbnail" src="https://tse2.mm.bing.net/th?id=OIP.CrrIJJncFlIiE2iuRC47pQAAAA&pid=Api" style="padding: 10px;" alt=""> <div class="caption">';
					echo '<h3 style="padding: 10px;"><a href="productProfile.php">' . $name . "</h3></a>" . '';
					echo '<p style="padding: 10px;">' . $desc . "<b> <br> Price: " . $price . " (USD)</b></p>";
					echo '<form action="addToCart.php" method="POST"> <input type="hidden" name="id" value="' . $id . '"> <input type="hidden" name="name" value="' . $name . '"> <input type="hidden" name="price" value="' . $price . '">';
					echo '<input class="btn btn-dark" type="submit" value="Add to Cart" />';
					echo '</form></div></div>';
          // Increase command
          $count++;
          }
    }

    // Display 6 products at random
  public static function products6($db)
    {
      {
        // SQL = select all products and order by random -- displaying only 6
      $sql = 'Select * from Products Order by rand() Limit 6';

  			// Several variables to connect and then 'grab' products from our database
  		$db = connectToDb();
      // $sql = 'select * from products';
      $posts = $db->query($sql);

  // Begin HTML Layout of Products
  				echo <<<products6
          <!-- Page Content -->
  		<div class="container-fluid" style="padding-left: 24px;">
  			<div class="row">
  				<div class="col-md-3">
  					<div class="page-header">
  						<h2 style='padding-top: 48px;'></h2>
              <!-- <a href="/createProduct.php" style="float:right" type="button" class="btn btn-dark">Add Product</a> -->
  					</div>
  				</div>
  			</div>
  			<div class="row margin-b-2">
products6;

    // Loop through the posts and displays them
    // Initialize count to 0
    $count = 0;
    foreach ($posts->fetchAll() as $key => $posts) {
      	// Populate our variables by breaking down information in Database
				$id = $post['id'];
      	$title = $post['name'];
        $desc = $post['description'];
        $price = $post['price'];
        $row = "";
        $rowEnd = "";
      	// If $count divided by 3 is equal to 0 and $count does not equal zero
      	// ie default divide products into groups of 3 until you run out of products
      	if ($count % 3 == 0 && $count != 0)
        {
          $row = "<div class='row margin-b-2'>";
          $rowEnd = "</div>";
        }
    // Complete Format
		echo $rowEnd;
		echo $row;
		echo '<div class="col-sm-4 productBox"> <img class="img-fluid thumbnail" src="https://tse2.mm.bing.net/th?id=OIP.CrrIJJncFlIiE2iuRC47pQAAAA&pid=Api" style="padding: 10px;" alt=""> <div class="caption">';
		echo '<h3 style="padding: 10px;"><a href="productProfile.php">' . $title . "</h3></a>" . '';
		echo '<p style="padding: 10px;">' . $desc . "<b> <br> Price: " . $price . " (USD)</b></p>";
		echo '<form action="addToCart.php" method="POST"> <input type="hidden" name="id" value="' . $id . '"> <input type="hidden" name="name" value="' . $title . '"> <input type="hidden" name="price" value="' . $price . '">';
		echo '<input class="btn btn-dark" type="submit" value="Add to Cart" />';
		echo '</form></div></div>';
    // Increase command
      $count++;
      }
          }
        }
      }
?>
