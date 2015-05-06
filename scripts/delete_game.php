<?php
  // include the database account information
  include("dbconnect.php");

  // store the value of the ID to delete
  $id = $_GET['i'];

  // delete the game from the database
  $result = mysql_query("DELETE FROM GamesInfo WHERE ID = '$id'") or die(mysql_error());

  // close the connection with the database
  mysql_close($location);
?>
