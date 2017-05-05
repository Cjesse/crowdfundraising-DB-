<!--Bootstrap default nav bar-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
      <span class="glyphicon glyphicon-ruble" aria-hidden="true"></span>
      Crowdfund
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/create">Start a project <span class="sr-only">(current)</span></a></li>
        <li><a href="/about">About us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Music</a></li>
            <li><a href="#">Modern Art</a></li>
            <li><a href="#">Technology</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Games</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Fashion</a></li>
          </ul>
        </li>
      </ul>

      <!--for search bar-->
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="tag or peoject name">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <!--end of search bar-->
      
      @yield('loginorsignup')
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--bootstrap deafult nav bar-->