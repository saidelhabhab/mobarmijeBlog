

<div class="global-navbar bg-white">
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



<div class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-green navbar-dark">
            <div class="container">

                <a href="" class="navbar-brand d-inline d-sm-none d-md-none">
                    <img src="{{asset('Image/logo.png')}}" style=" width:40px" alt="logo">
                </a>

            <button class="navbar-toggler test-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('frontend')}}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                @php
                $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                @endphp
                @foreach ($categories as $cateitem)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('tutorial/'.$cateitem->slug)}}">{{$cateitem->name}}</a>
                    </li>
                @endforeach
                @if (Auth::check()  )
                <li>
                    <a class="nav-link btn-danger" href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endif

                </ul>

            </div>
            </div>
      </nav>
</div>
