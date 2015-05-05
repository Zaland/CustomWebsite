<?php
  // start session
  session_start();

  // include the database account information
  include("dbconnect.php");

  // grab the values from AJAX and store it in variables
  $name = $_GET['n'];
  $developer = $_GET['d'];
  $publisher = $_GET['p'];
  $price = $_GET['pr'];

  // see if any games match all the values
  $result = mysql_query("SELECT * FROM GamesInfo WHERE Name = '$name'") or die(mysql_error());

  // if the results are empty, then we know that the database does not have the same game
  // therefore, add the game to the database and echo the code 15
  if(mysql_num_rows($result) == 0)
  {
    // add the game to the database
    mysql_query("INSERT INTO `GamesInfo` (`ID`, `Name`, `Developer`, `Publisher`, `Price`)
    VALUES (NULL, '$name', '$developer', '$publisher', '$price')") or die(mysql_error());

    // close the connection with the database
    mysql_close($location);

    // echo the code 15
    echo "15";
  }

  // if there are existing entries with the same name
  // confirm if they have the same developer and publisher (price is not a concern)
  else
  {
    // close the open connection with the database
    mysql_close($location);

    // loop through all the results
    while($row = mysql_fetch_array($result))
    {
      // if the other fields match, then echo the code 15
      if($row[1] === $name && $row[2] === $developer && $row[3] === $publisher)
      {
        echo "16";
        break;
      }
    }
  }
?>
