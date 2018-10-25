@extends('template\template')
@section('content')
    <section id="works" class="page-section">
        <div class="container">
            <div class="mixed-grid pad general-section">
                <div class="filter-menu">
                    <ul class="nav black works-filters text-center" id="filters">
                        <li class="filter active" data-filter=".all">Anime Video</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="masonry-grid grid-col-3 black">
                    <div class="grid-sizer"></div>
                    <!-- Item 1 -->
                    <div class="grid-item all commercial">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                                <h4></h4>

                            </div>
                        </div>
                    </div>
                    <!-- Item 1 Ends-->
                    <!-- Item 2 -->
                    <div class="grid-item all commercial healthcare">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 Ends-->
                    <!-- Item 3 -->
                    <div class="grid-item all education">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">

                            </div>
                        </div>
                    </div>
                    <!-- Item 3 Ends-->
                    <!-- Item 4 -->
                    <div class="grid-item all education residential">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 Ends-->
                    <!-- Item 5 -->
                    <div class="grid-item all commercial">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 Ends-->
                    <!-- Item 6 -->
                    <div class="grid-item all healthcare commercial">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                            </div>
                        </div>
                    </div>
                    <!-- Item 6 Ends-->
                    <!-- Item 7 -->
                    <div class="grid-item all healthcare commercial residential">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                            </div>
                        </div>
                    </div>
                    <!-- Item 7 Ends-->
                    <!-- Item 8 -->
                    <div class="grid-item all commercial healthcare education">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                            </div>
                        </div>
                    </div>
                    <!-- Item 8 Ends-->
                    <!-- Item 9 -->
                    <div class="grid-item all commercial residential">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                            </div>
                        </div>
                    </div>
                    <div class="grid-item all commercial residential">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">

                                <!-- Image Popup-->
                            </div>
                        </div>
                    </div>
                    <div class="grid-item all commercial residential">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                                <h4>Healthcare</h4>
                                <!-- Image Popup-->
                            </div>
                        </div>
                    </div>
                    <div class="grid-item all commercial residential">
                        <div class="grid">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                            <div class="figcaption">
                                <h4>Healthcare</h4>
                                <!-- Image Popup-->
                            </div>
                        </div>
                    </div>
                    <!-- Item 9 Ends-->
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
    <!-- Pretty Photo Popup -->

    <script type="text/javascript" src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
    <!-- Animations -->

    <script type="text/javascript" src="{{ URL::asset('js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/effect.js') }}"></script>
    <!-- Parallax BG -->

    <script type="text/javascript" src="{{ URL::asset('js/jquery.parallax-1.1.3.js') }}"></script>
    <!-- Fun Factor / Counter -->

    <script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
    <!-- Isoptope -->

    <script type="text/javascript" src="{{ URL::asset('js/isotope.min.js') }}"></script>
    <!-- Custom Js Code -->

    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
@endsection

@section('css')
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
