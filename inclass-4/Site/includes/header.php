 <!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.html" title="">
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./index.php" title="" <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="active" <?php } ?>  >Home</a></li>
          <li><a href="./about.php" title="" <?php if($_SERVER['SCRIPT_NAME']=="/about.php") { ?>  class="active" <?php } ?> > About</a></li>
          <li><a href="./pricing.php" title="" <?php if($_SERVER['SCRIPT_NAME']=="/pricing.php") { ?>  class="active" <?php } ?>> Pricing </a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
