<?php
  // include the database account information
  include("dbconnect.php");

  // grab the value from AJAX and store it in variables
  $user = $_GET['u'];
  $pass = $_GET['p'];

  // initiate the query and store the information returned in result
  $result = mysql_query("SELECT * FROM Accounts WHERE Username = '$user'") or die(mysql_error());

  // if username does not match, there will be no results
  // therefore create the account and return error code 10
  if(mysql_num_rows($result) == 0)
  {
    // insert the username and password into the database
    mysql_query("INSERT INTO `Accounts` (`ID`, `Username`, `Password`) VALUES (NULL, '$user', '$pass')") or die(mysql_error());

    // close the database after inserting the account
    mysql_close($location);

    // return a successful code
    echo "10";
  }

  // otherwise return the error code 11
  else
  {
    // close the database that is already open
    mysql_close($location);

    // return a error code
    echo "11";
  }
?>
