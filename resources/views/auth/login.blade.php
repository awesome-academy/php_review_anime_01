@extends('template.template')
@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <h2>{{ trans('message.login') }}</h2>
                        {!! Form::open(['route' => 'login']) !!}
                            {!! Form::text('user_name', '', ['placeholder' => 'Username', 'trans' => 'message.placeholder']); !!}
                            {!! Form::email('email', '', ['placeholder' => 'Email Address', 'trans' => 'message.email']); !!}
                            {!! Form::password('password', ['placeholder' => 'Password']); !!}
                            <span>
                                {!! Form::checkbox('checkbox', false, false, ['class' => 'checkbox']); !!}
                                Keep me signed in
                            </span>
                            {!! Form::button('Login', ['type' => 'submit', 'class' => 'btn btn-default']); !!}
                            {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form">
                         <h2>{{ trans('message.signup') }}</h2>
                        {!! Form::open(['route' => 'register']) !!}
                            {!! Form::text('name', '', ['placeholder' => 'Name']); !!}
                            {!! Form::text('user_name', '', ['placeholder' => 'Username']); !!}
                            {!! Form::text('email', '', ['placeholder' => 'Email Address']); !!}
                            {!! Form::password('password', ['placeholder' => 'Password']); !!}
                            {!! Form::button('Signup', ['type' => 'submit', 'class' => 'btn btn-default']); !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/hover-dropdown-menu.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.hover-dropdown-menu-addon.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrapValidator.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/revolution-custom.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/effect.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tweet/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tweet/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tweet/tweetie.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mb.YTPlayer.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
    <script src="{{ URL::asset('js/price-range.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
@endsection
@section('css')
    <link href='{{ URL::asset('css/font-awesome.min.css') }}' rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/hover-dropdown-menu.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/icons.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/revolution-slider.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('rs-plugin/css/settings.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/owl/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/owl/owl.theme.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/owl/owl.transitions.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/color.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/css_login/main.css') }}" rel="stylesheet">
@endsection
