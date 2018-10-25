@extends('template\template')
@section('content')
	<section id="intro" class="slider">
            <div class="tp-banner">
                <ul>
                    <li>
                        <img src="{{config('images.image.ani1')}}" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="repeat" />
                    </li>
                    <!-- Slide -->
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </section>
        
        <!-- call to action -->
        <section id="services" class="page-section">
			<div class="image-bg content-in fixed" data-background="img/sections/bg/white.jpg"></div>
            <div class="container">
				<div class="row">
                    <div class="col-md-12 bottom-pad-30 text-center white" data-animation="fadeInUp">
                        <!-- Title -->
                        <h2 class="heading"><span class="text-color">POPULAR ANIME</span></h2>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInLeft">
								<p class="text-center">
									<a href="portfolio-single.html">
										<img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" style="height: 180px;" />
									</a>
								</p>
								<h5>
									<a href="portfolio-single.html" style="color:gray;">General Contracting</a>
								</h5>
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInUp">
								<p class="text-center">
									<a href="portfolio-single.html">
										<img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" style="height: 180px;" />
									</a>
								</p>
								<h5>
                                    <a href="portfolio-single.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInRight">
								<p class="text-center">
									<a href="portfolio-single.html">
										<img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" style="height: 180px;" />
									</a>
								</p>
								<h5>
                                    <a href="portfolio-single.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                         <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInRight">
                            
                                <p class="text-center">
                                    <a href="portfolio-single.html">
                                        <img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" style="height: 180px;"/>
                                    </a>
                                </p>
                               <h5>
                                    <a href="portfolio-single.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                </div>
				<div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-xs-pad-40">
								<p class="text-center">
									<a href="portfolio-single.html">
										<img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" style="height: 180px;"/>
									</a>
								</p>
								<h5>
                                    <a href="portfolio-single.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-xs-pad-40">
							<!-- <div class="box-item" style="background-color: white; border:none;"> -->
								<p class="text-center">
									<a href="portfolio-single.html" >
										<img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" style="height: 180px;" />
									</a>
								</p>
								<h5>
                                    <a href="portfolio-single.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
						<div class="col-sm-3 col-md-3 col-xs-12 bottom-xs-pad-40">
								<p class="text-center">
									<a href="portfolio-single.html" >
										<img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" style="height: 180px;"/>
									</a>
								</p>
								<h5>
                                    <a href="portfolio-single.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                         <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInRight">
                                <p class="text-center">
                                    <a href="portfolio-single.html">
                                        <img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" style="height: 180px;"/>
                                    </a>
                                </p>
                                <h5 >
                                    <a href="portfolio-single.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                </div>
            </div>
        </section>
        <!-- Services -->
        <section id="services" class="page-section">
            <div class="image-bg content-in fixed" data-background="img/sections/bg/white.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 bottom-pad-30 text-center white" data-animation="fadeInUp">
                        <!-- Title -->
                        <h2 class="heading"><span class="text-color">LATEST VIDEO</span></h2>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInLeft">
                            
                                <p class="text-center">
                                    <a href="" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" style="height: 160px; width: 262px;">
                                        </iframe>
                                        
                                    </a>
                                </p>
                                <h5>
                                    <a href="services-1.html" style="color:gray;">General Contracting</a>
                                </h5>
                                
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInUp">
                                <p class="text-center">
                                    <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" style="height: 160px; width: 262px;">
                                        </iframe>
                                    </a>
                                </p>
                                <h5>
                                    <a href="services-1.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInRight">
                            
                                <p class="text-center">
                                    <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" style="height: 160px; width: 262px;">
                                        </iframe>
                                    </a>
                                </p>
                                <h5>
                                    <a href="services-1.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                         <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInRight">
                                <p class="text-center">
                                    <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" style="height: 160px; width: 262px;">
                                        </iframe>
                                    </a>
                                </p>
                               <h5>
                                    <a href="services-1.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-xs-pad-40">
                            
                                <p class="text-center">
                                    <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" style="height: 160px; width: 262px;">
                                        </iframe>
                                    </a>
                                </p>
                                <h5>
                                    <a href="services-1.html" style="color:gray;">General Contracting</a>
                                </h5>
                                
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-xs-pad-40">
                            
                                <p class="text-center">
                                    <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" style="height: 160px; width: 262px;">
                                        </iframe>
                                    </a>
                                </p>
                                <h5>
                                    <a href="services-1.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-12 bottom-xs-pad-40">
                            
                                <p class="text-center">
                                    <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" style="height: 160px; width: 262px;">
                                        </iframe>
                                    </a>
                                </p>
                                <h5>
                                    <a href="services-1.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                         <div class="col-sm-3 col-md-3 col-xs-12 bottom-pad-40" data-animation="fadeInRight">
                            
                                <p class="text-center">
                                    <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" style="height: 160px; width: 262px;">
                                        </iframe>
                                    </a>
                                </p>
                                <h5 >
                                    <a href="services-1.html" style="color:gray;">General Contracting</a>
                                </h5>
                        </div>
                </div>
            </div>
        </section>
		
        <!-- testimonials -->    
		<section id="latest-news" class="page-section">
            <div class="container">
                 <div class="row">
					<div class="col-md-12 bottom-pad-60 text-center" data-animation="fadeInUp">
						<!-- Title -->
						<h2 class="heading">Our Latest <span class="text-color">News</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec
						odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</p>
					</div>
				</div>
                <div class="row lit-space">
                    <div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3"
                    data-autoplay="true" data-navigation="true" data-animation="fadeInUp">
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <p class="text-center">
                                <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                    <img src="img/news/ani1.jpg" width="420" height="280" alt="" />
                                </a>
                            </p>
                            <h4>
                                <a href="blog-single.html">General Contracting</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
                            deserunt a enim harum eaque fugit.</p>
                            <a href="blog-single.html" class="read-more">Read More</a>
                            <div class="right-post-meta">
                            <span class="meta-like">
                            <i class="icon-heart"></i> 5</span> 
                            <span class="meta-comment">
                            <i class="icon-comment"></i> 12</span></div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <p class="text-center">
                                <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                    <img src="img/news/ani2.jpg" width="420" height="280" alt="" />
                                </a>
                            </p>
                            <h4>
                                <a href="blog-single.html">Construction Consultant</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
                            deserunt a enim harum eaque fugit.</p>
                            <a href="#" class="read-more">Read More</a>
                            <div class="pull-right">
                            <i class="icon-heart"></i> 5 
                            <i class="icon-comment"></i> 12</div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <p class="text-center">
                                <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                    <img src="img/news/ani3.jpg" width="420" height="280" alt="" />
                                </a>
                            </p>
                            <h4>
                                <a href="blog-single.html">House Renovation</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
                            deserunt a enim harum eaque fugit.</p>
                            <a href="#" class="read-more">Read More</a>
                            <div class="right-post-meta">
                            <span class="meta-like">
                            <i class="icon-heart"></i> 5</span> 
                            <span class="meta-comment">
                            <i class="icon-comment"></i> 12</span></div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <p class="text-center">
                                <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                    <img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" />
                                </a>
                            </p>
                            <h4>
                                <a href="blog-single.html">Metal Roofing</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
                            deserunt a enim harum eaque fugit.</p>
                            <a href="blog-single.html" class="read-more">Read More</a>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <p class="text-center">
                                <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                    <img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" />
                                </a>
                            </p>
                            <h4>
                                <a href="blog-single.html">Green House</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
                            deserunt a enim harum eaque fugit.</p>
                            <a href="blog-single.html" class="read-more">Read More</a>
                            <div class="right-post-meta">
                            <span class="meta-like">
                            <i class="icon-heart"></i> 5</span> 
                            <span class="meta-comment">
                            <i class="icon-comment"></i> 12</span></div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <p class="text-center">
                                <a href="{{config('images.image.ani1')}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                                    <img src="{{config('images.image.ani1')}}" width="420" height="280" alt="" />
                                </a>
                            </p>
                            <h4>
                                <a href="blog-single.html">Tiling and Painting</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
                            deserunt a enim harum eaque fugit.</p>
                            <a href="blog-single.html" class="read-more">Read More</a>
                            <div class="right-post-meta">
                            <span class="meta-like">
                            <i class="icon-heart"></i> 5</span> 
                            <span class="meta-comment">
                            <i class="icon-comment"></i> 12</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('javascript')
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- Menu jQuery plugin -->
     
    <script type="text/javascript" src="{{ URL::asset('js/hover-dropdown-menu.js') }}"></script>
    <!-- Menu jQuery Bootstrap Addon --> 
    <script type="text/javascript" src="{{ URL::asset('js/jquery.hover-dropdown-menu-addon.js') }}"></script>
    <!-- Scroll Top Menu -->
     
    <script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Sticky Menu --> 
    <script type="text/javascript" src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
    <!-- Bootstrap Validation -->
     
    <script type="text/javascript" src="{{ URL::asset('js/bootstrapValidator.min.js') }}"></script>
    <!-- Revolution Slider -->
     
    <script type="text/javascript" src="{{ URL::asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/revolution-custom.js') }}"></script>
    <!-- Portfolio Filter -->
     
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mixitup.min.js') }}"></script>
    <!-- Animations -->
     
    <script type="text/javascript" src="{{ URL::asset('js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/effect.js') }}"></script>
    <!-- Owl Carousel Slider -->
     
    <script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!-- Pretty Photo Popup -->
     
    <script type="text/javascript" src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
    <!-- Parallax BG -->
     
    <script type="text/javascript" src="{{ URL::asset('js/jquery.parallax-1.1.3.js') }}"></script>
    <!-- Fun Factor / Counter -->
     
    <script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
    <!-- Twitter Feed -->
     
    <script type="text/javascript" src="{{ URL::asset('js/tweet/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tweet/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tweet/tweetie.min.js') }}"></script>
    <!-- Background Video -->
     
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mb.YTPlayer.js') }}"></script>
    <!-- Custom Js Code -->
     
    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
@endsection

@section('css')
 <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,500,700,400italic,700italic' />
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
        <!-- Font Awesome Icons -->
        <link href='{{ URL::asset('css/font-awesome.min.css') }}' rel='stylesheet' type='text/css' />
        <!-- Bootstrap core CSS -->
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('css/hover-dropdown-menu.css') }}" rel="stylesheet" />
        <!-- Icomoon Icons -->
        <link href="{{ URL::asset('css/icons.css') }}" rel="stylesheet" />
        <!-- Revolution Slider -->
        <link href="{{ URL::asset('css/revolution-slider.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('rs-plugin/css/settings.css') }}" rel="stylesheet" />
        <!-- Animations -->
        <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet" />
        <!-- Owl Carousel Slider -->
        <link href="{{ URL::asset('css/owl/owl.carousel.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('css/owl/owl.theme.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('css/owl/owl.transitions.css') }}" rel="stylesheet" />
        <!-- PrettyPhoto Popup -->
        <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet" />
        <!-- Custom Style -->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" />
        <!-- Color Scheme -->
        <link href="{{ URL::asset('css/color.css') }}" rel="stylesheet" />
@endsection