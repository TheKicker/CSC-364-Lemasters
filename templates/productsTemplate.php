<?php
// Based on Hepner's Layout (He's tutoring me on Monday Nights)
// Connecting to our Database
// include('../includes/application_includes.php');

require_once (FS_TEMPLATES . 'templateEngine.php');

// Create product class
class product extends templateEngine
{
	public static function products($db)
    {
		// $sql = 'Select * from Products Order by rand() Limit 3';

    $sql = 'select * from products';
    $posts = $db->query($sql);

// Begin HTML Layout of Products
				echo <<<products
        <!-- Page Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
				</div>
			</div>
			<div class="row margin-b-2">
products;
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

	// breaks rows down into columns of 3 as possible
	if ($count % 3 == 0 && $count != 0)
  {
    $row = "<div class='row margin-b-2'>";
    $rowEnd = "</div>";
  }
		// Complete Format
		echo $rowEnd;
		echo $row;

		echo '<div class="col-sm-4 productBox"> <img class="img-fluid thumbnail" src="https://tse2.mm.bing.net/th?id=OIP.CrrIJJncFlIiE2iuRC47pQAAAA&pid=Api" style="padding: 10px;" alt=""> <div class="caption">';
		echo '<h3 style="padding: 10px;"><a href="productProfile.php?id=' . $id . '">' . $name . "</h3></a>" . '';
		echo '<p style="padding: 10px;">' . $desc . "<b> <br> Price: $" . $price . " (USD)</b></p>";
		// Input button that posts things to our Add To Cart file
		echo '<form action="addToCart.php" method="POST"> <input type="hidden" name="qty_selected" value="1"> <input type="hidden" name="id" value="' . $id . '"> <input type="hidden" name="name" value="' . $name . '"> <input type="hidden" name="price" value="' . $price . '">';
		echo '<input class="btn btn-dark" type="submit" value="Add to Cart" />';
		echo '</form></div></div>';

// Increase interval
$count++;
}
echo $rowEnd;
    }
  }
?>
