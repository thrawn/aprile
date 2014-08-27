<!-- nav.blade.php -->

<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">AprileUSA</a>
  </div>

    <ul class="nav navbar-nav">                                                                                                                   
      <li class="dropdown">                                                                                                                       
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Applications <b class="caret"></b></a>                                             
        <ul class="dropdown-menu">                                                                                                                
<!--          <li class="divider"></li>-->
<!--          <li class="dropdown-header">Applications</li>-->
          <li><a href="/quotes">Quotes</a></li>                                                                                                 
          <li><a href="#">Rates</a></li>                                                                                        
          <li><a href="#">Shipments</a></li>
        </ul>                                                                                                                                     
      </li>                                                                                                                                       
    </ul> 

  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <form class="navbar-form navbar-left">
      <input type="text" class="form-control col-lg-8" placeholder="Search">
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><h5>{{ Auth::user()->username }}</h5></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{ URL::to('logout') }}">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<!-- end nav.blade.php -->
