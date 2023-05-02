
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('loginpublic/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginpublic/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginpublic/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginpublic/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginpublic/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginpublic/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginpublic/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginpublic/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginpublic/css/main.css')}}">
<!--===============================================================================================-->

   <!-- Include script -->
   <script type="text/javascript">
    function callbackThen(response) {

      // read Promise object
      response.json().then(function(data) {
        console.log(data);
        if(data.success && data.score >= 0.6) {
           console.log('valid recaptcha');
        } else {
           document.getElementById('contactForm').addEventListener('submit', function(event) {
              event.preventDefault();
              alert('recaptcha error');
           });
        }
      });
    }

    function callbackCatch(error){
       console.error('Error:', error)
    }
    </script>

    {!! htmlScriptTagJsApi([
       'callback_then' => 'callbackThen',
       'callback_catch' => 'callbackCatch',
    ]) !!}
</head>
<body>



    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">

                @if (session('message'))
                <div class="alert alert-warning mb-3 mt-4">
                    {{ session('message') }}
                </div>
                @endif

                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">

                        @csrf



                        <div class="wrap-input100 validate-input m-b-16 @error('name') is-invalid @enderror"  >
                            <input id="name" type="name" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>

                        <div class="wrap-input100 validate-input m-b-16 @error('email') is-invalid @enderror" data-validate="Valid email is required: ex@abc.xyz" >
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <span class="lnr lnr-envelope"></span>
                            </span>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">

                            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <span class="lnr lnr-lock"></span>
                            </span>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">

                            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <span class="lnr lnr-lock"></span>
                            </span>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="container-login100-form-btn p-t-25">
                            <button class="login100-form-btn">
                                {{ __('Register') }}
                            </button>
                        </div>



                    <div class="text-center w-full p-t-42 p-b-22">
                        <span class="txt1">
                            Or login with
                        </span>
                    </div>

                    <a href="#" class="btn-face m-b-10 text-decoration-none">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="{{route('googlelogin')}}" class="btn-google m-b-10 text-decoration-none">
                        <img src="{{ asset('loginpublic/images/icons/icon-google.png')}}" alt="GOOGLE">

                        Google
                    </a>

                    <a href="#" class="btn-face m-b-10 text-decoration-none">
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        Twitter
                    </a>

                    <a href="{{route('githublogin')}}" class="btn-google m-b-10 text-decoration-none">
                        <i class="fa fa-github-square" aria-hidden="true"> Github</i>


                    </a>


                    <div class="text-center w-full p-t-115">
                        <span class="txt1">
                            is a member?
                        </span>

                        <a class="txt1 bo1 hov1" href="{{route('login')}}">
                            Sign in now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




<!--===============================================================================================-->
    <script src="{{ asset('loginpublic/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('loginpublic/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ asset('loginpublic/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('loginpublic/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('loginpublic/js/main.js')}}"></script>

</body>
</html>



