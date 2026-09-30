<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The University of Dodoma</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        /* =========================
           GENERAL
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;

            background-color: #eef6ff;

            color: #1e293b;

            min-height: 100vh;

            position: relative;
        }


        /* =========================
           BACKGROUND IMAGE GLOW
        ========================= */

        body::before {
            content: "";

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background-image:
                linear-gradient(
                    120deg,
                    rgba(255,255,255,0.62),
                    rgba(219,234,254,0.48),
                    rgba(255,255,255,0.62)
                ),
                url('/images/university/university1.jpg');

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

            z-index: -2;

            transform: scale(1.02);
        }


        /* =========================
           BACKGROUND GLOW EFFECT
        ========================= */

        body::after {
            content: "";

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background:
                radial-gradient(
                    circle at 50% 35%,
                    rgba(255,255,255,0.70) 0%,
                    rgba(255,255,255,0.38) 30%,
                    rgba(37,99,235,0.12) 65%,
                    rgba(15,47,90,0.18) 100%
                );

            z-index: -1;

            pointer-events: none;
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            width: 100%;

            background: rgba(255,255,255,0.94);

            min-height: 95px;

            padding: 12px 5%;

            display: flex;

            align-items: center;

            justify-content: center;

            border-bottom: 1px solid #dbe3ef;

            box-shadow:
                0 4px 20px rgba(15,23,42,0.14);

            position: relative;

            z-index: 10;
        }


        /* =========================
           LOGO
        ========================= */

        .brand {
            display: flex;

            align-items: center;

            gap: 15px;
        }

        .brand img {
            width: 72px;

            height: 72px;

            object-fit: contain;

            border-radius: 10px;

            background: white;

            padding: 3px;

            box-shadow:
                0 4px 15px rgba(37,99,235,0.20);
        }


        /* =========================
           HEADER TITLE
        ========================= */

        .brand-text h2 {
            color: #123c73;

            font-size: 30px;

            font-weight: 800;

            line-height: 1.2;
        }

        .brand-text p {
            margin-top: 5px;

            font-size: 16px;

            color: #64748b;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            text-align: center;

            padding: 55px 5% 45px;

            background:
                rgba(255,255,255,0.68);

            backdrop-filter: blur(2px);

            box-shadow:
                inset 0 -10px 30px rgba(255,255,255,0.25);
        }


        /* GRADUATION CAP */

        .graduation-icon {
            font-size: 58px;

            color: #123c73;

            margin-bottom: 10px;

            filter:
                drop-shadow(
                    0 4px 8px rgba(37,99,235,0.25)
                );
        }


        /* =========================
           UNIVERSITY TITLE
        ========================= */

        .hero h1 {
            font-size: 48px;

            font-weight: 900;

            color: #123c73;

            letter-spacing: 1px;

            text-align: center;

            text-transform: uppercase;

            text-shadow:
                0 3px 10px rgba(255,255,255,0.90);
        }


        /* =========================
           SYSTEM TITLE
        ========================= */

        .hero h3 {
            margin-top: 13px;

            font-size: 25px;

            color: #2563eb;

            font-weight: 700;
        }


        .hero p {
            max-width: 850px;

            margin: 15px auto 0;

            font-size: 19px;

            line-height: 1.7;

            color: #334155;

            text-shadow:
                0 1px 5px rgba(255,255,255,0.80);
        }


        /* =========================
           UNIVERSITY IMAGE BOXES
        ========================= */

        .university-images {
            width: 90%;

            max-width: 1250px;

            margin: 30px auto 50px;

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 25px;
        }


        /* BOX */

        .university-card {
            position: relative;

            height: 350px;

            overflow: hidden;

            border-radius: 18px;

            background: white;

            box-shadow:
                0 10px 30px rgba(15,23,42,0.22);
        }


        /* IMAGE FILLS BOX */

        .university-card img {
            width: 100%;

            height: 100%;

            display: block;

            object-fit: cover;

            object-position: center;

            transition:
                transform 0.4s ease,
                filter 0.4s ease;

            filter:
                brightness(1.08)
                contrast(1.04)
                saturate(1.08);
        }


        .university-card:hover img {
            transform: scale(1.04);

            filter:
                brightness(1.15)
                contrast(1.05)
                saturate(1.12);
        }


        /* IMAGE TITLE */

        .image-label {
            position: absolute;

            left: 0;
            right: 0;
            bottom: 0;

            padding: 25px 20px 20px;

            color: white;

            font-size: 23px;

            font-weight: 800;

            text-align: center;

            background:
                linear-gradient(
                    transparent,
                    rgba(0,0,0,0.82)
                );
        }


        /* =========================
           INFORMATION
        ========================= */

        .info-section {
            width: 90%;

            max-width: 1100px;

            margin: 0 auto 45px;

            padding: 35px;

            text-align: center;

            background:
                rgba(255,255,255,0.94);

            border-radius: 18px;

            box-shadow:
                0 8px 25px rgba(15,23,42,0.12);
        }

        .info-section h2 {
            font-size: 31px;

            color: #123c73;

            margin-bottom: 15px;
        }

        .info-section p {
            font-size: 18px;

            line-height: 1.8;

            color: #475569;
        }


        /* =========================
           FEATURES
        ========================= */

        .features {
            width: 90%;

            max-width: 1100px;

            margin: 0 auto 50px;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 22px;
        }


        .feature-card {
            background:
                rgba(255,255,255,0.96);

            padding: 30px 22px;

            border-radius: 15px;

            text-align: center;

            box-shadow:
                0 7px 20px rgba(15,23,42,0.12);

            border-top: 4px solid #2563eb;
        }


        .feature-card i {
            font-size: 38px;

            color: #2563eb;

            margin-bottom: 15px;

            filter:
                drop-shadow(
                    0 3px 7px rgba(37,99,235,0.20)
                );
        }


        .feature-card h3 {
            font-size: 21px;

            color: #123c73;

            margin-bottom: 10px;
        }


        .feature-card p {
            font-size: 16px;

            line-height: 1.6;

            color: #64748b;
        }


        /* =========================
           CTA
        ========================= */

        .cta {
            width: 90%;

            max-width: 1100px;

            margin: 0 auto 50px;

            text-align: center;

            background:
                linear-gradient(
                    135deg,
                    rgba(18,60,115,0.97),
                    rgba(37,99,235,0.94)
                );

            color: white;

            padding: 45px 25px 48px;

            border-radius: 18px;

            box-shadow:
                0 12px 30px rgba(15,23,42,0.25);
        }


        .cta h2 {
            font-size: 31px;

            margin-bottom: 12px;
        }


        .cta p {
            font-size: 18px;

            margin-bottom: 28px;
        }


        /* =========================
           LOGIN & REGISTER BUTTONS
        ========================= */

        .cta-buttons {
            display: flex;

            justify-content: center;

            align-items: center;

            gap: 18px;
        }


        .cta-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 10px;

            min-width: 170px;

            padding: 15px 30px;

            border-radius: 9px;

            text-decoration: none;

            font-size: 18px;

            font-weight: 700;

            transition: all 0.25s ease;
        }


        /* LOGIN */

        .cta-login {
            background: white;

            color: #123c73;

            border: 2px solid white;

            box-shadow:
                0 5px 15px rgba(0,0,0,0.18);
        }


        .cta-login:hover {
            background: #eaf1ff;

            transform: translateY(-3px);

            box-shadow:
                0 8px 20px rgba(0,0,0,0.22);
        }


        /* REGISTER */

        .cta-register {
            background: transparent;

            color: white;

            border: 2px solid white;
        }


        .cta-register:hover {
            background: white;

            color: #123c73;

            transform: translateY(-3px);
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background:
                rgba(15,47,90,0.97);

            color: white;

            text-align: center;

            padding: 25px 15px;

            font-size: 16px;
        }


        footer strong {
            color: white;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 800px) {

            .header {
                min-height: 90px;

                padding: 15px;
            }


            .brand {
                justify-content: center;

                text-align: center;
            }


            .brand img {
                width: 62px;

                height: 62px;
            }


            .brand-text h2 {
                font-size: 24px;

                line-height: 1.2;
            }


            .brand-text p {
                font-size: 14px;
            }


            .hero {
                padding-top: 40px;
            }


            .hero h1 {
                font-size: 32px;
            }


            .hero h3 {
                font-size: 21px;
            }


            .hero p {
                font-size: 17px;
            }


            .university-images {
                grid-template-columns: 1fr;
            }


            .university-card {
                height: 300px;
            }


            .features {
                grid-template-columns: 1fr;
            }


            .info-section h2 {
                font-size: 26px;
            }


            .cta h2 {
                font-size: 26px;
            }


            .cta-buttons {
                flex-direction: column;

                gap: 14px;
            }


            .cta-btn {
                width: 100%;

                max-width: 280px;
            }

        }

    </style>
</head>


<body>


    <!-- =====================================
         HEADER
    ====================================== -->

    <header class="header">

        <!-- LOGO -->

        <div class="brand">

            <img
                src="/images/logos/logo3.jpg"
                alt="The University of Dodoma Logo">

            <div class="brand-text">

                <h2>
                    Student Management System
                </h2>

                <p>
                    Academic Management Portal
                </p>

            </div>

        </div>

    </header>



    <!-- =====================================
         HERO
    ====================================== -->

    <section class="hero">

        <!-- GRADUATION CAP -->

        <div class="graduation-icon">
            🎓
        </div>


        <!-- MAIN TITLE -->

        <h1>
            THE UNIVERSITY OF DODOMA
        </h1>


        <h3>
            Student Management System
        </h3>


        <p>
            Manage student information, academic records and
            university activities through a simple and modern
            academic management system.
        </p>

    </section>



    <!-- =====================================
         UNIVERSITY IMAGE BOXES
    ====================================== -->

    <section class="university-images">

        <!-- BOX 1 -->

        <div class="university-card">

            <img
                src="/images/dashboard/dashboard3.jpg"
                alt="The University of Dodoma">

            <div class="image-label">
                The University of Dodoma
            </div>

        </div>


        <!-- BOX 2 -->

        <div class="university-card">

            <img
                src="/images/dashboard/dashboard4.jpg"
                alt="University Campus">

            <div class="image-label">
                University Campus
            </div>

        </div>

    </section>



    <!-- =====================================
         INFORMATION
    ====================================== -->

    <section class="info-section">

        <h2>
            Academic Management System
        </h2>

        <p>
            This system provides an organized platform for managing
            student information and academic records. Users can
            register students, view student details, update records
            and manage information efficiently.
        </p>

    </section>



    <!-- =====================================
         FEATURES
    ====================================== -->

    <section class="features">

        <div class="feature-card">

            <i class="fa-solid fa-user-graduate"></i>

            <h3>
                Student Management
            </h3>

            <p>
                Register, view, update and manage student information
                in one place.
            </p>

        </div>


        <div class="feature-card">

            <i class="fa-solid fa-database"></i>

            <h3>
                Academic Records
            </h3>

            <p>
                Keep student information organized and easily
                accessible.
            </p>

        </div>


        <div class="feature-card">

            <i class="fa-solid fa-shield-halved"></i>

            <h3>
                Secure Access
            </h3>

            <p>
                Authorized users can securely access the academic
                management system.
            </p>

        </div>

    </section>



    <!-- =====================================
         CALL TO ACTION
    ====================================== -->

    <section class="cta">

        <h2>
            Ready to Get Started?
        </h2>

        <p>
            Login to the system or create a new account to continue.
        </p>


        <!-- LOGIN / REGISTER -->

        <div class="cta-buttons">

            <a
                href="{{ route('login') }}"
                class="cta-btn cta-login">

                <i class="fa-solid fa-right-to-bracket"></i>

                Login

            </a>


            <a
                href="{{ route('register') }}"
                class="cta-btn cta-register">

                <i class="fa-solid fa-user-plus"></i>

                Register

            </a>

        </div>

    </section>



    <!-- =====================================
         FOOTER
    ====================================== -->

    <footer>

        <p>

            © {{ date('Y') }}

            <strong>
                The University of Dodoma
            </strong>

            Student Management System.
            All Rights Reserved.

        </p>

    </footer>


</body>

</html>