<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>C-Panel</title>
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
    <script src="{{asset('new/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- login area start -->
<div class="login-area login-bg">
    <div class="container">

        <div class="login-box ptb--100">
            <form action="{{route('login.submit')}}" method="POST">
                @csrf

                <div class="login-form-head">

                    <h4>Admin Panel</h4>
                    <p> The Tailors Dev</p>

                </div>
                @include('partial.session')
                <div class="login-form-body">

                    <div class="form-gp">

                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="exampleInputEmail1" name="email">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="exampleInputPassword1" name="password">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>

                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
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
