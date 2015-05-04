<?php
  // start the session
  session_start();

  // load the header content
  include("scripts/content/header.php");

  // only the original navbar is required as login can only be accessed when no user is logged in
  include("scripts/navbar/navbar.php");

  // load the content for the login page
  include("scripts/content/login_content.php");

  // load the footer content
  include("scripts/content/footer.php");
?>
