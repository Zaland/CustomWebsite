<?php
  // start session
  session_start();

  // include the database account information
  include("dbconnect.php");

  // grab the value from AJAX and store it in variables
  $user = $_GET['u'];
  $pass = $_GET['p'];

  // initiate the query and store the information returned in result and then close the database
  $result = mysql_query("SELECT * FROM Accounts WHERE Username = '$user'") or die(mysql_error());
  mysql_close($location);

  // if username does not match, there will be no results
  // therefore, echo the code 13
  if(mysql_num_rows($result) == 0)
    echo "13";

  // if username or password do not match
  else
  {
    while($row = mysql_fetch_array($result))
    {
      // if the account is admin, set the admin session to true and echo the code 12
      if($row[1] === $user && $row[2] === $pass && $row[1] === 'admin')
      {
        $_SESSION['admin'] = $user;
        echo "12";
      }

      // if the account is just a user, then set the user session to true and echo the code 12
      else if($row[1] === $user && $row[2] === $pass)
      {
        $_SESSION['user'] = $user;
        echo "12";
      }

      // if username and password do not match, then echo the code 14
      else
        echo "14";
    }
  }
?>
