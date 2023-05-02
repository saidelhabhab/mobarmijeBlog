@extends('layouts.app')


@section('title',"About-us")
@section('meta_description',"Said elhabhab")
@section('meta_keyword',"Said elhabhab")
@section('content')






<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 align-self-center">
            <div class="left-image">
            <img src="{{asset('image/said.png')}}"  alt="Two Girls working together">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="section-heading">
            <h2 class="">SAID EL-HABHAB </h2> <div class="underline"> </div> <h2> <em>FULLSTACK DEVELOPER </em> <br> &amp; <span> Management of Information Systems</span> </h2>
            <p>Graduate of the National School of Applied Sciences in the Department of Software Engineering and Information Systems Management.</p>

            <p> I am a fullstack developer, I can provide clean code and pixel perfect design, I also make the website more & more interactive with web animation,
                 A responsive design makes your website accessible to all users,
                  regardeless of their device.</p>
            <div class="row">



                <div class="col-lg-6">
                <div class="fact-item">
                    <div class="down-buttons">
                        <div class="main-red-button-hover">
                            <a href="https://github.com/saidelhabhab">My Github</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="fact-item">
                    <div class="down-buttons">
                        <div class="main-blue-button-hover">
                            <a href="{{route('contact')}}">Message me Now</a>
                        </div>
                    </div>
                </div>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
        <img src="{{asset('new/assets/images/portfolio-left-dec.png')}}" alt="">
    </div>








@endsection
