<header>
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                            <p>701 Old York Drive Richmond USA.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <p>Opening Hours 8:00 am - 11:00 pm</p>
                        </div> -->
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 visible-xs">
                            <div class="logo-mobile">
                                <a href=""><img src="images/Home/logo.png"/></a>
                            </div>
                        </div>
                        <div class="col-md-11 col-xs-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>
                            </div>
                            <div class="collapse navbar-collapse text-center " id="myNavbar">
                                <ul class="nav navbar-nav margin-l">
                                    <li><a href="{{ url('restaurant') }}">Home</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Menu</a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="toggle set-pos">
                                         list    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu btn-block box-content-menu">
                                            <ul class="menu">
                                                <!-- <li><a class="dropdown" href="404.html">404 page</a></li>
                                                <li><a class="dropdown" href="buttons.html">buttons</a></li>
                                                <li><a class="dropdown" href="grid.html">grid</a></li>
                                                <li><a class="dropdown" href="tab&accordian.html">tab & accordian</a></li>
                                                <li><a class="dropdown" href="typography.html">typography</a></li>
                                                <li><a class="dropdown" href="icons.html">icons</a></li> -->
                                                <!-- <li><a class="color_animation" href="">RESTAURANT-FORM</a></li>
                                                <li><a class="color_animation" href="">RESTAURANT-SHOW</a></li> -->
                                                <li><a class="color_animation dropdown" href="{{ route('restaurantcreate') }}">RESTAURANT-FORM</a></li>
                                                <li><a class="color_animation dropdown" href="{{ route('restaurantshow') }}">RESTAURANT-SHOW</a></li>
                                            </ul>
                                        </div>

                                    </li>
                                </ul>
                                <div class="logo hidden-xs col-lg-12">
                                    <a href=""><img src="images/Home/logo.png"/></a>
                                    <h6>FOODEQUE</h6>
                                </div>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="">service</a></li>
                                    <li><a href="">events</a></li>
                                    <li><a href="{{ url('contact')}}">CONTACT Us</a></li>

                                    <!--                                <li><a class="search" id="searchtoggl"><i class="fa fa-search"></i></a>
                                                                        <div id="searchbar" class="clearfix">
                                                                            <form id="searchform">
                                                                                <button type="submit" id="searchsubmit" class="fa fa-search fa-lg"></button>
                                                                                <input type="search" name="search-icon" id="search-icon" placeholder="Keywords..." autocomplete="off">
                                                                            </form>
                                                                        </div></li>-->
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-1">
                            <!--<a class="search" id="searchtoggl"><i class="fa fa-search"></i></a>-->
                            <!--                                <div id="searchbar" class="clearfix">
                                                                <form id="searchform">
                                                                    <button type="submit" id="searchsubmit" class="fa fa-search fa-lg"></button>
                                                                    <input type="search" name="search-icon" id="search-icon" placeholder="Keywords..." autocomplete="off">
                                                                </form>
                                                            </div>-->

                        </div>
                    </div>
                </div>
            </nav>
            <div class="clearfix"></div>
        </header>
        <!--end-->