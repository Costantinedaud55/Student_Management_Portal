<x-app-layout>

    <div class="min-h-screen bg-gray-100 py-8">

        <div class="max-w-5xl mx-auto px-6 lg:px-8">

            <!-- PAGE HEADER -->

            <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-2xl shadow-lg p-7 mb-7">

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                    <div>

                        <p class="text-blue-200 text-sm font-bold uppercase tracking-wider">
                            University Student Management System
                        </p>

                        <h1 class="text-4xl font-black text-white mt-1">
                            Student Details
                        </h1>

                        <p class="text-blue-100 mt-2">
                            View complete information about this student.
                        </p>

                    </div>

                    <a
                        href="{{ route('students.index') }}"
                        class="inline-flex items-center justify-center gap-2 bg-white text-blue-800 hover:bg-blue-50 px-6 py-3 rounded-xl font-bold shadow transition"
                    >
                        ← Student List
                    </a>

                </div>

            </div>


            <!-- STUDENT PROFILE CARD -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">

                <!-- PROFILE HEADER -->

                <div class="bg-blue-50 px-8 py-8 border-b border-blue-100">

                    <div class="flex flex-col sm:flex-row items-center sm:items-center gap-5">

                        <!-- INITIAL -->

                        <div class="w-24 h-24 rounded-full bg-blue-700 text-white flex items-center justify-center text-4xl font-black shadow-lg">

                            {{ strtoupper(substr($student->full_name, 0, 1)) }}

                        </div>


                        <!-- NAME -->

                        <div class="text-center sm:text-left">

                            <p class="text-sm text-blue-600 font-bold uppercase tracking-wide">
                                Student
                            </p>

                            <h2 class="text-3xl font-black text-blue-950 mt-1">
                                {{ $student->full_name }}
                            </h2>

                            <p class="text-gray-500 mt-1">
                                {{ $student->registration_number }}
                            </p>

                        </div>

                    </div>

                </div>


                <!-- STUDENT INFORMATION -->

                <div class="p-8">

                    <h3 class="text-2xl font-black text-blue-950 mb-6">
                        Student Information
                    </h3>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">


                        <!-- ID -->

                        <div class="bg-gray-50 border border-gray-200 rounded-xl p-5">

                            <p class="text-sm text-gray-500 font-semibold">
                                Student ID
                            </p>

                            <p class="text-xl font-black text-gray-800 mt-1">
                                {{ $student->id }}
                            </p>

                        </div>


                        <!-- FULL NAME -->

                        <div class="bg-gray-50 border border-gray-200 rounded-xl p-5">

                            <p class="text-sm text-gray-500 font-semibold">
                                Full Name
                            </p>

                            <p class="text-xl font-black text-gray-800 mt-1">
                                {{ $student->full_name }}
                            </p>

                        </div>


                        <!-- REGISTRATION NUMBER -->

                        <div class="bg-blue-50 border border-blue-100 rounded-xl p-5">

                            <p class="text-sm text-blue-600 font-semibold">
                                Registration Number
                            </p>

                            <p class="text-xl font-black text-blue-900 mt-1">
                                {{ $student->registration_number }}
                            </p>

                        </div>


                        <!-- COURSE -->

                        <div class="bg-blue-50 border border-blue-100 rounded-xl p-5">

                            <p class="text-sm text-blue-600 font-semibold">
                                Course
                            </p>

                            <p class="text-xl font-black text-blue-900 mt-1">
                                {{ $student->course }}
                            </p>

                        </div>


                        <!-- GENDER -->

                        <div class="bg-gray-50 border border-gray-200 rounded-xl p-5">

                            <p class="text-sm text-gray-500 font-semibold">
                                Gender
                            </p>

                            <div class="mt-2">

                                @if ($student->gender === 'Male')

                                    <span class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-700 px-4 py-2 rounded-lg font-bold">
                                        👨 Male
                                    </span>

                                @else

                                    <span class="inline-flex items-center gap-2 bg-pink-100 text-pink-700 px-4 py-2 rounded-lg font-bold">
                                        👩 Female
                                    </span>

                                @endif

                            </div>

                        </div>


                        <!-- CREATED DATE -->

                        <div class="bg-gray-50 border border-gray-200 rounded-xl p-5">

                            <p class="text-sm text-gray-500 font-semibold">
                                Registered On
                            </p>

                            <p class="text-xl font-black text-gray-800 mt-1">
                                {{ $student->created_at ? $student->created_at->format('d M Y') : 'N/A' }}
                            </p>

                        </div>

                    </div>


                    <!-- ACTION BUTTONS -->

                    <div class="flex flex-col sm:flex-row gap-3 mt-8">

                        <!-- EDIT -->

                        <a
                            href="{{ route('students.edit', $student->id) }}"
                            class="inline-flex items-center justify-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold px-7 py-3 rounded-xl shadow transition"
                        >
                            ✏
                            Edit Student
                        </a>


                        <!-- DELETE -->

                        <form
                            action="{{ route('students.destroy', $student->id) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this student?');"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-red-600 hover:bg-red-700 text-white font-bold px-7 py-3 rounded-xl shadow transition"
                            >
                                🗑
                                Delete Student
                            </button>

                        </form>


                        <!-- BACK -->

                        <a
                            href="{{ route('students.index') }}"
                            class="inline-flex items-center justify-center gap-2 bg-gray-500 hover:bg-gray-600 text-white font-bold px-7 py-3 rounded-xl shadow transition"
                        >
                            ← Back
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>