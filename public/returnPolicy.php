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
?>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
// Load page header
$header = new mainHeaderTemplate();
echo $header->pageTop();
 ?>
          <div style="padding-top: 48px; padding-left: 24px; padding-right: 24px;">
              <h2> Our Return Policy </h2>
              <hr>
                  <div align="center" style="padding: 12px;">
                    <img src="https://returnpath.com/wp-content/uploads/2015/12/ReturnPath-Favicon-512.png" style="width: 25%; height 25%; min-height: 150px; min-width: 150px; padding: 20px;">
                  </div>
                <h5> At In Vino Veritas, we promise to be your trusted partner for wine culture by delivering the advice, service and convenience you deserve — all at competitive prices.  So, if you are not fully satisfied with your purchase, let us help you with a replacement, return or refund. You will find our specific return policy assosciated with each product below.  Happy sipping! </h5>
              <div align="center" style="padding: 20px;">
                  <table>
                    <tr>
                      <th>Return Type </th>
                      <th>Contact </th>
                      <th>Regular Policy </th>
                    </tr>
                    <tr>
                      <td>Reds </td>
                      <td>White Dept. </td>
                      <td>Not gonna happen </td>
                    </tr>
                    <tr>
                      <td>Whites</td>
                      <td>Red Dept. </td>
                      <td>Still not gonna happen </td>
                    </tr>
                    <tr>
                      <td>Blends </td>
                      <td> Blend Dept. </td>
                      <td> Nope lol </td>
                    </tr>
                    <tr>
                      <td>Coffee </td>
                      <td>Coffee Dept. </td>
                      <td>We don't sell coffee </td>
                    </tr>
                    <tr>
                      <td>Water </td>
                      <td>Water Dept. </td>
                      <td>Sure, we'll refund your water </td>
                    </tr>
                    <tr>
                      <td>Your Happiness</td>
                      <td>Happy Dept. </td>
                      <td>No, non-refundable </td>
                    </tr>
                  </table>
                </div>
          </div>
<?php
      // Load footer
      $footer = new mainFooterTemplate();
      echo $footer->pageBottom();
