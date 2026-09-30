<x-app-layout>

    <div class="min-h-screen bg-gray-100 py-4">

        <div class="max-w-2xl mx-auto px-4">

            <!-- DARK BLUE HEADER -->
            <div class="rounded-lg shadow-md mb-3"
                 style="background-color:#0b1f4b !important;">

                <div class="px-5 py-4 flex items-center justify-between">

                    <div class="flex items-center gap-3">

                        <div class="w-10 h-10 bg-white rounded-md flex items-center justify-center">
                            <i class="fa-solid fa-user-plus text-blue-900 text-lg"></i>
                        </div>

                        <div>
                            <h1 class="text-2xl font-extrabold text-white leading-tight">
                                Add New Student
                            </h1>

                            <p class="text-base font-semibold text-blue-100">
                                Student Registration
                            </p>
                        </div>

                    </div>

                    <a href="{{ route('students.index') }}"
                       style="
                            display:inline-flex !important;
                            background-color:#ffffff !important;
                            color:#0b1f4b !important;
                            visibility:visible !important;
                            opacity:1 !important;
                       "
                       class="items-center gap-2 px-4 py-2 rounded-md font-extrabold text-sm shadow">

                        <i class="fa-solid fa-users"></i>
                        Students

                    </a>

                </div>
            </div>


            <!-- FORM CARD -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">

                <!-- CARD TITLE -->
                <div class="px-5 py-3 border-b border-gray-200"
                     style="background:#f8fafc;">

                    <h2 class="text-xl font-extrabold text-gray-900">
                        Student Information
                    </h2>

                    <p class="text-sm font-semibold text-gray-600">
                        Enter student details below
                    </p>

                </div>


                <form action="{{ route('students.store') }}"
                      method="POST"
                      class="px-5 py-4">

                    @csrf


                    <!-- ERRORS -->
                    @if ($errors->any())

                        <div class="mb-4 bg-red-50 border border-red-200 rounded-md px-4 py-2">

                            <p class="font-bold text-red-700 text-sm">
                                Please correct the following errors:
                            </p>

                            <ul class="list-disc ml-5 text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>

                    @endif


                    <!-- ROW 1 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- FULL NAME -->
                        <div>

                            <label for="full_name"
                                   class="block text-base font-extrabold text-gray-800 mb-1">

                                <i class="fa-solid fa-user text-blue-900 mr-1"></i>
                                Full Name

                            </label>

                            <input
                                type="text"
                                id="full_name"
                                name="full_name"
                                value="{{ old('full_name') }}"
                                placeholder="Enter full name"
                                required
                                class="w-full h-10 px-3 text-base font-semibold text-gray-800 bg-white border border-gray-300 rounded-md focus:border-blue-800 focus:ring-2 focus:ring-blue-100 outline-none"
                            >

                            @error('full_name')
                                <p class="text-xs font-semibold text-red-600 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        <!-- REGISTRATION -->
                        <div>

                            <label for="registration_number"
                                   class="block text-base font-extrabold text-gray-800 mb-1">

                                <i class="fa-solid fa-id-card text-blue-900 mr-1"></i>
                                Registration Number

                            </label>

                            <input
                                type="text"
                                id="registration_number"
                                name="registration_number"
                                value="{{ old('registration_number') }}"
                                placeholder="UD/2024/0001"
                                required
                                class="w-full h-10 px-3 text-base font-semibold text-gray-800 bg-white border border-gray-300 rounded-md focus:border-blue-800 focus:ring-2 focus:ring-blue-100 outline-none"
                            >

                            @error('registration_number')
                                <p class="text-xs font-semibold text-red-600 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>


                    <!-- ROW 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">

                        <!-- COURSE -->
                        <div>

                            <label for="course"
                                   class="block text-base font-extrabold text-gray-800 mb-1">

                                <i class="fa-solid fa-graduation-cap text-blue-900 mr-1"></i>
                                Course

                            </label>

                            <input
                                type="text"
                                id="course"
                                name="course"
                                value="{{ old('course') }}"
                                placeholder="Enter course"
                                required
                                class="w-full h-10 px-3 text-base font-semibold text-gray-800 bg-white border border-gray-300 rounded-md focus:border-blue-800 focus:ring-2 focus:ring-blue-100 outline-none"
                            >

                            @error('course')
                                <p class="text-xs font-semibold text-red-600 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        <!-- GENDER -->
                        <div>

                            <label for="gender"
                                   class="block text-base font-extrabold text-gray-800 mb-1">

                                <i class="fa-solid fa-venus-mars text-blue-900 mr-1"></i>
                                Gender

                            </label>

                            <select
                                id="gender"
                                name="gender"
                                required
                                class="w-full h-10 px-3 text-base font-semibold text-gray-800 bg-white border border-gray-300 rounded-md focus:border-blue-800 focus:ring-2 focus:ring-blue-100 outline-none"
                            >

                                <option value="">Select Gender</option>

                                <option value="Male"
                                    {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                    Male
                                </option>

                                <option value="Female"
                                    {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                    Female
                                </option>

                            </select>

                            @error('gender')
                                <p class="text-xs font-semibold text-red-600 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>


                    <!-- SMALL INFORMATION BAR -->
                    <div class="mt-3 px-3 py-2 rounded-md"
                         style="background:#eff6ff; border:1px solid #bfdbfe;">

                        <p class="text-sm font-bold text-blue-900">

                            <i class="fa-solid fa-circle-info mr-1"></i>

                            Please make sure all student information is correct.

                        </p>

                    </div>


                    <!-- BUTTONS -->
                    <div class="flex justify-end gap-3 mt-4">

                        <!-- CANCEL -->
                        <a href="{{ route('students.index') }}"
                           style="
                                display:inline-flex !important;
                                background-color:#6b7280 !important;
                                color:white !important;
                                visibility:visible !important;
                                opacity:1 !important;
                                position:relative !important;
                                z-index:9999 !important;
                           "
                           class="items-center justify-center gap-2 px-5 py-2.5 rounded-md font-extrabold text-base shadow">

                            <i class="fa-solid fa-xmark"></i>
                            Cancel

                        </a>


                        <!-- SAVE -->
                        <button
                            type="submit"
                            name="save_student"
                            style="
                                display:inline-flex !important;
                                background-color:#0b1f4b !important;
                                color:white !important;
                                visibility:visible !important;
                                opacity:1 !important;
                                position:relative !important;
                                z-index:9999 !important;
                                border:none !important;
                                cursor:pointer !important;
                            "
                            class="items-center justify-center gap-2 px-6 py-2.5 rounded-md font-extrabold text-base shadow"
                        >

                            <i class="fa-solid fa-floppy-disk"></i>
                            Save Student

                        </button>

                    </div>

                </form>

            </div>


            <!-- FOOTER -->
            <div class="text-center mt-2">

                <p class="text-sm font-bold text-gray-500">

                    The University of Dodoma
                    <span class="mx-1">•</span>
                    Student Management System

                </p>

            </div>

        </div>

    </div>

</x-app-layout>