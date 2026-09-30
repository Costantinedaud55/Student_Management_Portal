<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Login - UDOM SMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
        }

        /* ================================
           BACKGROUND
        ================================= */

        .login-page {
            min-height: 100vh;

            background-image:
                linear-gradient(
                    rgba(0, 0, 0, 0.25),
                    rgba(0, 0, 0, 0.35)
                ),
                url('{{ asset('images/university/university5.jpg') }}');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 25px;
        }

        /* ================================
           LOGIN CARD
        ================================= */

        .login-card {
            width: 100%;
            max-width: 850px;

            min-height: 450px;

            background: #ffffff;

            border-radius: 14px;

            overflow: hidden;

            display: grid;
            grid-template-columns: 45% 55%;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.30);

            position: relative;
            z-index: 10;
        }

        /* ================================
           UNIVERSITY SECTION
        ================================= */

        .university-section {
            background: #0b1f4b;

            color: #ffffff;

            display: flex;
            flex-direction: column;

            justify-content: center;
            align-items: center;

            text-align: center;

            padding: 35px 25px;
        }

        .university-logo {
            width: 95px;
            height: 95px;

            object-fit: cover;

            border-radius: 8px;

            background: #ffffff;

            padding: 4px;

            margin-bottom: 20px;

            box-shadow:
                0 8px 20px rgba(0, 0, 0, 0.25);
        }

        .university-title {
            font-size: 25px;
            line-height: 1.25;

            font-weight: 900;

            margin: 0 0 10px 0;

            letter-spacing: 0.3px;
        }

        .university-subtitle {
            font-size: 17px;

            font-weight: 700;

            line-height: 1.5;

            margin: 0;

            color: #dbeafe;
        }

        /* ================================
           LOGIN SECTION
        ================================= */

        .login-section {
            background: #ffffff;

            padding: 40px 45px;

            display: flex;
            flex-direction: column;

            justify-content: center;
        }

        .login-title {
            color: #1d4ed8;

            font-size: 28px;

            font-weight: 900;

            margin: 0 0 7px 0;
        }

        .login-description {
            color: #6b7280;

            font-size: 14px;

            font-weight: 600;

            margin: 0 0 25px 0;
        }

        /* ================================
           FORM
        ================================= */

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;

            color: #111827;

            font-size: 14px;

            font-weight: 800;

            margin-bottom: 7px;
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;

            height: 45px;

            border: 1px solid #d1d5db;

            border-radius: 7px;

            padding: 0 14px;

            font-size: 14px;

            color: #111827;

            background: #ffffff;

            outline: none;

            transition: 0.2s;
        }

        .form-input:focus {
            border-color: #1d4ed8;

            box-shadow:
                0 0 0 3px rgba(29, 78, 216, 0.10);
        }

        /* ================================
           PASSWORD
        ================================= */

        .password-input {
            padding-right: 48px;
        }

        .password-toggle {
            position: absolute;

            right: 12px;
            top: 50%;

            transform: translateY(-50%);

            border: none;

            background: transparent;

            color: #6b7280;

            cursor: pointer;

            font-size: 16px;

            padding: 5px;

            z-index: 20;
        }

        .password-toggle:hover {
            color: #1d4ed8;
        }

        /* ================================
           REMEMBER / FORGOT
        ================================= */

        .form-options {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-top: 5px;

            margin-bottom: 20px;

            font-size: 13px;
        }

        .remember-section {
            display: flex;

            align-items: center;

            gap: 7px;

            color: #4b5563;

            font-weight: 600;
        }

        .remember-section input {
            width: 15px;
            height: 15px;

            accent-color: #1d4ed8;

            cursor: pointer;
        }

        .forgot-link {
            color: #1d4ed8;

            font-weight: 800;

            text-decoration: none;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        /* ================================
           LOGIN BUTTON
        ================================= */

        .login-button {
            width: 100%;

            height: 45px;

            border: none;

            border-radius: 7px;

            background: #0b1f4b;

            color: #ffffff;

            font-size: 15px;

            font-weight: 900;

            cursor: pointer;

            transition: 0.2s;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 9px;

            position: relative;

            z-index: 50;
        }

        .login-button:hover {
            background: #1d4ed8;

            transform: translateY(-1px);
        }

        /* ================================
           REGISTER AREA
           WHOLE AREA IS CLICKABLE
        ================================= */

        .register-area {
            display: block !important;

            width: 100% !important;

            text-align: center !important;

            margin-top: 18px !important;

            padding: 8px !important;

            color: #4b5563 !important;

            font-size: 14px !important;

            font-weight: 800 !important;

            text-decoration: none !important;

            cursor: pointer !important;

            position: relative !important;

            z-index: 9999 !important;

            pointer-events: auto !important;

            background: transparent !important;
        }

        .register-area span {
            color: #1d4ed8 !important;

            font-weight: 900 !important;

            text-decoration: underline !important;

            margin-left: 4px;
        }

        .register-area:hover {
            color: #0b1f4b !important;
        }

        .register-area:hover span {
            color: #0b1f4b !important;
        }

        /* ================================
           VALIDATION / ERROR
        ================================= */

        .error-message {
            color: #dc2626;

            font-size: 12px;

            font-weight: 700;

            margin-top: 5px;
        }

        .status-message {
            background: #eff6ff;

            border: 1px solid #bfdbfe;

            color: #1e40af;

            padding: 10px 12px;

            border-radius: 6px;

            font-size: 13px;

            font-weight: 700;

            margin-bottom: 18px;
        }

        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 768px) {

            .login-page {
                padding: 15px;
            }

            .login-card {
                max-width: 500px;

                grid-template-columns: 1fr;
            }

            .university-section {
                padding: 25px 20px;
            }

            .university-logo {
                width: 75px;
                height: 75px;

                margin-bottom: 12px;
            }

            .university-title {
                font-size: 21px;
            }

            .university-subtitle {
                font-size: 15px;
            }

            .login-section {
                padding: 30px 25px;
            }
        }

        @media (max-width: 480px) {

            .login-page {
                padding: 10px;
            }

            .login-section {
                padding: 25px 20px;
            }

            .login-title {
                font-size: 24px;
            }

            .form-options {
                flex-direction: column;

                align-items: flex-start;

                gap: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="login-page">

        <div class="login-card">

            <!-- =================================
                 LEFT: UNIVERSITY INFORMATION
            ================================== -->

            <div class="university-section">

                <img
                    src="{{ asset('images/logos/logo3.jpg') }}"
                    alt="The University of Dodoma Logo"
                    class="university-logo"
                >

                <h1 class="university-title">
                    THE UNIVERSITY OF DODOMA
                </h1>

                <p class="university-subtitle">
                    Student Management System
                </p>

            </div>


            <!-- =================================
                 RIGHT: LOGIN FORM
            ================================== -->

            <div class="login-section">

                <h2 class="login-title">
                    Student Login
                </h2>

                <p class="login-description">
                    Login to access your student management system.
                </p>


                <!-- SESSION STATUS -->

                @if (session('status'))

                    <div class="status-message">
                        {{ session('status') }}
                    </div>

                @endif


                <!-- LOGIN FORM -->

                <form method="POST" action="{{ route('login') }}">

                    @csrf


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label
                            for="email"
                            class="form-label"
                        >
                            Email Address
                        </label>

                        <div class="input-wrapper">

                            <input
                                id="email"
                                class="form-input"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Enter your email"
                            >

                        </div>

                        @error('email')

                            <div class="error-message">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label
                            for="password"
                            class="form-label"
                        >
                            Password
                        </label>

                        <div class="input-wrapper">

                            <input
                                id="password"
                                class="form-input password-input"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Enter your password"
                            >

                            <button
                                type="button"
                                id="togglePassword"
                                class="password-toggle"
                                title="Show password"
                                aria-label="Show password"
                            >
                                <i
                                    class="fa-solid fa-eye"
                                    id="eyeIcon"
                                ></i>
                            </button>

                        </div>

                        @error('password')

                            <div class="error-message">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <!-- REMEMBER + FORGOT PASSWORD -->

                    <div class="form-options">

                        <label class="remember-section">

                            <input
                                type="checkbox"
                                name="remember"
                                id="remember_me"
                            >

                            <span>
                                Remember me
                            </span>

                        </label>


                        @if (Route::has('password.request'))

                            <a
                                href="{{ route('password.request') }}"
                                class="forgot-link"
                            >
                                Forgot Password?
                            </a>

                        @endif

                    </div>


                    <!-- LOGIN BUTTON -->

                    <button
                        type="submit"
                        class="login-button"
                    >

                        <i class="fa-solid fa-right-to-bracket"></i>

                        Login

                    </button>

                </form>


                <!-- =================================
                     REGISTER LINK
                     WHOLE TEXT IS CLICKABLE
                ================================== -->

                @if (Route::has('register'))

                    <a
                        href="{{ route('register') }}"
                        class="register-area"
                    >
                        Don't have an account?

                        <span>
                            Register Now
                        </span>

                    </a>

                @endif

            </div>

        </div>

    </div>


    <!-- =================================
         PASSWORD SHOW / HIDE SCRIPT
    ================================== -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const togglePassword =
                document.getElementById('togglePassword');

            const password =
                document.getElementById('password');

            const eyeIcon =
                document.getElementById('eyeIcon');


            if (togglePassword && password && eyeIcon) {

                togglePassword.addEventListener('click', function () {

                    if (password.type === 'password') {

                        password.type = 'text';

                        eyeIcon.classList.remove('fa-eye');

                        eyeIcon.classList.add('fa-eye-slash');

                        togglePassword.setAttribute(
                            'title',
                            'Hide password'
                        );

                        togglePassword.setAttribute(
                            'aria-label',
                            'Hide password'
                        );

                    } else {

                        password.type = 'password';

                        eyeIcon.classList.remove('fa-eye-slash');

                        eyeIcon.classList.add('fa-eye');

                        togglePassword.setAttribute(
                            'title',
                            'Show password'
                        );

                        togglePassword.setAttribute(
                            'aria-label',
                            'Show password'
                        );
                    }

                });

            }

        });

    </script>

</body>

</html>