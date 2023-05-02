
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>test</title>

<!-- Bootstrap core CSS -->
<link href="{{ asset('new/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{ asset('new/assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{ asset('new/assets/css/templatemo-onix-digital.css')}}">
<link rel="stylesheet" href="{{ asset('new/assets/css/animated.css')}}">
<link rel="stylesheet" href="{{ asset('new/assets/css/owl.css')}}">
<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
<div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
    <span> S</span>
    <span>A</span>
    <span>I</span>
    </div>
</div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
<div class="container">
    <div class="row">
    <div class="col-12">
        <nav class="main-nav">
        <!-- ***** Logo Start ***** -->
        <a href="index.html" class="logo">
            <img src="{{asset('Image/favicon.png')}}">
        </a>
        <!-- ***** Logo End ***** -->
        <!-- ***** Menu Start ***** -->
        <ul class="nav d-none d-lg-block">
            <li class="scroll-to-section"><a href="{{route('zone')}}" class="active">Home</a></li>
            @php
            $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
            @endphp
            @foreach ($categories as $cateitem)
                <li class="scroll-to-section">
                    <a href="{{url('tutorial/'.$cateitem->slug)}}">{{$cateitem->name}}</a>
                </li>
            @endforeach

            <li class="scroll-to-section"><a href="#services">Services</a></li>
            <li class="scroll-to-section"><a href="#about">About</a></li>
            <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll-to-section"><a href="#video">Videos</a></li>
            <li class="scroll-to-section"><div class="main-red-button-hover"><a href="#contact">Contact Us Now</a></div></li>
        </ul>
        <a class='menu-trigger'>
            <span>Menu</span>
        </a>
        <!-- ***** Menu End ***** -->
        </nav>



    </div>
    </div>
</div>
</header>
<!-- ***** Header Area End ***** -->

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
                    <a href="#contact">Message me Now</a>
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
<div class="container">
    <div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
        <h2>Our Recent <em>Projects</em> &amp; Case Studies <span>for Clients</span></h2>
        <span>Our Portfolio</span>
        </div>
    </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
    <div class="col-lg-12">
        <div class="owl-carousel owl-portfolio">
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-01.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing" target="_parent"><h4>First Project</h4></a>
                <span>Plot Listing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-02.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>Project Two</h4></a>
                <span>SEO &amp; Marketing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-03.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a rel="sponsored" href="https://templatemo.com/tm-562-space-dynamic" target="_parent"><h4>Third Project</h4></a>
                <span>Space Dynamic SEO</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-04.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>Project Four</h4></a>
                <span>Website Marketing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-01.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>Fifth Project</h4></a>
                <span>Digital Assets</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-02.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>Sixth Project</h4></a>
                <span>SEO &amp; Marketing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-03.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>7th Project</h4></a>
                <span>SEO &amp; Marketing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-04.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>8th Project</h4></a>
                <span>SEO &amp; Marketing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-01.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>9th Project</h4></a>
                <span>SEO &amp; Marketing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-02.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>Project Ten</h4></a>
                <span>SEO &amp; Marketing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-03.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>Project Eleven</h4></a>
                <span>SEO &amp; Marketing</span>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="thumb">
            <img src="{{asset('new/assets/images/portfolio-04.jpg')}}" alt="">
            <div class="hover-effect">
                <div class="inner-content">
                <a href="#"><h4>12th Project</h4></a>
                <span>SEO &amp; Marketing</span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
 hhhhhhhhhhhhhhhhhhhhhhhhhh
<div class="thumb">
    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/JynGuQx4a1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="overlay-effect">
      <a href="#"><h4>Project One</h4></a>
      <span>SEO &amp; Marketing</span>
    </div>
  </div>
</div>

<div id="pricing" class="pricing-tables">
<div class="tables-left-dec">
    <img src="{{asset('new/assets/images/tables-left-dec.png')}}" alt="">
</div>
<div class="tables-right-dec">
    <img src="{{asset('new/assets/images/tables-right-dec.png')}}" alt="">
</div>
<div class="container">
    <div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
        <h2>Select a suitable <em>plan</em> for your next <span>projects</span></h2>
        <span>Our Plans</span>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4">
        <div class="item first-item">
        <h4>Starter Plan</h4>
        <em>$160/mo</em>
        <span>$140</span>
        <ul>
            <li>10 Projects</li>
            <li>100 GB space</li>
            <li>20 SEO checkups</li>
            <li>Basic Support</li>
        </ul>
        <div class="main-blue-button-hover">
            <a href="#">Get Started</a>
        </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="item second-item">
        <h4>Standard Plan</h4>
        <em>$240/mo</em>
        <span>$200</span>
        <ul>
            <li>20 Projects</li>
            <li>200 GB space</li>
            <li>50 SEO checkups</li>
            <li>Pro Support</li>
        </ul>
        <div class="main-blue-button-hover">
            <a href="#">Get it Now</a>
        </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="item third-item">
        <h4>Advanced Plan</h4>
        <em>$360/mo</em>
        <span>$280</span>
        <ul>
            <li>30 Projects</li>
            <li>300 GB space</li>
            <li>100 SEO checkups</li>
            <li>Best Support</li>
        </ul>
        <div class="main-blue-button-hover">
            <a href="#">Buy Now</a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

<div id="subscribe" class="subscribe">
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="inner-content">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            <h2>Know Your Website SEO Score by Email</h2>
            <form id="subscribe" action="" method="get">
                <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                <button type="submit" id="form-submit" class="main-button ">Subscribe</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>


<div id="contact" class="contact-us section">
<div class="container">
    <div class="row">
    <div class="col-lg-7">
        <div class="section-heading">
        <h2>Feel free to <em>Contact</em> us via the <span>HTML form</span></h2>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13190.823358534495!2d-6.628232575745663!3d34.25604897432207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda75976848e63cb%3A0xbab8bbdcdda49e50!2sMosqu%C3%A9e%20El%20Houda!5e0!3m2!1sen!2sma!4v1676066281518!5m2!1sen!2sma" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
        <div class="info">
            <span><i class="fa fa-phone"></i> <a href="#">010-020-0340<br>090-080-0760</a></span>
            <span><i class="fa fa-envelope"></i> <a href="#">info@company.com<br>mail@company.com</a></span>
        </div>
        </div>
    </div>
    <div class="col-lg-5 align-self-center">
        <form id="contact" action="" method="get">
        <div class="row">
            <div class="col-lg-12">
            <fieldset>
                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
            </fieldset>
            </div>
            <div class="col-lg-12">
            <fieldset>
                <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
            </fieldset>
            </div>
            <div class="col-lg-12">
            <fieldset>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
            </fieldset>
            </div>
            <div class="col-lg-12">
            <fieldset>
                <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
            </fieldset>
            </div>
            <div class="col-lg-12">
            <fieldset>
                <button type="submit" id="form-submit" class="main-button">Submit Request</button>
            </fieldset>
            </div>
        </div>
        </form>
    </div>
    </div>
</div>
<div class="contact-dec">
    <img src="{{ asset('new/assets/images/contact-dec.png')}}" alt="">
</div>
<div class="contact-left-dec">
    <img src="{{ asset('new/assets/images/contact-left-dec.png')}}" alt="">
</div>
</div>

<div class="footer-dec">
<img src="{{ asset('new/assets/images/footer-dec.png')}}" alt="">
</div>

<footer>
<div class="container">
    <div class="row">
    <div class="col-lg-3">
        <div class="about footer-item">
        <div class="logo">
            <a href="#"><img src="{{ asset('new/assets/images/logo.png')}}" alt="Onix Digital TemplateMo"></a>
        </div>
        <a href="#">info@company.com</a>
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="services footer-item">
        <h4>Services</h4>
        <ul>
            <li><a href="#">SEO Development</a></li>
            <li><a href="#">Business Growth</a></li>
            <li><a href="#">Social Media Managment</a></li>
            <li><a href="#">Website Optimization</a></li>
        </ul>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="community footer-item">
        <h4>Community</h4>
        <ul>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">Business Ideas</a></li>
            <li><a href="#">Website Checkup</a></li>
            <li><a href="#">Page Speed Test</a></li>
        </ul>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="subscribe-newsletters footer-item">
        <h4>Subscribe Newsletters</h4>
        <p>Get our latest news and ideas to your inbox</p>
        <form action="#" method="get">
            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
            <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane-o"></i></button>
        </form>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="copyright">
        <p>Copyright © 2021 Onix Digital Co., Ltd. All Rights Reserved.
        <br>
        Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a></p>
        </div>
    </div>
    </div>
</div>
</footer>


<!-- Scripts -->
<script src="{{ asset('new/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('new/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('new/assets/js/owl-carousel.js')}}"></script>
<script src="{{ asset('new/assets/js/animation.js')}}"></script>
<script src="{{ asset('new/assets/js/imagesloaded.js')}}"></script>
<script src="{{ asset('new/assets/js/custom.js')}}"></script>

<script>
// Acc
$(document).on("click", ".naccs .menu div", function() {
    var numberIndex = $(this).index();

    if (!$(this).is("active")) {
        $(".naccs .menu div").removeClass("active");
        $(".naccs ul li").removeClass("active");

        $(this).addClass("active");
        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

        var listItemHeight = $(".naccs ul")
        .find("li:eq(" + numberIndex + ")")
        .innerHeight();
        $(".naccs ul").height(listItemHeight + "px");
    }
});
</script>
</body>
</html>
