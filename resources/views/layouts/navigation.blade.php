<nav class="bg-blue-900 shadow-lg">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center h-20">

            <!-- LOGO -->
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3">

                <img src="/images/logos/logo3.jpg"
                     class="w-14 h-14 rounded-lg bg-white p-1"
                     alt="UDOM Logo">

                <div class="text-white">

                    <h1 class="text-xl font-bold">
                        THE UNIVERSITY OF DODOMA
                    </h1>

                    <p class="text-sm text-blue-200">
                        Student Management System
                    </p>

                </div>

            </a>

            <!-- MENU -->
            <div class="flex items-center gap-5">

                <a href="{{ route('dashboard') }}"
                   class="text-white hover:text-blue-200 font-semibold">
                    <i class="fa-solid fa-house mr-1"></i>
                    Dashboard
                </a>

                <a href="{{ route('students.index') }}"
                   class="text-white hover:text-blue-200 font-semibold">
                    <i class="fa-solid fa-users mr-1"></i>
                    Students
                </a>

                <a href="{{ route('students.create') }}"
                   class="bg-white text-blue-900 px-4 py-2 rounded-lg font-bold hover:bg-blue-50">
                    <i class="fa-solid fa-user-plus mr-1"></i>
                    Add Student
                </a>

                <div class="flex items-center gap-2 border-l border-blue-700 pl-4">

                    <div class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center">
                        <i class="fa-solid fa-user text-white"></i>
                    </div>

                    <div class="text-white">
                        <div class="font-semibold text-sm">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="text-xs text-blue-200">
                            Administrator
                        </div>
                    </div>

                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-semibold">
                        <i class="fa-solid fa-right-from-bracket mr-1"></i>
                        Logout
                    </button>
                </form>

            </div>

        </div>

    </div>

</nav>