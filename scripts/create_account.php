<?php
  // include the database account information
  include("dbconnect.php");

  // grab the value from AJAX and store it in variables
  $user = $_GET['u'];
  $pass = $_GET['p'];

  // initiate the query and store the information returned in result
  $result = mysql_query("SELECT * FROM Accounts WHERE Username = '$user'") or die(mysql_error());

  // if username does not match, there will be no results
  // therefore create the account and then return a successful alert
  if(mysql_num_rows($result) == 0)
  {
    // insert the username and password into the database, the close the connection with the database
    mysql_query("INSERT INTO `Accounts` (`ID`, `Username`, `Password`) VALUES (NULL, '$user', '$pass')") or die(mysql_error());
    mysql_close($location);

    // return a successful alert
    echo "<div id='my_alert' class='alert fade in alert-success alert-dismissible' role='alert' align='center'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'> &times; </span> </button>
          Successfully created the account </div>";
  }

  // otherwise return an error message
  else
  {
    // close the open database
    mysql_close($location);

    // return the error message
    echo "<div id='my_alert' class='alert fade in alert-danger alert-dismissible' role='alert' align='center'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'> &times; </span> </button>
          Username already taken </div>";
  }
?>
