<!-- header -->
    <header id="header" class="clearfix">
        <!-- navbar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><img class="img-responsive" src="/images/classifieds.png" style="width:300px;height:50px;" alt=""></a>
                </div>
                <!-- /navbar-header -->
                
                <div class="navbar-left">
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href=""></a></li>
                            
                        </ul>
                    </div>
                </div>
                  @if (Auth::guest())  
                <!-- nav-right -->
                <div class="nav-right">
                    <!-- language-dropdown -->
                    
                    <!-- sign-in -->   
                                  
                    <ul class="sign-in">
                        <li><i class="fa fa-user"></i></li>
                        <li><a href="{{ route('login') }}"> Sign In </a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul><!-- sign-in -->   


                    <a href="{{ route('listings.create', [$area]) }}"  class="btn">Post Your Ad</a>
                </div>
                <!-- nav-right -->
                    @else   

                     <!-- nav-right -->
                <div class="navbar-right">
                             
                         <a href="{{ route('listings.create', [$area]) }}"  class="btn">Post Your Ad</a>

                        <ul class="nav navbar-nav">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" style="position:relative; padding-left:50px;">
                             <img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="User Images" class="img-responsive" style="width :32px; height:32px; position:absolute; border-radius: 50%; top:10px; left:10px;">
                                Hello {{ Auth::user()->name }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('listings.published.index', [$area]) }}"><i class="fa fa-user-o" aria-hidden="true"></i> My Profile </a></li>
                                      <li><a href="index.html"><i class="fa fa-briefcase" aria-hidden="true"></i> My Ads </a></li>
                                         <li><a href="{{ route('listings.published.index', [$area]) }}">Published listings ({{ $publishedListingsCount }})</a></li>
                            <li><a href="{{ route('listings.unpublished.index', [$area]) }}">Unpublished listings({{ $unpublishedListingsCount }})</a>
                            </li>
                             <li><a href="{{ route('listings.viewed.index', [$area]) }}">Recently viewed</a></li> 
                         <li><a href="{{ route('listings.favourites.index', [$area]) }}">Favourites</a></li>
                                      <li><a href="index.html"><i class="fa fa-envelope-o" aria-hidden="true"></i> Messages</a></li>
                              <li><a href="index.html"><i class="fa fa-star-o" aria-hidden="true"></i> Favourites</a></li>
                              <li>
                                <a href="{{ route('listings.create', [$area]) }}">New listing</a>
                            </li>
                                    <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                                </ul>
                            </li> 
                        </ul></div>                

              

                </div>
                <!-- nav-right -->
                @endif
            </div><!-- container -->
        </nav><!-- navbar -->
    </header><!-- header -->