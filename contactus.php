<?php
  // start the session
  session_start();

  // load the header content
  include("scripts/content/header.php");

  // if user is admin, then load the admin navbar
  if(isset($_SESSION['admin']))
  {
    include("scripts/navbar/admin_navbar.php");
  }

  // if user is just a regular user, then load the user navbar
  else if(isset($_SESSION['user']))
  {
    include("scripts/navbar/user_navbar.php");
  }

  // if user is neither, then load the normal navbar
  else
  {
    include("scripts/navbar/navbar.php");
  }

  // load the content for the about us page
  include("scripts/content/contactus_content.php");

  // load the footer content
  include("scripts/content/footer.php");
?>
