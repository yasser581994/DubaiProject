<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign up - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('new/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('new/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- login area start -->
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">

            <form method="POST" action="{{route('register.post')}}">
                @csrf
                <div class="login-form-head">
                    @include('partial.session')
                    @include('partial.validation')

                    <h4>Sign up</h4>
                    <p>Hello there, Sign up and Join with Us</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputName1">Full Name</label>
                        <input type="text" id="exampleInputName1" name="name">
                        <i class="ti-user"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="exampleInputEmail1" name="email">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="number" id="exampleInputEmail1" name="phone">
                        <i class="ti-mobile"></i>
                        <div class="text-danger"></div>
                    </div>

                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="exampleInputPassword1" name="password">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword2">Confirm Password</label>
                        <input type="password" id="exampleInputPassword2" name="confirm_password">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Don't have an account? <a href="{{route('login')}}">Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->

<!-- jquery latest version -->
<script src="{{asset('new/js/vendor/jquery-2.2.4.min.js')}}"></script>
<!-- bootstrap 4 js -->
<script src="{{asset('new/js/popper.min.js')}}"></script>
<script src="{{asset('new/js/bootstrap.min.js')}}"></script>
<script src="{{asset('new/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('new/js/metisMenu.min.js')}}"></script>
<script src="{{asset('new/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('new/js/jquery.slicknav.min.js')}}"></script>

<!-- others plugins -->
<script src="{{asset('new/js/plugins.js')}}"></script>
<script src="{{asset('new/js/scripts.js')}}"></script>
</body>

</html>
