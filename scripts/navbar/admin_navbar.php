<body>
  <div class="container" style="padding-top:20px">
    <div class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Khan Corporation</a>
      </div>
      <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="viewgamespage.php">View All Games</a></li>
          <li><a href="addgamepage.php">Add Game</a></li>
          <li><a href="deletegamepage.php">Delete Game</a></li>
          <li><a href="searchgamepage.php">Search Game</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Games<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="games/Web Game.html">Game 1</a></li>
              <li><a href="games/StealthKitten.html">Game 2</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Logged in as Admin</a></li>
          <li><a href="scripts/logout.php">Log out</a></li>
        </ul>
      </div>
    </div>
  </div>
