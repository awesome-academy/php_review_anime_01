@extends('template.template')
@section('content')
    <section id="contact-us" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <h5 class="title">
                                <i class="icon-address text-color"></i>{{ trans('message.mail') }}Mailing Address
                            </h5>
                            <address>{{ trans('message.address') }}Door no, your Steer address, City,
                                <br /> {{ trans('message.city') }}City, state,
                                <br />{{ trans('message.country') }}Country.
                            </address>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <h5 class="title">
                                <i class="icon-contacts text-color"></i>{{ trans('message.contactinfo') }}Contact Info</h5>
                            <div> {{ trans('message.phone') }}Phone : +0123 (345) 6789</div>
                            <div> {{ trans('message.mobile') }}Mobile : +0123 (345) 6789</div>
                            <div> {{ trans('message.email') }}Email :
                                <a href="mailto:support@yoursite.com">support@anisuki.com</a></div>
                        </div>
                    </div>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.</p>
                </div>
                <div class="col-md-6 col-md-6">
                    <h3 class="title">Contact Form</h3>
                    <p class="form-message"></p>
                    <div class="contact-form">
                        <!-- Form Begins -->
                        {!! Form::open(['url' => 'foo/bar', 'id' => 'contactform', 'name' => 'contactform', 'method' => 'post']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Field 1 -->
                                    <div class="input-text form-group">
                                        {!! Form::text('contact_name', '', ['class' => 'input-name form-control', 'placeholder' => 'Full Name']); !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Field 2 -->
                                    <div class="input-email form-group">
                                        {!! Form::email('contact_email', '', ['class' => 'input-email form-control', 'placeholder' => 'Email']); !!}
                                    </div>
                                </div>
                            </div>
                            <!-- Field 3 -->
                            <div class="input-email form-group">
                                {!! Form::text('contact_phone', '', ['class' => 'input-phone form-control', 'placeholder' => 'Phone']); !!}
                            </div>
                            <!-- Field 4 -->
                            <div class="textarea-message form-group">
                            {!! Form::textarea('contact_message', '', ['class' => 'textarea-message form-control', 'placeholder' => 'Message', 'rows' => '6']); !!}
                            </div>
                            <!-- Button -->
                            {{ Form::button('Click Me!<i class="icon-paper-plane"></i>', ['class' => 'btn btn-default', 'style' => 'margin-bottom: 20px;', 'rows' => '6', 'type' => 'submit']) }}
                        <!-- Form Ends -->
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
    <!-- Animations -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/effect.js') }}"></script>
    <!-- Parallax BG -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.parallax-1.1.3.js') }}"></script>
    <!-- Fun Factor / Counter -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
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
