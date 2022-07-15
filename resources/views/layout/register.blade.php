<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
    <title>
        Absen Magang Pelindo
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('template') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('template') }}/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
    <!-- Navbar -->
    @include('layout.navbarLogin')
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Register with</h5>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <input id="nim"  class="form-control"
                                        @error('nim') is-invalid @enderror" name="nim"
                                        value="{{ old('nim') }}" placeholder="NIM" >
                                    @error('nim')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input id="name" type="text" class="form-control"
                                        @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" placeholder="Name" aria-label="Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input id="instansi" class="form-control" @error('instansi') is-invalid @enderror"
                                        name="instansi" placeholder="Instansi">
                                    @error('instansi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Enter password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Enter confirm password">
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-dark w-100 my-4 mb-2">{{ __('Register') }}</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a href="javascript:;"
                                        class="text-dark font-weight-bolder">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    {{-- <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Company
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Products
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Pricing
                    </a>
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('template') }}/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
