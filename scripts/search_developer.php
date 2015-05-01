<?php
  // include the database account information
  include("dbconnect.php");

  // grab the value from AJAX and store it in q
  $q = $_GET['q'];

  // initiate the query and store the information returned in result
  $result = mysql_query("SELECT * FROM GamesInfo WHERE Developer = '$q'") or die(mysql_error());
  mysql_close($location);

  // check to see if result is empty, if so then print no results found
  if(mysql_num_rows($result) == 0)
  {
    echo "<div class='col-md-4 col-md-offset-4'>
            <h4 align='center' style='color:#1fa67b; padding-bottom:20px'> No Results </h4>
            <form action='javascript:clearResults()' method='POST' style='padding-top:20px'>
              <input style='font-size:14px' type='submit' value='Clear Results' class='btn btn-custom btn-lg btn-block'/>
            </form>
          </div>";
  }

  // otherwise print out the table
  else
  {
    echo "<div class='col-md-4 col-md-offset-4'>
          <h4 align='center' style='color:#1fa67b; padding-bottom:20px'> Results </h4></div>
          <table class='table table-striped table-hover'>
            <thead><tr><th>Name</th><th>Developer</th><th>Publisher</th><th>Price</th></thead>
            <tbody>";
    while($row = mysql_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td>".$row[3]."</td>";
      echo "<td>".$row[4]."</td>";
      echo "</tr>";
    }
    echo "  </tbody>
          </table>
          <div class='col-md-4 col-md-offset-4'>
            <form action='javascript:clearResults()' method='POST' style='padding-top:20px'>
              <input style='font-size:14px' type='submit' value='Clear Results' class='btn btn-custom btn-lg btn-block'/>
            </form>
          </div>";
  }
?>
