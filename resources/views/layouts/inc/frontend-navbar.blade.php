

<div class="global-navbar bg-white header-area header-sticky wow slideInDown sticky-top">
    <div class="container">
        <div class="row">
        @php
            $setting = App\Models\Settings::find(1);
        @endphp

        @if ($setting)
            <div class="col-md-3 d-none d-sm-none d-md-inline">
                <img src="{{asset('Image/setting/'.$setting->logo)}}"  width="150px" height="80px" alt="logo">
            </div>
        @endif

            <div class="col-md-9 my-auto">
                <div class="border text-center  p-2">
                    <h5>  advestire here</h5>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot">D</span>
        <div class="dots">
        <span> S</span>
        <span>A</span>
        <span>I</span>
        </div>
    </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown sticky-top" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <nav class="main-nav">

                @php
                $setting = App\Models\Settings::find(1);
            @endphp

            @if ($setting)

            <!-- ***** Logo Start ***** -->
            <a href="{{route('frontend')}}" class="logo d-none d-sm-none d-md-inline">
                <img src="{{asset('Image/setting/'.$setting->logo)}}"  width="150px" height="80px" alt="logo">
            </a>

            @endif
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav d-none d-lg-block">
                <li class="scroll-to-section"><a href="{{route('frontend')}}" class="active">Home</a></li>
                @php
                $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                @endphp
                @foreach ($categories as $cateitem)
                    <li class="scroll-to-section">
                        <a href="{{url('tutorial/'.$cateitem->slug)}}">{{$cateitem->name}}</a>
                    </li>
                @endforeach

                <li class="scroll-to-section"><a href="#services">Services</a></li>
                <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{ route('contact')}}">Contact Us Now</a></div></li>
     <!--           <li>
                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>    -->
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


