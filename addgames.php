<?php
  // start the session
  session_start();

  // if user is admin, then load the required page data
  if(isset($_SESSION['admin']))
  {
    include("scripts/content/header.php");
    include("scripts/navbar/admin_navbar.php");
    include("scripts/content/addgames_content.php");
    include("scripts/content/footer.php");
  }

  // if the user is a normal user, then load the required page data
  else if(isset($_SESSION['user']))
  {
    include("scripts/content/header.php");
    include("scripts/navbar/user_navbar.php");
    include("scripts/content/addgames_content.php");
    include("scripts/content/footer.php");
  }

  // otherwise echo that the page cannot be loaded
  else
  {
    echo "You don't got privileges to view this page. Log in to view this page.";
  }
?>
