@extends('template.template')
@section('content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>{{ trans('message.login') }}</h2>
                        {!! Form::open(['route' => 'login']) !!}
                            {!! Form::text('name', '', ['placeholder' => 'Name', 'trans' => 'message.name']); !!}
                            {!! Form::email('email', '', ['placeholder' => 'Email Address', 'trans' => 'message.email']); !!}
                            <span>
                                {!! Form::checkbox('checkbox', false, false, ['class' => 'checkbox']); !!}
                                Keep me signed in
                            </span>
                            {!! Form::button('Login', ['type' => 'submit', 'class' => 'btn btn-default']); !!}
                            {!! Form::close() !!}
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>{{ trans('message.signup') }}</h2>
                        {!! Form::open(['route' => 'register']) !!}
                            {!! Form::text('name', '', ['placeholder' => 'Name']); !!}
                            {!! Form::text('user_name', '', ['placeholder' => 'Username']); !!}
                            {!! Form::text('email', '', ['placeholder' => 'Email Address']); !!}
                            {!! Form::password('password', ['placeholder' => 'Password']); !!}
                            {!! Form::button('Signup', ['type' => 'submit', 'class' => 'btn btn-default']); !!}
                        {!! Form::close() !!}
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
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
    <script src="{{ URL::asset('js/price-range.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
@endsection
@section('css')
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
        {{-- <link href="css/bootstrap.min.css" rel="stylesheet" --}}
    <link href="{{ URL::asset('css/css_login/main.css') }}" rel="stylesheet">
@endsection
