@extends('UserUi.authlayout');
@section('item')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Welcome Back !</h5>
                        <p class="text-muted">Sign in to continue to Velzon.</p>
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" id="loginForm">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                            </div>

                            <div class="mb-3">
                                <div class="float-end">
                                    <a href="" class="text-muted">Forgot password?</a>
                                </div>
                                <label class="form-label" for="password-input">Password</label>
                                <div class="position-relative auth-pass-inputgroup mb-3">
                                    <input type="password" name="password" class="form-control pe-5 password-input"
                                        placeholder="Enter password" id="password-input">
                                    <button
                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                        type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-success w-100" id="loginbtn" type="submit">Sign In</button>
                            </div>

                            <div class="mt-4 text-center">
                                <div class="signin-other-title">
                                    <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i
                                            class="ri-facebook-fill fs-16"></i></button>
                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i
                                            class="ri-google-fill fs-16"></i></button>
                                    <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i
                                            class="ri-github-fill fs-16"></i></button>
                                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i
                                            class="ri-twitter-fill fs-16"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="mt-4 text-center">
                <p class="mb-0">Don't have an account ? <a href="auth-signup-basic.html"
                        class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
            </div>

        </div>
    </div>
    <!-- end row -->
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();

        let formData = $(this).serialize();
        let submitButton = $('#loginbtn');

        // Disable button to prevent multiple submissions
        submitButton.attr('disabled', true).text('Logging in...');

        $.ajax({
            url: '{{ route('auth.login') }}',
            method: 'POST',
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    // Show Toastify notification
                    Toastify({
                        text: response.message || "Login successful. Redirecting...",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    }).showToast();

                    setTimeout(() => {
                        window.location.href = response.redirect_url;
                    }, 3000);
                } else {
                    Toastify({
                        text: response.message || "Something went wrong.",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #FF0000, #FF6347)",
                    }).showToast();
                }
            },
            error: function(xhr) {
                let errorResponse = xhr.responseJSON;
                Toastify({
                    text: errorResponse?.message || 'An error occurred during login.',
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "linear-gradient(to right, #FF0000, #FF6347)",
                }).showToast();
            },
            complete: function() {
                // Re-enable button
                submitButton.attr('disabled', false).text('Sign In');
            }
        });
    });
});
</script>
@endpush
