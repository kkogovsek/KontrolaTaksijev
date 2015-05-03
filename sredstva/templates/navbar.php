<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?site=home">Kontrola Taksijev</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(isset($_GET['site']) && $_GET['site']=='zapvgradnja') echo 'class="active"'; ?>><a href="?site=zapvgradnja" class="">Zapisnik o vgradnji</a></li>
        <li <?php if(isset($_GET['site']) && $_GET['site']=='porkontrola') echo 'class="active"'; ?>><a href="?site=porkontrola" class="">Poročilo o kontroli in overovitvi</a></li>
        <li <?php if(isset($_GET['site']) && $_GET['site']=='novposeg') echo 'class="active"'; ?>><a href="?site=novposeg" class="">Nov poseg</a></li>
        <li <?php if(isset($_GET['site']) && $_GET['site']=='novkontrola') echo 'class="active"'; ?>><a href="?site=novkontrola" class="">Vnos kontrole</a></li>
        <li <?php if(isset($_GET['site']) && $_GET['site']=='novtarifa') echo 'class="active"'; ?>><a href="?site=novtarifa" class="">Nova tarifa</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>