<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Management System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>

        body {
            margin: 0;
            padding: 0;
        }


        /* ==============================
           LOGIN CARD
        ============================== */

        .login-card {

            width: 710px;

            height: 700px;

            background: white;

            border: 5px solid #111827;

            border-radius: 18px;

            box-shadow:
                0 18px 45px rgba(0, 0, 0, 0.70);

            overflow: hidden;
        }


        /* ==============================
           RIGHT SIDE
        ============================== */

        .login-right {

            display: flex;

            justify-content: center;

            align-items: flex-start;

            padding: 0 35px 35px 35px;
        }


        /* ==============================
           LOGIN CONTENT
        ============================== */

        .login-form {

            width: 100%;

            max-width: 320px;

            position: relative;

            top: -65px;
        }


        /* ==============================
           STUDENT LOGIN
        ============================== */

        .student-login-title {

            color: #6b9bd1;

            font-size: 42px;

            font-weight: 900;

            line-height: 1.1;

            text-align: center;

            margin-top: 0;

            margin-bottom: 8px;
        }


        /* ==============================
           BLUE BACKGROUND GLOW
        ============================== */

        .blue-glow {

            position: absolute;

            left: 0;

            top: 0;

            width: 45%;

            height: 100%;

            background: linear-gradient(
                to right,
                rgba(0, 102, 255, 0.75),
                rgba(0, 102, 255, 0.30),
                transparent
            );

            pointer-events: none;
        }


        /* ==============================
           LOGIN BUTTON - SOFT BLUE
        ============================== */

        .login-button {

            width: 100%;

            padding: 15px;

            background: #78a9dc;

            color: #ffffff !important;

            font-size: 20px;

            font-weight: 900;

            border: 3px solid #5f8fbe;

            border-radius: 12px;

            box-shadow:
                0 5px 12px rgba(0, 0, 0, 0.20);

            cursor: pointer;

            transition: 0.2s;
        }


        .login-button:hover {

            background: #6798cc;
        }


        /* ==============================
           REGISTER BUTTON - SOFT BLUE
        ============================== */

        .register-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 12px 28px;

            background: #78a9dc;

            color: #ffffff !important;

            font-size: 18px;

            font-weight: 900;

            text-decoration: none !important;

            border: 3px solid #5f8fbe;

            border-radius: 12px;

            box-shadow:
                0 5px 12px rgba(0, 0, 0, 0.20);

            cursor: pointer;

            transition: 0.2s;
        }


        .register-button:hover {

            background: #6798cc;

            color: #ffffff !important;
        }


        /* ==============================
           DON'T HAVE ACCOUNT LINK
        ============================== */

        .register-link {

            color: #5f8fbe;

            font-size: 16px;

            font-weight: 800;

            text-decoration: none;

            cursor: pointer;

            transition: 0.2s;
        }


        .register-link:hover {

            color: #3f6f9f;

            text-decoration: underline;
        }


        /* ==============================
           INPUT
        ============================== */

        .login-input {

            width: 100%;

            box-sizing: border-box;

            padding: 14px 16px;

            font-size: 17px;

            color: #111827;

            background: #ffffff;

            border: 2px solid #6b7280;

            border-radius: 10px;

            outline: none;
        }


        .login-input:focus {

            border-color: #6b9bd1;

            box-shadow:
                0 0 0 3px rgba(107, 155, 209, 0.18);
        }

    </style>

</head>


<body>


<div
    class="
        relative
        min-h-screen
        flex
        items-center
        justify-center
        p-5
        overflow-hidden
    "
>


    <!-- ==============================
         BACKGROUND IMAGE
    ============================== -->

    <div
        class="
            absolute
            inset-0
            bg-cover
            bg-center
        "

        style="
            background-image:
            url('{{ asset('university/university5.jpg') }}');
        "
    ></div>


    <!-- ==============================
         DARK OVERLAY
    ============================== -->

    <div
        class="
            absolute
            inset-0
            bg-black/40
        "
    ></div>


    <!-- ==============================
         BLUE GLOW
    ============================== -->

    <div class="blue-glow"></div>


    <!-- ==============================
         LOGIN CARD
    ============================== -->

    <div
        class="
            login-card
            relative
            z-10
        "
    >


        <div
            class="
                grid
                grid-cols-2
                h-full
            "
        >


            <!-- ==========================
                 LEFT SIDE
            =========================== -->

            <div
                class="
                    bg-blue-800
                    text-white
                    flex
                    flex-col
                    justify-center
                    items-center
                    text-center
                    px-7
                "
            >


                <!-- LOGO -->

                <img
                    src="{{ asset('image/logos/logo4.jpg') }}"

                    alt="University Logo"

                    style="
                        width: 110px;
                        height: 110px;
                        object-fit: contain;
                        display: block;
                        margin-bottom: 25px;
                    "
                >


                <!-- UNIVERSITY NAME -->

                <h1
                    class="
                        text-2xl
                        font-extrabold
                        leading-snug
                    "
                >

                    UNIVERSITY STUDENT

                    <br>

                    MANAGEMENT SYSTEM

                </h1>


                <!-- WELCOME -->

                <h2
                    class="
                        text-2xl
                        font-bold
                        mt-10
                    "
                >

                    Welcome, Student!

                </h2>


                <p
                    class="
                        text-lg
                        text-blue-100
                        mt-3
                    "
                >

                    Login to access your account.

                </p>


            </div>


            <!-- ==========================
                 RIGHT SIDE
            =========================== -->

            <div
                class="
                    login-right
                    bg-white
                "
            >

                <div class="login-form">

                    {{ $slot }}

                </div>

            </div>


        </div>


    </div>


</div>


</body>

</html>