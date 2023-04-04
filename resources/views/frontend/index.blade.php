@extends('layouts.app')


@section('title',"$setting->meta_title")
@section('meta_description',"$setting->description")
@section('meta_keyword',"$setting->meta_keyword")
@section('content')




<div class="main-banner" id="top">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="owl-carousel owl-banner">
                <div class="item header-text">
                    <h6>Welcome</h6>
                    <h2>Build <em>your website</em> By <span>Said ELHABHAB</span></h2>
                    <p>This is a professional looking HTML Bootstrap 5 website template brought to you by me.</p>
                    <div class="down-buttons">
                    <div class="main-blue-button-hover">
                        <a href="{{route('contact')}}">Message me Now</a>
                    </div>
                    <div class="call-button">
                        <a href="#"><i class="fa fa-phone"></i> +2126-03676440</a>
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


<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 align-self-center">
            <div class="left-image">
            <img src="{{asset('new/assets/images/about-left-image.png')}}" alt="Two Girls working together">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="section-heading">
            <h2>Grow your website with our <em>SEO Tools</em> &amp; <span>Project</span> Management</h2>
            <p>You can browse the website and explore the latest websites for your projects.</p>
            <div class="row">
                <div class="col-lg-4">
                <div class="fact-item">
                    <div class="count-area-content">
                    <div class="icon">
                        <img src="{{asset('new/assets/images/service-icon-01.png')}}" alt="">
                    </div>
                    <div class="count-digit">320</div>
                    <div class="count-title">SEO Projects</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="fact-item">
                    <div class="count-area-content">
                    <div class="icon">
                        <img src="{{asset('new/assets/images/service-icon-02.png')}}" alt="">
                    </div>
                    <div class="count-digit">640</div>
                    <div class="count-title">Websites</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="fact-item">
                    <div class="count-area-content">
                    <div class="icon">
                        <img src="{{asset('new/assets/images/service-icon-03.png')}}" alt="">
                    </div>
                    <div class="count-digit">120</div>
                    <div class="count-title">Satisfied Clients</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
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

<div class="bg py-8 p-10" style="background-color: #e6f2ff ; padding-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein" bis_skin_checked="1">
                    <ul class="slider-container py-4">
                        @foreach ($all_Post as $itemAll_Post)


                        <li class="slide-visible">
                            <div class="card shadow h-100" bis_skin_checked="1">
                                <div class="ratio ratio-16x9" bis_skin_checked="1">
                                    <img src="{{asset('Image/post/'.$itemAll_Post->image)}}" class="card-img-top" loading="lazy" alt="...">
                                </div>
                                <div class="card-body p-3 p-xl-5" bis_skin_checked="1">
                                    <h3 class="card-title h5">{{$itemAll_Post->name}}</h3>
                                    <p class="card-text"> {{ strip_tags(substr($itemAll_Post->description,0,350))}}</p>
                                    <div bis_skin_checked="1">
                                        <a href="{{url('tutorial/'.$itemAll_Post->category->slug.'/'.$itemAll_Post->slug)}}" class="btn btn-primary float-end">Show more </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @endforeach
                    </ul>

                    <button type="button" class="slider-nav" aria-label="Go left"></button>
                    <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

                    <div class="slider-indicators" bis_skin_checked="1">
                        <button class="" aria-label="Go to slide"></button>
                        <button aria-label="Go to slide" class="active"></button>
                        <button aria-label="Go to slide"></button>
                        <button aria-label="Go to slide"></button>
                        <button aria-label="Go to slide"></button>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>



<div id="services" class="our-services section">
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
            <h2>We <em>Provide</em> The Best Service With <span>Our Tools</span></h2>
            <span>Our Services</span>
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






<div class="py-1 bg-secondary">
    <div class="container">
        <div class="text-center p-3">
            <h3> ads here</h3>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4> Said ELHABHAB</h4>
                <div class="underline">
                </div>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum praesentium iusto nesciunt dolores obcaecati culpa dolore quae quaerat, tempora itaque laborum tenetur? Aut voluptatem voluptate, natus earum culpa quasi fugit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum praesentium iusto nesciunt dolores obcaecati culpa dolore quae quaerat, tempora itaque laborum tenetur? Aut voluptatem voluptate, natus earum culpa quasi fugit.
                    </p>
            </div>
        </div>
    </div>
</div>

<div class="py-4 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4> all Category </h4>
                <div class="underline">
                </div>
            </div>

                @foreach ($all_Catogory as $all_CatogoryItem )
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="{{ url('tutorial/'.$all_CatogoryItem->slug)}}" class="text-decoration-none">
                                <h4 class="text-dark -mb-0"> {{$all_CatogoryItem->name}}</h4>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4> last Post </h4>
                <div class="underline">
                </div>
            </div>
            <div class="col-md-8">
                @foreach ($all_Post as $all_PostItem2 )

                    <div class="card mb-3 bg-gray shadow">
                        <div class="card-body">
                            <a href="{{ url('tutorial/'.$all_PostItem2->category->slug.'/'.$all_PostItem2->slug)}}" class="text-decoration-none">
                                <h4 class="text-dark -mb-0"> {{$all_PostItem2->name}}</h4>
                            </a>
                            <h6> Post on : {{$all_PostItem2->created_at->format('d-m-Y') }}
                            </h6>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="col-md-4">
                <div class="border text-center p-3">
                    <h4> ads</h4>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
