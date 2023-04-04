<footer class="bg-dark mt-3 ">

    <div class="container " style="padding-top: 20px">
        <div class="row">
        <div class="col-lg-3  text-center">
            <div class="about footer-item">
            @php
                $setting = App\Models\Settings::find(1);
            @endphp

            @if ($setting)
            <div class="logo">
                <img src="{{asset('Image/setting/'.$setting->favicon)}}"   alt="logo">
            </div>
            @endif
            <a href="https://gmail.com">saidelhabhab@gmail.com</a>

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
            <h4 class="text-primary">Services</h4>
            <div class="underline" > </div>
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
            <h4 class="text-primary">Community</h4>
            <div class="underline" > </div>
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
            <h4 class="text-primary">Subscribe Newsletters</h4>
            <div class="underline" > </div>
            <p>Get our latest news and ideas to your inbox</p>
            <form action="#" method="get">
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane-o"></i></button>
            </form>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="copyright text-center">
                <p class="mb-0 ">
                    &copy; Copyright at <a href="#" class="text-decoration-none"> Said ELHABHAB </a>
                    All right reserved.
                    Designed and Developed by Said ELHABHAB {{date('Y')}}

                </p>
            </div>
        </div>
        </div>
    </div>


    </footer>

