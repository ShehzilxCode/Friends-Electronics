@extends('UserUi.authlayout')
@section('item')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">

            <div class="card-body p-4">
                <div class="mb-4">
                    <div class="avatar-lg mx-auto">
                        <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                            <i class="ri-mail-line"></i>
                        </div>
                    </div>
                </div>

                <div class="p-2 mt-4">
                    <div class="text-muted text-center mb-4 mx-lg-3">
                        <h4>Verify Your Email</h4>
                        <p>Please enter the 4 digit code sent to <span class="fw-semibold"></span></p>
                    </div>

                    <form autocomplete="off">
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input">
                                </div>
                            </div><!-- end col -->
                    
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input">
                                </div>
                            </div><!-- end col -->
                    
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input">
                                </div>
                            </div><!-- end col -->
                    
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input">
                                </div>
                            </div><!-- end col -->
                        </div>
                    </form><!-- end form -->

                    <div class="mt-3">
                        <button type="button" class="btn btn-success w-100">Confirm</button>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

        <div class="mt-4 text-center">
            <p class="mb-0">Didn't receive a code ? <a href="auth-pass-reset-basic.html" class="fw-semibold text-primary text-decoration-underline">Resend</a> </p>
        </div>

    </div>
</div>
@endsection