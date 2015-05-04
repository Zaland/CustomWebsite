<?php
  // starts session
  session_start();

  // resets the values of admin or user
  $_SESSION['admin'] = NULL;
  $_SESSION['user'] = NULL;

  // redirects the page to the home page
  header("location:/../~zaland/CustomWebsite/");
?>
