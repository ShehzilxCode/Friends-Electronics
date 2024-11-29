<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 08:49:40 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Sign Up | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../DashboardAsset/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="../DashboardAsset/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="../DashboardAsset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../DashboardAsset/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../DashboardAsset/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../DashboardAsset/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="../DashboardAsset/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Create New Account</h5>
                                    <p class="text-muted">Get your free velzon account now</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" id="register-form">
                                    @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="name">
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email address" name="email">
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        </div>
                                     

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input"  name="password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" value="1" name="role">

                                        <div class="mb-4">
                                            <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                        </div>


                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" id="submit" type="submit">Sign Up</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                            </div>

                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Already have an account ? <a href="auth-signin-basic.html" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="../DashboardAsset/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../DashboardAsset/libs/simplebar/simplebar.min.js"></script>
    <script src="../DashboardAsset/libs/node-waves/waves.min.js"></script>
    <script src="../DashboardAsset/libs/feather-icons/feather.min.js"></script>
    <script src="../DashboardAsset/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../DashboardAsset/js/plugins.js"></script>

    <!-- particles js -->
    <script src="../DashboardAsset/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="../DashboardAsset/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="../DashboardAsset/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="../DashboardAsset/js/pages/passowrd-create.init.js"></script>
        {{-- Custom JS --}}
        <script src="{{ URL::asset(' 1/js/custom/ajaxPost.js')}}"></script>
        <script src="{{ URL::asset('assets/js/custom/status-update.js')}}"></script>
        <script src="{{ URL::asset('assets/js/custom/form-upload.js')}}"></script>
        <script src="{{ URL::asset('assets/js/custom/image-preview.js')}}"></script>
        <script src="{{ URL::asset('assets/js/custom/pagination.js')}}"></script>
        <script src="{{ URL::asset('assets/js/custom/filemanager.js')}}"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('scripts')
<script>

    $(document).ready(function(){
        $('#register-form').on('submit', function(e){
            e.preventDefault();
            handleFormUploadForm(
                'POST',
                '#register-form',
                '#submit',
                "{{ route('auth.register') }}",
                "{{ route('users.login') }}"

            );
        });
    });
</script>

        
    
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 08:49:40 GMT -->
</html>