<nav role="navigation" class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Brand</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{{ action('PostsController@index') }}}">Home</a></li>
            <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
            <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
            <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
          @else
            <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
          @endif
        </ul>
    </div>
</nav>