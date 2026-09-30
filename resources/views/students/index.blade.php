<x-app-layout>

    <div class="min-h-screen bg-gray-100 py-4">

        <div class="max-w-6xl mx-auto px-4">

            <!-- HEADER -->
            <div class="rounded-lg shadow-md mb-3"
                 style="background-color:#0b1f4b !important;">

                <div class="px-5 py-4 flex items-center justify-between">

                    <div class="flex items-center gap-3">

                        <div class="w-10 h-10 bg-white rounded-md flex items-center justify-center">
                            <i class="fa-solid fa-users text-blue-900 text-lg"></i>
                        </div>

                        <div>
                            <h1 class="text-2xl font-extrabold text-white">
                                Student List
                            </h1>

                            <p class="text-base font-semibold text-blue-100">
                                Manage registered students
                            </p>
                        </div>

                    </div>

                    <a href="{{ route('students.create') }}"
                       style="
                            display:inline-flex !important;
                            background-color:#ffffff !important;
                            color:#0b1f4b !important;
                            visibility:visible !important;
                            opacity:1 !important;
                       "
                       class="items-center gap-2 px-4 py-2 rounded-md font-extrabold text-sm shadow">

                        <i class="fa-solid fa-user-plus"></i>
                        Add Student

                    </a>

                </div>

            </div>


            <!-- SUCCESS MESSAGE -->
            @if(session('success'))

                <div class="mb-3 px-4 py-3 rounded-md bg-green-50 border border-green-200">

                    <div class="flex items-center gap-2">

                        <i class="fa-solid fa-circle-check text-green-600"></i>

                        <p class="text-sm font-bold text-green-700">
                            {{ session('success') }}
                        </p>

                    </div>

                </div>

            @endif


            <!-- TABLE CARD -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">

                <!-- TABLE TITLE -->
                <div class="px-5 py-3 border-b border-gray-200 flex items-center justify-between"
                     style="background:#f8fafc;">

                    <div>

                        <h2 class="text-xl font-extrabold text-gray-900">
                            Registered Students
                        </h2>

                        <p class="text-sm font-semibold text-gray-600">
                            List of all students in the system
                        </p>

                    </div>

                    <div class="text-center px-4 py-2 rounded-md"
                         style="background:#0b1f4b;">

                        <p class="text-xs font-bold text-blue-100">
                            TOTAL
                        </p>

                        <p class="text-xl font-extrabold text-white">
                            {{ $students->count() }}
                        </p>

                    </div>

                </div>


                @if($students->count() > 0)

                    <div class="overflow-x-auto">

                        <!-- FIXED TABLE -->
                        <table class="w-full table-fixed border-collapse">

                            <!-- COLUMN WIDTHS -->
                            <colgroup>

                                <col style="width:6%;">
                                <col style="width:23%;">
                                <col style="width:20%;">
                                <col style="width:18%;">
                                <col style="width:11%;">
                                <col style="width:22%;">

                            </colgroup>


                            <!-- TABLE HEADER -->
                            <thead>

                                <tr style="background:#0b1f4b;">

                                    <th class="px-3 py-3 text-center text-sm font-extrabold text-white">
                                        #
                                    </th>

                                    <th class="px-3 py-3 text-left text-sm font-extrabold text-white">
                                        Full Name
                                    </th>

                                    <th class="px-3 py-3 text-left text-sm font-extrabold text-white">
                                        Registration Number
                                    </th>

                                    <th class="px-3 py-3 text-left text-sm font-extrabold text-white">
                                        Course
                                    </th>

                                    <th class="px-3 py-3 text-center text-sm font-extrabold text-white">
                                        Gender
                                    </th>

                                    <th class="px-3 py-3 text-center text-sm font-extrabold text-white">
                                        Actions
                                    </th>

                                </tr>

                            </thead>


                            <!-- TABLE BODY -->
                            <tbody class="divide-y divide-gray-200">

                                @foreach($students as $student)

                                    <tr class="hover:bg-blue-50 transition">

                                        <!-- NUMBER -->
                                        <td class="px-3 py-3 text-center text-sm font-bold text-gray-700">
                                            {{ $loop->iteration }}
                                        </td>


                                        <!-- NAME -->
                                        <td class="px-3 py-3">

                                            <div class="flex items-center gap-2 min-w-0">

                                                <div class="w-8 h-8 flex-shrink-0 rounded-full flex items-center justify-center"
                                                     style="background:#dbeafe;">

                                                    <i class="fa-solid fa-user text-blue-900 text-sm"></i>

                                                </div>

                                                <span class="text-base font-extrabold text-gray-900 truncate">
                                                    {{ $student->full_name }}
                                                </span>

                                            </div>

                                        </td>


                                        <!-- REGISTRATION -->
                                        <td class="px-3 py-3 text-sm font-bold text-gray-700 truncate">
                                            {{ $student->registration_number }}
                                        </td>


                                        <!-- COURSE -->
                                        <td class="px-3 py-3 text-sm font-bold text-gray-700 truncate">
                                            {{ $student->course }}
                                        </td>


                                        <!-- GENDER -->
                                        <td class="px-3 py-3 text-center">

                                            @if($student->gender == 'Male')

                                                <span class="inline-flex items-center justify-center gap-1 px-3 py-1 rounded-full text-xs font-extrabold"
                                                      style="background:#dbeafe; color:#1e3a8a;">

                                                    <i class="fa-solid fa-mars"></i>
                                                    Male

                                                </span>

                                            @else

                                                <span class="inline-flex items-center justify-center gap-1 px-3 py-1 rounded-full text-xs font-extrabold"
                                                      style="background:#fce7f3; color:#9d174d;">

                                                    <i class="fa-solid fa-venus"></i>
                                                    Female

                                                </span>

                                            @endif

                                        </td>


                                        <!-- ACTIONS -->
                                        <td class="px-2 py-3">

                                            <div class="flex items-center justify-center gap-2 w-full">

                                                <!-- VIEW -->
                                                <a href="{{ route('students.show', $student->id) }}"
                                                   title="View Student"
                                                   style="
                                                        display:inline-flex !important;
                                                        background:#0b1f4b !important;
                                                        color:white !important;
                                                        visibility:visible !important;
                                                        opacity:1 !important;
                                                   "
                                                   class="w-10 h-9 flex-shrink-0 items-center justify-center rounded-md shadow">

                                                    <i class="fa-solid fa-eye"></i>

                                                </a>


                                                <!-- EDIT -->
                                                <a href="{{ route('students.edit', $student->id) }}"
                                                   title="Edit Student"
                                                   style="
                                                        display:inline-flex !important;
                                                        background:#2563eb !important;
                                                        color:white !important;
                                                        visibility:visible !important;
                                                        opacity:1 !important;
                                                   "
                                                   class="w-10 h-9 flex-shrink-0 items-center justify-center rounded-md shadow">

                                                    <i class="fa-solid fa-pen-to-square"></i>

                                                </a>


                                                <!-- DELETE -->
                                                <form action="{{ route('students.destroy', $student->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Are you sure you want to delete this student?');"
                                                      class="flex-shrink-0">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            title="Delete Student"
                                                            style="
                                                                display:inline-flex !important;
                                                                background:#dc2626 !important;
                                                                color:white !important;
                                                                visibility:visible !important;
                                                                opacity:1 !important;
                                                                border:none !important;
                                                                cursor:pointer !important;
                                                            "
                                                            class="w-10 h-9 items-center justify-center rounded-md shadow">

                                                        <i class="fa-solid fa-trash"></i>

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <!-- EMPTY STATE -->
                    <div class="px-6 py-10 text-center">

                        <div class="w-14 h-14 mx-auto rounded-full flex items-center justify-center mb-3"
                             style="background:#dbeafe;">

                            <i class="fa-solid fa-user-slash text-blue-900 text-xl"></i>

                        </div>

                        <h3 class="text-xl font-extrabold text-gray-800">
                            No Students Found
                        </h3>

                        <p class="text-sm font-semibold text-gray-500 mt-1">
                            There are currently no students registered.
                        </p>

                        <a href="{{ route('students.create') }}"
                           style="
                                display:inline-flex !important;
                                background:#0b1f4b !important;
                                color:white !important;
                                visibility:visible !important;
                                opacity:1 !important;
                           "
                           class="mt-4 items-center gap-2 px-5 py-2.5 rounded-md font-extrabold text-sm shadow">

                            <i class="fa-solid fa-user-plus"></i>
                            Add First Student

                        </a>

                    </div>

                @endif

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