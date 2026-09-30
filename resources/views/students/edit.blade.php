```blade
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
                            Edit Student
                        </h1>

                        <p class="text-blue-100 mt-2">
                            Update the student's information below.
                        </p>
                    </div>

                    <!-- STUDENT LIST BUTTON -->
                    <a
                        href="{{ route('students.index') }}"
                        class="inline-flex items-center justify-center gap-2 bg-white text-blue-800 hover:bg-blue-50 px-6 py-3 rounded-xl font-bold shadow transition"
                    >
                        ← Student List
                    </a>

                </div>

            </div>


            <!-- FORM CARD -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">

                <!-- CARD HEADER -->
                <div class="px-8 py-6 border-b border-gray-200">

                    <h2 class="text-2xl font-black text-blue-950">
                        Student Information
                    </h2>

                    <p class="text-gray-500 mt-1">
                        Update the student's details and save the changes.
                    </p>

                </div>


                <!-- ============================= -->
                <!-- UPDATE FORM -->
                <!-- ============================= -->

                <form
                    action="{{ route('students.update', $student->id) }}"
                    method="POST"
                    class="p-8"
                >

                    @csrf

                    @method('PUT')


                    <!-- ERROR MESSAGE -->
                    @if ($errors->any())

                        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-xl p-5">

                            <h3 class="font-bold mb-2">
                                Please correct the following errors:
                            </h3>

                            <ul class="list-disc ml-5">

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <!-- FORM FIELDS -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


                        <!-- FULL NAME -->
                        <div class="md:col-span-2">

                            <label
                                for="full_name"
                                class="block text-sm font-bold text-gray-700 mb-2"
                            >
                                Full Name
                            </label>

                            <input
                                type="text"
                                name="full_name"
                                id="full_name"
                                value="{{ old('full_name', $student->full_name) }}"
                                placeholder="Enter student's full name"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:border-blue-600 focus:ring-blue-600"
                            >

                            @error('full_name')

                                <p class="text-red-600 text-sm font-semibold mt-2">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        <!-- REGISTRATION NUMBER -->
                        <div>

                            <label
                                for="registration_number"
                                class="block text-sm font-bold text-gray-700 mb-2"
                            >
                                Registration Number
                            </label>

                            <input
                                type="text"
                                name="registration_number"
                                id="registration_number"
                                value="{{ old('registration_number', $student->registration_number) }}"
                                placeholder="e.g. UDOM/2026/0001"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:border-blue-600 focus:ring-blue-600"
                            >

                            @error('registration_number')

                                <p class="text-red-600 text-sm font-semibold mt-2">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        <!-- COURSE -->
                        <div>

                            <label
                                for="course"
                                class="block text-sm font-bold text-gray-700 mb-2"
                            >
                                Course
                            </label>

                            <input
                                type="text"
                                name="course"
                                id="course"
                                value="{{ old('course', $student->course) }}"
                                placeholder="e.g. Business Information Systems"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:border-blue-600 focus:ring-blue-600"
                            >

                            @error('course')

                                <p class="text-red-600 text-sm font-semibold mt-2">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        <!-- GENDER -->
                        <div>

                            <label
                                for="gender"
                                class="block text-sm font-bold text-gray-700 mb-2"
                            >
                                Gender
                            </label>

                            <select
                                name="gender"
                                id="gender"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:border-blue-600 focus:ring-blue-600"
                            >

                                <option value="">
                                    Select Gender
                                </option>

                                <option
                                    value="Male"
                                    {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}
                                >
                                    Male
                                </option>

                                <option
                                    value="Female"
                                    {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}
                                >
                                    Female
                                </option>

                            </select>

                            @error('gender')

                                <p class="text-red-600 text-sm font-semibold mt-2">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>

                    </div>


                    <!-- INFORMATION BOX -->
                    <div class="mt-8 bg-blue-50 border border-blue-100 rounded-xl p-5">

                        <div class="flex gap-3">

                            <div class="w-10 h-10 rounded-lg bg-blue-700 text-white flex items-center justify-center font-bold">
                                i
                            </div>

                            <div>

                                <h3 class="font-bold text-blue-900">
                                    Updating Student Record
                                </h3>

                                <p class="text-sm text-blue-800 mt-1">
                                    Check the information carefully before saving
                                    the updated student record.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ================================= -->
                    <!-- UPDATE AND CANCEL BUTTONS -->
                    <!-- ================================= -->

                    <div
                        class="mt-8 flex flex-col sm:flex-row gap-4"
                        style="display: flex !important; visibility: visible !important; opacity: 1 !important;"
                    >

                        <!-- UPDATE STUDENT BUTTON -->
                        <button
                            type="submit"
                            name="update_student"
                            style="display: inline-flex !important; visibility: visible !important; opacity: 1 !important;"
                            class="items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white font-bold px-8 py-4 rounded-xl shadow-lg transition cursor-pointer"
                        >

                            <span class="text-xl">
                                ✓
                            </span>

                            <span>
                                Update Student
                            </span>

                        </button>


                        <!-- CANCEL BUTTON -->
                        <a
                            href="{{ route('students.index') }}"
                            style="display: inline-flex !important; visibility: visible !important; opacity: 1 !important;"
                            class="items-center justify-center gap-2 bg-gray-500 hover:bg-gray-600 text-white font-bold px-8 py-4 rounded-xl shadow-lg transition"
                        >
                            Cancel
                        </a>

                    </div>


                </form>

            </div>

        </div>

    </div>

</x-app-layout>
```
