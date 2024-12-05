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

                    <form id="verifyOtpForm" autocomplete="off">
                        @csrf
                        <input type="hidden" name="email" id="email" value="user@example.com">
                        <input type="hidden" name="role" value="1">
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input" name="otp[0]">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input" name="otp[1]">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input" name="otp[2]">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input" name="otp[3]">
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button class="btn btn-success w-100" type="submit" id="submit">Confirm</button>
                        </div>
                    </form>
                    <div id="timer-container" class="text-center text-danger fw-bold fs-5 mt-3">
                        <span id="timer"></span>
                        <span id="otp-expired-text" style="display: none;">OTP expired. Please request a new code.</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    const email = params.get('email');
    if (email) {
        document.getElementById('email').value = email;
    }
});

$('#verifyOtpForm').on('submit', function (e) {
    e.preventDefault();
    handleFormUploadForm(
        'POST',
        '#verifyOtpForm',
        '#submit',
        "{{ route('auth.verifyotp') }}",
        "{{ route('users.login') }}"
    );
});

document.addEventListener('DOMContentLoaded', function () {
    // Existing code for the timer
    const timerElement = document.getElementById('timer');
    const resendLink = document.getElementById('resend-link');
    const otpExpiredText = document.getElementById('otp-expired-text');
    const OTP_EXPIRATION_TIME = 2 * 60 * 1000; // 2 minutes in milliseconds
    const TIMER_KEY = "otpTimerStart"; // Key for localStorage

    function startTimer() {
        const startTime = Date.now();
        localStorage.setItem(TIMER_KEY, startTime); // Save start time
        updateTimer(startTime);
    }

    function updateTimer(startTime) {
        const timerInterval = setInterval(() => {
            const elapsedTime = Date.now() - startTime;
            const remainingTime = OTP_EXPIRATION_TIME - elapsedTime;

            if (remainingTime > 0) {
                const minutes = Math.floor(remainingTime / 60000);
                const seconds = Math.floor((remainingTime % 60000) / 1000);
                timerElement.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;
            } else {
                clearInterval(timerInterval);
                timerElement.style.display = "none";
                otpExpiredText.style.display = "inline";
                resendLink.style.display = "block";
                localStorage.removeItem(TIMER_KEY); // Remove timer key
            }
        }, 1000);
    }

    // Check if the timer has already started
    const savedStartTime = localStorage.getItem(TIMER_KEY);
    if (savedStartTime) {
        const elapsedTime = Date.now() - parseInt(savedStartTime, 10);
        if (elapsedTime >= OTP_EXPIRATION_TIME) {
            timerElement.style.display = "none";
            otpExpiredText.style.display = "inline";
            resendLink.style.display = "block";
            localStorage.removeItem(TIMER_KEY); // Clear expired timer
        } else {
            updateTimer(parseInt(savedStartTime, 10)); // Continue timer
        }
    } else {
        startTimer(); // Start a new timer
    }
});

</script>
@endpush
