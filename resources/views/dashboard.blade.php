
<x-app-layout>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f3f8fd;
            color: #1f2937;
            font-family: Arial, Helvetica, sans-serif;
        }

        .dashboard-wrapper {
            min-height: 100vh;
            background: #f3f8fd;
        }

        /* =========================
           HEADER
        ========================== */

        .top-header {
            position: relative;
            height: 85px;
            background: #eef6ff;
            border-bottom: 1px solid #c9def2;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 80px;
            box-shadow: 0 3px 15px rgba(33, 103, 177, 0.10);
        }

        .menu-button {
            position: absolute;
            left: 20px;
            top: 20px;
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 9px;
            background: #dcecff;
            color: #1261a8;
            font-size: 25px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
        }

        .menu-button:hover {
            background: #c8e0f8;
            color: #0d4f8c;
        }

        /* =========================
           LOGO + UNIVERSITY TITLE
        ========================== */

        .header-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
        }

        .header-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            border-radius: 50%;
            background: #ffffff;
            padding: 3px;
            border: 2px solid #c6def5;
            box-shadow: 0 3px 10px rgba(33, 103, 177, 0.12);
        }

        .university-title {
            margin: 0;
            color: #1261a8;
            font-size: 29px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        /* =========================
           SIDE MENU
        ========================== */

        .side-menu {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100vh;
            background: #ffffff;
            z-index: 1000;
            padding: 25px 18px;
            box-shadow: 5px 0 25px rgba(33, 103, 177, 0.15);
            transition: left 0.3s ease;
        }

        .side-menu.active {
            left: 0;
        }

        .menu-title {
            color: #1261a8;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 25px;
            padding: 10px 12px;
            border-bottom: 2px solid #d7e9fa;
        }

        .menu-link {
            display: block;
            text-decoration: none;
            color: #374151;
            padding: 14px 15px;
            border-radius: 9px;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 600;
            transition: 0.2s;
        }

        .menu-link:hover,
        .menu-link.active {
            background: #e4f1ff;
            color: #1261a8;
        }

        .menu-logout {
            width: 100%;
            border: none;
            background: #fff1f1;
            color: #c62828;
            padding: 14px 15px;
            border-radius: 9px;
            margin-top: 10px;
            text-align: left;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
        }

        .menu-logout:hover {
            background: #ffe0e0;
        }

        .menu-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.25);
            z-index: 999;
            display: none;
        }

        .menu-overlay.active {
            display: block;
        }

        /* =========================
           MAIN CONTENT
        ========================== */

        .main-content {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 35px 25px 50px;
        }

        /* =========================
           WELCOME CARD
        ========================== */

        .welcome-card {
            background: #ffffff;
            border: 1px solid #cfe3f7;
            border-left: 5px solid #2167b1;
            border-radius: 16px;
            padding: 35px;
            margin-bottom: 25px;
            box-shadow: 0 8px 25px rgba(33, 103, 177, 0.09);
        }

        .welcome-card h2 {
            margin: 0 0 10px;
            color: #1261a8;
            font-size: 30px;
            font-weight: 800;
        }

        .welcome-card p {
            margin: 0;
            color: #667085;
            font-size: 16px;
            line-height: 1.7;
        }

        .welcome-actions {
            display: flex;
            gap: 12px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        .primary-button,
        .secondary-button {
            display: inline-block;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: 700;
            transition: 0.2s;
        }

        .primary-button {
            background: #2167b1;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(33, 103, 177, 0.20);
        }

        .primary-button:hover {
            background: #125894;
        }

        .secondary-button {
            background: #e4f1ff;
            color: #1261a8;
            border: 1px solid #c6def5;
        }

        .secondary-button:hover {
            background: #d3e8fb;
        }

        /* =========================
           STATISTICS
        ========================== */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: #ffffff;
            border: 1px solid #cfe3f7;
            border-top: 4px solid #5b9bd5;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 6px 20px rgba(33, 103, 177, 0.07);
        }

        .stat-label {
            color: #667085;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .stat-number {
            color: #1261a8;
            font-size: 30px;
            font-weight: 800;
        }

        /* =========================
           ACCOUNT
        ========================== */

        .account-card {
            background: #ffffff;
            border: 1px solid #cfe3f7;
            border-left: 4px solid #5b9bd5;
            border-radius: 14px;
            padding: 28px;
            margin-bottom: 25px;
            box-shadow: 0 6px 20px rgba(33, 103, 177, 0.07);
        }

        .account-card h3 {
            margin: 0 0 7px;
            color: #1261a8;
            font-size: 21px;
        }

        .account-card p {
            margin: 0 0 20px;
            color: #667085;
        }

        .account-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .account-item {
            background: #f3f8fd;
            border: 1px solid #d7e9fa;
            border-radius: 10px;
            padding: 15px;
        }

        .account-item span {
            display: block;
            color: #7a8798;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .account-item strong {
            color: #374151;
            font-size: 15px;
        }

        /* =========================
           QUICK ACTIONS
        ========================== */

        .section-title {
            color: #1261a8;
            font-size: 22px;
            font-weight: 800;
            margin: 0 0 15px;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 35px;
        }

        .quick-card {
            background: #ffffff;
            border: 1px solid #cfe3f7;
            border-top: 3px solid #d0e5fa;
            border-radius: 14px;
            padding: 22px;
            text-decoration: none;
            box-shadow: 0 6px 20px rgba(33, 103, 177, 0.06);
            transition: 0.2s;
        }

        .quick-card:hover {
            transform: translateY(-2px);
            border-top-color: #2167b1;
            box-shadow: 0 10px 25px rgba(33, 103, 177, 0.12);
        }

        .quick-card h4 {
            margin: 0 0 8px;
            color: #1261a8;
            font-size: 17px;
        }

        .quick-card p {
            margin: 0;
            color: #667085;
            font-size: 14px;
            line-height: 1.5;
        }

        /* =========================
           FOOTER
        ========================== */

        .dashboard-footer {
            text-align: center;
            color: #7a8798;
            font-size: 13px;
            padding: 20px 0;
            border-top: 1px solid #d7e9fa;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 800px) {

            .top-header {
                padding: 0 60px;
            }

            .university-title {
                font-size: 22px;
            }

            .header-logo {
                width: 50px;
                height: 50px;
            }

            .stats-grid,
            .quick-actions {
                grid-template-columns: 1fr;
            }

            .account-info {
                grid-template-columns: 1fr;
            }

            .welcome-card {
                padding: 25px;
            }

            .welcome-card h2 {
                font-size: 25px;
            }
        }

        @media (max-width: 500px) {

            .top-header {
                height: 70px;
            }

            .menu-button {
                left: 10px;
                top: 12px;
                width: 42px;
                height: 42px;
            }

            .header-brand {
                gap: 8px;
            }

            .header-logo {
                width: 42px;
                height: 42px;
            }

            .university-title {
                font-size: 15px;
            }

            .main-content {
                padding: 25px 15px 40px;
            }

            .welcome-card {
                padding: 20px;
            }

            .welcome-actions {
                flex-direction: column;
            }

            .primary-button,
            .secondary-button {
                text-align: center;
                width: 100%;
            }
        }
    </style>


    <div class="dashboard-wrapper">

        <!-- =========================
             HEADER
        ========================== -->

        <header class="top-header">

            <button
                class="menu-button"
                onclick="toggleMenu()"
                type="button">
                ☰
            </button>

            <div class="header-brand">

                <img
                    src="{{ url('/images/logos/logo3.jpg') }}"
                    alt="UDOM Logo"
                    class="header-logo"
                >

                <h1 class="university-title">
                    THE UNIVERSITY OF DODOMA
                </h1>

            </div>

        </header>


        <!-- =========================
             SIDE MENU
        ========================== -->

        <aside class="side-menu" id="sideMenu">

            <div class="menu-title">
                Main Menu
            </div>

            <a
                href="{{ route('dashboard') }}"
                class="menu-link active">
                🏠 Dashboard
            </a>

            <a
                href="{{ route('students.index') }}"
                class="menu-link">
                👨‍🎓 Students
            </a>

            <a
                href="{{ route('students.create') }}"
                class="menu-link">
                ➕ Add Student
            </a>

            <a
                href="{{ route('profile.edit') }}"
                class="menu-link">
                👤 Profile
            </a>

            <form
                method="POST"
                action="{{ route('logout') }}">

                @csrf

                <button
                    type="submit"
                    class="menu-logout">
                    🚪 Logout
                </button>

            </form>

        </aside>


        <!-- OVERLAY -->

        <div
            class="menu-overlay"
            id="menuOverlay"
            onclick="closeMenu()">
        </div>


        <!-- =========================
             MAIN CONTENT
        ========================== -->

        <main class="main-content">

            <!-- WELCOME -->

            <section class="welcome-card">

                <h2>
                    Welcome, {{ Auth::user()->name }}
                </h2>

                <p>
                    Welcome to the Student Management System.
                    Manage student information, view records and perform
                    student-related activities from your dashboard.
                </p>

                <div class="welcome-actions">

                    <a
                        href="{{ route('students.index') }}"
                        class="primary-button">
                        View Students
                    </a>

                    <a
                        href="{{ route('students.create') }}"
                        class="secondary-button">
                        Add Student
                    </a>

                </div>

            </section>


            <!-- STATISTICS -->

            <section class="stats-grid">

                <div class="stat-card">

                    <div class="stat-label">
                        Total Students
                    </div>

                    <div class="stat-number">
                        {{ \App\Models\Student::count() }}
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-label">
                        Male Students
                    </div>

                    <div class="stat-number">
                        {{ \App\Models\Student::where('gender', 'Male')->count() }}
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-label">
                        Female Students
                    </div>

                    <div class="stat-number">
                        {{ \App\Models\Student::where('gender', 'Female')->count() }}
                    </div>

                </div>

            </section>


            <!-- MY ACCOUNT -->

            <section class="account-card">

                <h3>
                    My Account
                </h3>

                <p>
                    Manage your account information and security settings.
                </p>

                <div class="account-info">

                    <div class="account-item">

                        <span>
                            Full Name
                        </span>

                        <strong>
                            {{ Auth::user()->name }}
                        </strong>

                    </div>


                    <div class="account-item">

                        <span>
                            Email Address
                        </span>

                        <strong>
                            {{ Auth::user()->email }}
                        </strong>

                    </div>

                </div>

                <a
                    href="{{ route('profile.edit') }}"
                    class="primary-button">
                    Update Profile
                </a>

            </section>


            <!-- QUICK ACTIONS -->

            <section>

                <h3 class="section-title">
                    Quick Actions
                </h3>

                <div class="quick-actions">

                    <a
                        href="{{ route('students.index') }}"
                        class="quick-card">

                        <h4>
                            👨‍🎓 Students
                        </h4>

                        <p>
                            View and manage all registered students.
                        </p>

                    </a>


                    <a
                        href="{{ route('students.create') }}"
                        class="quick-card">

                        <h4>
                            ➕ Add Student
                        </h4>

                        <p>
                            Register a new student in the system.
                        </p>

                    </a>


                    <a
                        href="{{ route('profile.edit') }}"
                        class="quick-card">

                        <h4>
                            👤 Profile
                        </h4>

                        <p>
                            Update your personal information and password.
                        </p>

                    </a>

                </div>

            </section>


            <!-- FOOTER -->

            <footer class="dashboard-footer">

                Student Management System —
                THE UNIVERSITY OF DODOMA
                © {{ date('Y') }}

            </footer>

        </main>

    </div>


    <!-- =========================
         JAVASCRIPT
    ========================== -->

    <script>

        function toggleMenu() {

            const menu = document.getElementById('sideMenu');
            const overlay = document.getElementById('menuOverlay');

            menu.classList.toggle('active');
            overlay.classList.toggle('active');

        }


        function closeMenu() {

            const menu = document.getElementById('sideMenu');
            const overlay = document.getElementById('menuOverlay');

            menu.classList.remove('active');
            overlay.classList.remove('active');

        }

    </script>

</x-app-layout>
