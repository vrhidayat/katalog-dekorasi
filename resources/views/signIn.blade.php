<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Best Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('theme/images/favicon.svg') }}">

    <!-- Title -->
    <title>Sign In</title>


    <!-- *************
   ************ Common Css Files *************
  ************ -->

    <!-- Animated css -->
    <link rel="stylesheet" href="{{ asset('theme/css/animate.css') }}">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="{{ asset('theme/fonts/bootstrap/bootstrap-icons.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('theme/css/main.min.css') }}">


</head>

<body class="login-container">

    <!-- Loading wrapper start -->
    <!-- <div id="loading-wrapper">
   <div class="spinner">
                <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
    <div class="line4"></div>
    <div class="line5"></div>
    <div class="line6"></div>
            </div>
  </div> -->
    <!-- Loading wrapper end -->

    <!-- Login box start -->
    <form action="{{ route('sign.proccess') }}" method="POST">
        @csrf
        @if (session()->has('error'))
            {{ session()->get('error') }}<br />
        @endif
        <div class="login-box">
            <div class="login-form">
                <a href="index.html" class="login-logo">
                    <img src="{{ asset('theme/images/logo.svg') }}" alt="Vico Admin" />
                </a>
                <div class="login-welcome">
                    Welcome back, <br />Please login to your admin account.
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="Username" class="form-control">
                    <small>
                        @error('Username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </small>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label">Password</label>
                        <a href="forgot-password.html" class="btn-link ml-auto">Forgot Password?</a>
                    </div>
                    <input type="password" name="Password" class="form-control">
                    <small>
                        @error('Password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </small>
                </div>
                <div class="login-form-actions">
                    <button type="submit" class="btn"> <span class="icon"> <i
                                class="bi bi-arrow-right-circle"></i> </span>
                        Login</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Login box end -->

    <!-- *************
   ************ Required JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/js/modernizr.js') }}"></script>
    <script src="{{ asset('theme/js/moment.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Main Js Required -->
    <script src="{{ asset('theme/js/main.js') }}"></script>

</body>

</html>
