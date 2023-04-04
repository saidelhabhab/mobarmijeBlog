@extends('layouts.app')

@section('content')

    <div id="services" class="our-services section mt-9 pt-9">
        <div class="services-right-dec">
            <img src="{{asset('new/assets/images/services-right-dec.png')}}" alt="">
        </div>
        <div class="container">
            <div class="services-left-dec">
            <img src="{{asset('new/assets/images/services-left-dec.png')}}" alt="">
            </div>
            <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                <h2> <em>Welcome </em> {{ Auth::user()->name }}to our  <span>siteweb </span> page</h2>
                <div class="main-blue-button-hover mt-3">
                    <a href="{{route('contact')}}">Contact us </a>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-services">
                <div class="item">
                    <h4>Learn More about our Guidelines</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-01.png')}}" alt=""></div>
                    <p>Feel free to use this template for your business</p>
                </div>
                <div class="item">
                    <h4>Develop The Best Strategy for Business</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-02.png')}}" alt=""></div>
                    <p>Get to know more about the topic in details</p>
                </div>
                <div class="item">
                    <h4>UI / UX Design and Development</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-03.png')}}" alt=""></div>
                    <p>Get to know more about the topic in details</p>
                </div>
                <div class="item">
                    <h4>Discover &amp; Explore our SEO Tips</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-04.png')}}" alt=""></div>
                    <p>Feel free to use this template for your business</p>
                </div>
                <div class="item">
                    <h4>Optimizing your websites for Speed</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-01.png')}}" alt=""></div>
                    <p>Get to know more about the topic in details</p>
                </div>
                <div class="item">
                    <h4>See The Strategy In The Market</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-02.png')}}" alt=""></div>
                    <p>Get to know more about the topic in details</p>
                </div>
                <div class="item">
                    <h4>Best Content Ideas for your pages</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-03.png')}}" alt=""></div>
                    <p>Feel free to use this template for your business</p>
                </div>
                <div class="item">
                    <h4>Optimizing Speed for your web pages</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-02.png')}}" alt=""></div>
                    <p>Get to know more about the topic in details</p>
                </div>
                <div class="item">
                    <h4>Accessibility for mobile viewing</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-04.png')}}" alt=""></div>
                    <p>Get to know more about the topic in details</p>
                </div>
                <div class="item">
                    <h4>Content Ideas for your next project</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-02.png')}}" alt=""></div>
                    <p>Feel free to use this template for your business</p>
                </div>
                <div class="item">
                    <h4>UI &amp; UX Design &amp; Development</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-03.png')}}" alt=""></div>
                    <p>Get to know more about the topic in details</p>
                </div>
                <div class="item">
                    <h4>Discover the digital marketing trend</h4>
                    <div class="icon"><img src="{{asset('new/assets/images/service-icon-01.png')}}" alt=""></div>
                    <p>Get to know more about the topic in details</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
