<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from zozothemes.com/html/metal/demo-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2015 13:25:53 GMT -->
<head>
    <meta charset="utf-8" />
    <title>annisuki</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Metal — A Construction Company Template" />
    <meta name="author" content="zozothemes.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
        <!-- Font -->
</head>
<body>
    <div id="page" class="page-wrap">
        <!-- Page Loader -->
        <div id="pageloader">
            <div class="loader-item fa fa-spin text-color"></div>
        </div>
        <!-- Top Bar -->
        <div id="top-bar" class="top-bar-section top-bar-bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="top-contact link-hover-black">
                    </div>
                        <!-- Top Social Icon -->
                        <div class="top-social-icon icons-hover-black">
                        
                         <a href="login.html" style="font-size: 13px;" {{ trans('message.register') }}>
                            
                            Register
                        </a>
                        <a href="login.html" style="font-size: 13px;">
                            Login
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar -->
        <!-- Sticky Navbar -->
        <header id="sticker" class="sticky-navigation">
            <!-- Sticky Menu -->
            <div class="sticky-menu relative">
                <!-- navbar -->
                <div class="navbar navbar-default navbar-bg-light" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="navbar-header">
                                <!-- Button For Responsive toggle -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span></button> 
                                <!-- Logo -->
                                 
                                <a class="navbar-brand" href="{{url('home')}}">ANISUKI
                                    <!-- <img class="site_logo" alt="Site Logo" src="img/logo.png" /> -->
                                </a></div>
                                <!-- Navbar Collapse -->
                                <div class="navbar-collapse collapse">
                                    <!-- nav -->
                                    <ul class="nav navbar-nav">
                                        <!-- Home  Mega Menu -->
                                        <li>
                                            <a class="active" href="{{url('home')}}">Home</a>
                                           
                                        </li>
                                        <!-- Mega Menu Ends -->
                                        <!-- Features Menu -->
                                        <li class="">
                                            <a href="{{url('anime')}}">ANIME</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{url('anime')}}">Action</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('anime')}}">School</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('anime')}}">Detective</a>
                                                </li>
                                                 <li>
                                                    <a href="{{url('anime')}}">Game</a>
                                                </li>
                                            </ul>
                                            
                                        </li>
                                        <!-- Ends Features Menu -->
                                        <!-- ABout Us -->
                                        <li>
                                            <a href="{{url('video')}}">VIDEO</a>
                                        </li>
                                        <li>
                                            <a href="{{url('news')}}">NEWS</a>
                                            
                                        </li>
                                        
                                        <li>
                                            <a href="{{url('contact')}}">Contact</a>
                                            
                                        </li>
                                       
                                        <li class="hidden-767">
                                            <a href="#" class="header-search">
                                                <span>
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Right nav -->
                                    <!-- Header Search Content -->
                                    <div class="bg-white hide-show-content no-display header-search-content">
                                        <form role="search" class="navbar-form vertically-absolute-middle">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your text &amp; Search Here"
                                                class="form-control" id="s" name="s" value="" />
                                            </div>
                                        </form>
                                        <button class="close">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- Header Search Content -->
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- navbar -->
            </div>
            <!-- Sticky Menu -->
        </header>

        @section('content')
        @show

         <footer id="footer">
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-4 widget bottom-xs-pad-20">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">ANIME</h3>
                            </div>
                            <nav>
                                <ul class="border-list">
                                    <!-- List Items -->
                                     <li>
                                        <a href="{{url('anime')}}">Action</a>
                                    </li>
                                    <li>
                                        <a href="{{url('anime')}}">School</a>
                                    </li>
                                    <li>
                                        <a href="{{url('anime')}}">Detective</a>
                                    </li>
                                    <li>
                                        <a href="{{url('anime')}}">Game</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 widget">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">NEWS</h3>
                            </div>
                            <nav>
                                <ul class="border-list">
                                    <!-- List Items -->
                                     <li>
                                        <a href="{{url('new_details')}}">Latest New </a>
                                    </li>
                                    <li>
                                        <a href="{{url('new_details')}}">Popular News</a>
                                    </li>
                                    <li>
                                        <a href="{{url('new_details')}}">Recent Post</a>
                                    </li>
                                    <!-- <li>
                                        <a href="portfolio.html">Game</a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 widget newsletter bottom-xs-pad-20">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">CONTACT</h3>
                            </div>
                            <div>
                                <!-- Text -->
                                <p>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
                                <p class="form-message1"></p>
                                <div class="clearfix"></div>
                                <!-- Form -->
                                <form id="subscribe_form" action="http://zozothemes.com/html/metal/demo-light/subscription.php" method="post" name="subscribe_form"
                                role="form">
                                    <div class="input-text form-group has-feedback">
                                    <input class="form-control" type="email" value="" name="subscribe_email" /> 
                                    <button class="submit bg-color" type="submit">
                                        <span class="glyphicon glyphicon-arrow-right"></span>
                                    </button></div>
                                </form>
                            </div>
                            <!-- Count -->
                            <div class="footer-count">
                                <p class="count-number" data-count="3550">total projects : 
                                <span class="counter"></span></p>
                            </div>
                                                     
                        </div>
                        <!-- .newsletter -->
                    </div>
                </div>
            </div>
            <!-- footer-top -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <!-- Copyrights -->
                        <div class="col-md-12">Copyright &copy; anisuki.com, 2015
                        <br />
                        <!-- Terms Link -->
                         
                        <a href="#">Terms of Use</a> / 
                        <a href="#">Privacy Policy</a>
                        <div class="position-right page-scroll gray-bg icons-circle i-3x">
                            <!-- Goto Top -->
                            <a href="#page">
                                <i class="glyphicon glyphicon-arrow-up no-margin"></i>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
        </footer>
        <!-- footer -->
    </div>

</body>
</html>

    @section('javascript')
    @show
    {{--@endsection--}}
    @section('css')
    @show
