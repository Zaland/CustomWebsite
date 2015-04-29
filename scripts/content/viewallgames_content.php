<?php
  // connect to the databse
  include("scripts/dbconnect.php");

  // grab all the content from the database and store it in result, then close the database
  $result = mysql_query("SELECT * FROM GamesInfo");
  mysql_close($location);

  // set up the table with appropriate headers
  echo "<div class='container' style='padding-top:60px'>
          <div class='panel'>
            <table class='table table-striped table-hover'>
              <thead>
                <tr>
                <th> Name </th>
                <th> Developer </th>
                <th> Publisher </th>
                <th> Price </th>
              </thead>
              <tbody>";

  // loop through the entire array and print the data into the table
  // no specific order for looping
  while($row = mysql_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "</tr>";
  }
  echo "</tbody></table></div>";
?>
