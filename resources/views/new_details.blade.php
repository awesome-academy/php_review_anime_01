@extends('template\template')
@section('content')
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 bottom-pad-30">
                    <div class="post-image opacity">
                        <img src="{{config('images.image.ani1')}}" width="1170" height="382" alt="" title="" id="image" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste
                                    exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi
                                    unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem
                                    assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste
                                    exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi
                                    unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem
                                    assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                            </div>
                            <div class="post-meta">
                                <!-- Author  -->
                                <span class="author">
                                <i class="fa fa-user"></i> John Deo</span>
                                <!-- Meta Date -->

                                <span class="time">
                                <i class="fa fa-calendar"></i> 03.11.2014</span>
                                <!-- Comments -->

                                <span class="category">
                                <i class="fa fa-heart"></i> General, Building, Commercial</span>
                                <!-- Category -->

                                <span class="comments pull-right">
                                <i class="fa fa-comments"></i> Comments 112</span></div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12 top-pad-20">
                            <h4>{{trans('message.comment')}}Comments</h4>
                            <div class="comment-item">
                                <div class="pull-left author-img">
                                    <img class="img-circle" src="{{ URL::asset('img/sections/testimonials/1.jpg') }}" width="80" height="80" alt=""
                                         title="" />
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste
                                    exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi
                                    unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem
                                    assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                                <div class="post-meta">
                                    <!-- Author  -->
                                    <span class="author">
                                    <i class="fa fa-user"></i> John Deo</span>
                                    <!-- Meta Date -->

                                    <span class="time">
                                    <i class="fa fa-calendar"></i> 03.11.2014</span>
                                    <!-- Category -->

                                    <span class="comments pull-right">
                                </div>
                                <div class="comment-item">
                                    <div class="pull-left author-img">
                                        <img class="img-circle" src="{{ URL::asset('img/sections/testimonials/1.jpg') }}" width="80" height="80" alt=""
                                             title="" />
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste
                                        exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi
                                        unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem
                                        assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                                    <div class="post-meta">
                                        <!-- Author  -->
                                        <span class="author">
                                    <i class="fa fa-user"></i> John Deo</span>
                                        <!-- Meta Date -->

                                        <span class="time">
                                    <i class="fa fa-calendar"></i> 03.11.2014</span>
                                        <!-- Category -->

                                        <span class="comments pull-right">
                                    <!-- <i class="fa fa-comments"></i>  -->
                                            <!-- <a href="#">reply</a></span></div> -->
                                    </div>
                                    <div class="comment-item">
                                        <div class="pull-left author-img">
                                            <img class="img-circle" src="{{ URL::asset('img/sections/testimonials/1.jpg') }}" width="80" height="80" alt=""
                                                 title="" />
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste
                                            exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi
                                            unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem
                                            assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                                        <div class="post-meta">
                                            <!-- Author  -->
                                            <span class="author">
                                    <i class="fa fa-user"></i> John Deo</span>
                                            <!-- Meta Date -->

                                            <span class="time">
                                    <i class="fa fa-calendar"></i> 03.11.2014</span>
                                            <!-- Category -->

                                            <span class="comments pull-right">
                                        </div>
                                    </div>
                                </div>
                                <h4>Leave a Reaply</h4>
                                <div class="row">
                                    <form role="form" name="contactform" method="post">
                                        <!-- Field 1 -->
                                        <div class="col-md-6">
                                            <div class="input-text form-group">
                                                <input type="text" name="contact_name" class="input-name form-control"
                                                       placeholder="Full Name" />
                                            </div>
                                            <!-- Field 2 -->
                                            <div class="input-email form-group">
                                                <input type="email" name="contact_email" class="input-email form-control"
                                                       placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- Field 4 -->
                                            <div class="textarea-message form-group">
                                        <textarea name="contact_message" class="textarea-message form-control"
                                                  placeholder="Message" rows="4"></textarea>
                                            </div>
                                            <!-- Button -->
                                            <button class="btn btn-default" type="submit" style="margin-bottom: 10px;">Send Now
                                                <i class="icon-paper-plane"></i></button>
                                        </div>
                                    </form>
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
    <!-- Owl Carousel Slider -->

    <script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!-- Social Feeds -->

    <script type="text/javascript" src="{{ URL::asset('js/socialstream.jquery.js') }}"></script>
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

