<?php
  // start session
  session_start();

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
                <th> Price </th>";

  // if the user is admin, then display two other options
  if(isset($_SESSION['admin']))
  {
    echo "<th> </th>";
    echo "<th> </th>";
  }

  // if the user is a normal user, then display only the edit column
  else if(isset($_SESSION['user']))
    echo "<th> Edit </th>";

  echo "</thead>
        <tbody>";

  // loop through the entire array and print the data into the table
  // no specific order for looping
  while($row = mysql_fetch_array($result))
  {
    echo "<tr id='3'>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    // add the edit and delete icon for admins
    if(isset($_SESSION['admin']))
    {
      echo "<td><a href='#'><span class='glyphicon glyphicon-pencil'></span></a></td>";
      echo "<td><a href='#' onclick='delete_game(this)' id='$row[0]'><span class='glyphicon glyphicon-remove'></span></a></td>";
    }
    // add only the edit option for normal users
    else if(isset($_SESSION['user']))
      echo "<td><a href='#'><span class='glyphicon glyphicon-pencil'></span></a></td>";
    echo "</tr>";
  }
  echo "</tbody></table></div>";
?>
