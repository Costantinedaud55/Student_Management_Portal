<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration - UDOM SMS</title>

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
            background: #f3f4f6;
        }

        /* =========================================
           MAIN PAGE
        ========================================== */

        .register-page {
            min-height: 100vh;

            background: #f3f4f6;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 25px;
        }

        /* =========================================
           MAIN CARD
        ========================================== */

        .register-card {
            width: 100%;
            max-width: 900px;

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

        /* =========================================
           LEFT UNIVERSITY SECTION
           UNIVERSITY5 BACKGROUND
        ========================================== */

        .university-section {
            position: relative;

            min-height: 520px;

            color: #ffffff;

            display: flex;
            flex-direction: column;

            justify-content: center;
            align-items: center;

            text-align: center;

            padding: 40px 30px;

            background-image:
                linear-gradient(
                    rgba(11, 31, 75, 0.45),
                    rgba(11, 31, 75, 0.55)
                ),
                url('{{ asset('images/university/university5.jpg') }}');

            background-size: cover;

            background-position: center center;

            background-repeat: no-repeat;
        }

        /*
        Keep all content above the background
        */

        .university-section > * {
            position: relative;
            z-index: 2;
        }

        /* =========================================
           LOGO
        ========================================== */

        .logo-container {
            width: 105px;
            height: 105px;

            background: #ffffff;

            border-radius: 10px;

            padding: 5px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 20px;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.30);
        }

        .university-logo {
            display: block !important;

            width: 100% !important;
            height: 100% !important;

            max-width: none !important;
            max-height: none !important;

            object-fit: contain !important;

            border-radius: 6px;
        }

        /* =========================================
           UNIVERSITY TEXT
        ========================================== */

        .university-title {
            font-size: 24px;

            line-height: 1.25;

            font-weight: 900;

            margin: 0 0 10px 0;

            letter-spacing: 0.3px;

            text-shadow:
                0 2px 5px rgba(0, 0, 0, 0.35);
        }

        .university-subtitle {
            font-size: 17px;

            font-weight: 800;

            line-height: 1.5;

            color: #ffffff;

            margin: 0;

            text-shadow:
                0 2px 5px rgba(0, 0, 0, 0.35);
        }

        .university-note {
            margin-top: 25px;

            padding-top: 18px;

            border-top:
                1px solid rgba(255, 255, 255, 0.45);

            font-size: 13px;

            font-weight: 600;

            color: #ffffff;

            line-height: 1.6;

            max-width: 270px;

            text-shadow:
                0 2px 5px rgba(0, 0, 0, 0.35);
        }

        /* =========================================
           RIGHT REGISTER SECTION
        ========================================== */

        .register-section {
            background: #ffffff;

            padding: 38px 45px;

            display: flex;

            flex-direction: column;

            justify-content: center;
        }

        /* =========================================
           TITLE
        ========================================== */

        .register-title {
            color: #1d4ed8;

            font-size: 28px;

            font-weight: 900;

            margin: 0 0 6px 0;
        }

        .register-description {
            color: #6b7280;

            font-size: 14px;

            font-weight: 600;

            margin: 0 0 22px 0;
        }

        /* =========================================
           FORM
        ========================================== */

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;

            color: #111827;

            font-size: 14px;

            font-weight: 800;

            margin-bottom: 6px;
        }

        .input-wrapper {
            position: relative;

            width: 100%;
        }

        .form-input {
            width: 100%;

            height: 43px;

            border: 1px solid #d1d5db;

            border-radius: 7px;

            padding: 0 14px;

            font-size: 14px;

            color: #111827;

            background: #ffffff;

            outline: none;

            transition: all 0.2s ease;
        }

        .form-input:hover {
            border-color: #9ca3af;
        }

        .form-input:focus {
            border-color: #1d4ed8;

            box-shadow:
                0 0 0 3px rgba(29, 78, 216, 0.10);
        }

        .password-input {
            padding-right: 48px;
        }

        /* =========================================
           PASSWORD EYE
        ========================================== */

        .password-toggle {
            position: absolute;

            right: 11px;

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

        /* =========================================
           ERROR
        ========================================== */

        .error-message {
            color: #dc2626;

            font-size: 12px;

            font-weight: 700;

            margin-top: 5px;
        }

        /* =========================================
           ACTIONS
        ========================================== */

        .form-actions {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            margin-top: 20px;
        }

        /* =========================================
           LOGIN LINK
        ========================================== */

        .login-link {
            color: #1d4ed8;

            font-size: 14px;

            font-weight: 800;

            text-decoration: none;

            white-space: nowrap;

            cursor: pointer;
        }

        .login-link:hover {
            color: #0b1f4b;

            text-decoration: underline;
        }

        /* =========================================
           REGISTER BUTTON
        ========================================== */

        .register-button {
            height: 44px;

            padding: 0 24px;

            border: none;

            border-radius: 7px;

            background: #0b1f4b;

            color: #ffffff;

            font-size: 14px;

            font-weight: 900;

            cursor: pointer;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            transition: all 0.2s ease;

            position: relative;

            z-index: 50;
        }

        .register-button:hover {
            background: #1d4ed8;

            transform: translateY(-1px);
        }

        .register-button:active {
            transform: translateY(0);
        }

        /* =========================================
           FOOTER
        ========================================== */

        .register-footer {
            text-align: center;

            margin-top: 20px;

            padding-top: 14px;

            border-top: 1px solid #e5e7eb;

            color: #6b7280;

            font-size: 12px;

            font-weight: 600;
        }

        /* =========================================
           RESPONSIVE
        ========================================== */

        @media (max-width: 768px) {

            .register-page {
                padding: 15px;
            }

            .register-card {
                max-width: 520px;

                grid-template-columns: 1fr;
            }

            .university-section {
                min-height: 300px;

                padding: 30px 20px;
            }

            .logo-container {
                width: 80px;
                height: 80px;

                margin-bottom: 14px;
            }

            .university-title {
                font-size: 21px;
            }

            .university-subtitle {
                font-size: 15px;
            }

            .university-note {
                display: none;
            }

            .register-section {
                padding: 30px 25px;
            }
        }

        @media (max-width: 480px) {

            .register-page {
                padding: 10px;
            }

            .university-section {
                min-height: 260px;
            }

            .register-section {
                padding: 25px 20px;
            }

            .register-title {
                font-size: 24px;
            }

            .form-actions {
                flex-direction: column-reverse;

                align-items: stretch;
            }

            .login-link {
                text-align: center;

                padding: 5px;
            }

            .register-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="register-page">

    <div class="register-card">

        <!-- =========================================
             LEFT SIDE
             UNIVERSITY5 BACKGROUND
        ========================================== -->

        <div class="university-section">

            <!-- LOGO -->

            <div class="logo-container">

                <img
                    src="{{ asset('images/logos/logo3.jpg') }}"
                    alt="The University of Dodoma Logo"
                    class="university-logo"
                >

            </div>


            <!-- UNIVERSITY NAME -->

            <h1 class="university-title">
                THE UNIVERSITY OF DODOMA
            </h1>


            <!-- SYSTEM NAME -->

            <p class="university-subtitle">
                Student Management System
            </p>


            <!-- DESCRIPTION -->

            <p class="university-note">
                Create your account to access
                and manage student information
                and academic records.
            </p>

        </div>


        <!-- =========================================
             RIGHT SIDE
             REGISTER FORM
        ========================================== -->

        <div class="register-section">

            <h2 class="register-title">
                Create Account
            </h2>

            <p class="register-description">
                Register a new account to access the student system.
            </p>


            <!-- REGISTER FORM -->

            <form method="POST" action="{{ route('register') }}">

                @csrf


                <!-- ===============================
                     FULL NAME
                ================================ -->

                <div class="form-group">

                    <label
                        for="name"
                        class="form-label"
                    >
                        Full Name
                    </label>

                    <div class="input-wrapper">

                        <input
                            id="name"
                            class="form-input"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            placeholder="Enter your full name"
                        >

                    </div>

                    @error('name')

                        <div class="error-message">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- ===============================
                     EMAIL
                ================================ -->

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
                            autocomplete="username"
                            placeholder="Enter your email address"
                        >

                    </div>

                    @error('email')

                        <div class="error-message">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- ===============================
                     PASSWORD
                ================================ -->

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
                            autocomplete="new-password"
                            placeholder="Create a password"
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


                <!-- ===============================
                     CONFIRM PASSWORD
                ================================ -->

                <div class="form-group">

                    <label
                        for="password_confirmation"
                        class="form-label"
                    >
                        Confirm Password
                    </label>

                    <div class="input-wrapper">

                        <input
                            id="password_confirmation"
                            class="form-input password-input"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Confirm your password"
                        >

                        <button
                            type="button"
                            id="toggleConfirmPassword"
                            class="password-toggle"
                            title="Show password"
                            aria-label="Show password"
                        >

                            <i
                                class="fa-solid fa-eye"
                                id="confirmEyeIcon"
                            ></i>

                        </button>

                    </div>

                    @error('password_confirmation')

                        <div class="error-message">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- ===============================
                     ACTION BUTTONS
                ================================ -->

                <div class="form-actions">

                    <!-- LOGIN -->

                    <a
                        href="{{ route('login') }}"
                        class="login-link"
                    >
                        Already registered? Login
                    </a>


                    <!-- REGISTER -->

                    <button
                        type="submit"
                        class="register-button"
                    >

                        <i class="fa-solid fa-user-plus"></i>

                        Create Account

                    </button>

                </div>

            </form>


            <!-- ===============================
                 FOOTER
            ================================ -->

            <div class="register-footer">
                The University of Dodoma • Student Management System
            </div>

        </div>

    </div>

</div>


<!-- =========================================
     JAVASCRIPT
     PASSWORD SHOW / HIDE
========================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================
       PASSWORD
    ====================================== */

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


    /* =====================================
       CONFIRM PASSWORD
    ====================================== */

    const toggleConfirmPassword =
        document.getElementById('toggleConfirmPassword');

    const confirmPassword =
        document.getElementById('password_confirmation');

    const confirmEyeIcon =
        document.getElementById('confirmEyeIcon');


    if (
        toggleConfirmPassword &&
        confirmPassword &&
        confirmEyeIcon
    ) {

        toggleConfirmPassword.addEventListener(
            'click',
            function () {

                if (confirmPassword.type === 'password') {

                    confirmPassword.type = 'text';

                    confirmEyeIcon.classList.remove(
                        'fa-eye'
                    );

                    confirmEyeIcon.classList.add(
                        'fa-eye-slash'
                    );

                    toggleConfirmPassword.setAttribute(
                        'title',
                        'Hide password'
                    );

                    toggleConfirmPassword.setAttribute(
                        'aria-label',
                        'Hide password'
                    );

                } else {

                    confirmPassword.type = 'password';

                    confirmEyeIcon.classList.remove(
                        'fa-eye-slash'
                    );

                    confirmEyeIcon.classList.add(
                        'fa-eye'
                    );

                    toggleConfirmPassword.setAttribute(
                        'title',
                        'Show password'
                    );

                    toggleConfirmPassword.setAttribute(
                        'aria-label',
                        'Show password'
                    );

                }

            }
        );

    }

});

</script>

</body>

</html>