<x-app-layout>

    <div class="min-h-screen bg-gray-100 py-8">

        <div class="max-w-5xl mx-auto px-6 lg:px-8">

            <!-- PAGE HEADER -->
            <div class="bg-blue-900 rounded-xl shadow-lg px-8 py-6 mb-6">

                <div class="flex items-center gap-4">

                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-user text-blue-900 text-2xl"></i>
                    </div>

                    <div>
                        <h1 class="text-2xl md:text-3xl font-black text-white">
                            My Profile
                        </h1>

                        <p class="text-blue-100 mt-1 font-semibold">
                            Manage your account information
                        </p>
                    </div>

                </div>

            </div>


            <!-- SUCCESS MESSAGE -->
            @if (session('status') === 'profile-updated')

                <div class="bg-green-100 border border-green-300 text-green-800 px-5 py-4 rounded-lg mb-6 font-semibold">
                    <i class="fa-solid fa-circle-check mr-2"></i>
                    Profile information updated successfully.
                </div>

            @endif


            <!-- PROFILE INFORMATION -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">

                <div class="border-b border-gray-200 px-8 py-5">

                    <h2 class="text-xl font-black text-blue-900">
                        Profile Information
                    </h2>

                    <p class="text-gray-500 text-sm font-medium mt-1">
                        Update your name and email address.
                    </p>

                </div>


                <form
                    action="{{ route('profile.update') }}"
                    method="POST"
                    class="p-8"
                >

                    @csrf
                    @method('PATCH')


                    <!-- NAME -->
                    <div class="mb-6">

                        <label
                            for="name"
                            class="block text-sm font-black text-gray-800 mb-2"
                        >
                            Full Name
                        </label>

                        <div class="relative">

                            <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-blue-700"></i>

                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name', $user->name) }}"
                                required
                                autofocus
                                autocomplete="name"
                                class="w-full h-12 border border-gray-300 rounded-lg pl-11 pr-4 text-gray-800 font-medium focus:border-blue-700 focus:ring-blue-200"
                            >

                        </div>

                        @if ($errors->get('name'))

                            <p class="text-red-600 text-sm font-semibold mt-2">
                                {{ $errors->first('name') }}
                            </p>

                        @endif

                    </div>


                    <!-- EMAIL -->
                    <div class="mb-6">

                        <label
                            for="email"
                            class="block text-sm font-black text-gray-800 mb-2"
                        >
                            Email Address
                        </label>

                        <div class="relative">

                            <i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-blue-700"></i>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email', $user->email) }}"
                                required
                                autocomplete="username"
                                class="w-full h-12 border border-gray-300 rounded-lg pl-11 pr-4 text-gray-800 font-medium focus:border-blue-700 focus:ring-blue-200"
                            >

                        </div>

                        @if ($errors->get('email'))

                            <p class="text-red-600 text-sm font-semibold mt-2">
                                {{ $errors->first('email') }}
                            </p>

                        @endif


                        <!-- EMAIL VERIFICATION -->
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                            <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">

                                <p class="text-sm text-yellow-800 font-semibold">
                                    Your email address is not verified.
                                </p>

                                <form
                                    method="POST"
                                    action="{{ route('verification.send') }}"
                                    class="mt-2"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="text-blue-700 font-black text-sm underline"
                                    >
                                        Click here to resend the verification email.
                                    </button>

                                </form>

                                @if (session('status') === 'verification-link-sent')

                                    <p class="mt-2 text-sm text-green-700 font-bold">
                                        A new verification link has been sent to your email address.
                                    </p>

                                @endif

                            </div>

                        @endif

                    </div>


                    <!-- BUTTONS -->
                    <div class="flex items-center justify-between gap-4 pt-4 border-t border-gray-200">

                        <a
                            href="{{ route('dashboard') }}"
                            class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-gray-200 text-gray-800 font-black hover:bg-gray-300 transition"
                        >
                            <i class="fa-solid fa-arrow-left mr-2"></i>
                            Back
                        </a>


                        <button
                            type="submit"
                            class="inline-flex items-center justify-center px-7 py-3 rounded-lg bg-blue-900 text-white font-black hover:bg-blue-700 transition shadow-md"
                        >
                            <i class="fa-solid fa-floppy-disk mr-2"></i>
                            Save Changes
                        </button>

                    </div>

                </form>

            </div>


            <!-- UPDATE PASSWORD -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">

                <div class="border-b border-gray-200 px-8 py-5">

                    <h2 class="text-xl font-black text-blue-900">
                        Update Password
                    </h2>

                    <p class="text-gray-500 text-sm font-medium mt-1">
                        Make sure your account uses a strong password.
                    </p>

                </div>


                <form
                    method="POST"
                    action="{{ route('password.update') }}"
                    class="p-8"
                >

                    @csrf
                    @method('PUT')


                    <!-- CURRENT PASSWORD -->
                    <div class="mb-6">

                        <label
                            for="current_password"
                            class="block text-sm font-black text-gray-800 mb-2"
                        >
                            Current Password
                        </label>

                        <div class="relative">

                            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-blue-700"></i>

                            <input
                                id="current_password"
                                name="current_password"
                                type="password"
                                autocomplete="current-password"
                                class="w-full h-12 border border-gray-300 rounded-lg pl-11 pr-12 text-gray-800 focus:border-blue-700 focus:ring-blue-200"
                            >

                            <button
                                type="button"
                                onclick="togglePassword('current_password', 'currentEye')"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-blue-700"
                            >
                                <i
                                    id="currentEye"
                                    class="fa-solid fa-eye"
                                ></i>
                            </button>

                        </div>

                        @if ($errors->get('current_password'))

                            <p class="text-red-600 text-sm font-semibold mt-2">
                                {{ $errors->first('current_password') }}
                            </p>

                        @endif

                    </div>


                    <!-- NEW PASSWORD -->
                    <div class="mb-6">

                        <label
                            for="password"
                            class="block text-sm font-black text-gray-800 mb-2"
                        >
                            New Password
                        </label>

                        <div class="relative">

                            <i class="fa-solid fa-key absolute left-4 top-1/2 -translate-y-1/2 text-blue-700"></i>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="new-password"
                                class="w-full h-12 border border-gray-300 rounded-lg pl-11 pr-12 text-gray-800 focus:border-blue-700 focus:ring-blue-200"
                            >

                            <button
                                type="button"
                                onclick="togglePassword('password', 'passwordEye')"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-blue-700"
                            >
                                <i
                                    id="passwordEye"
                                    class="fa-solid fa-eye"
                                ></i>
                            </button>

                        </div>

                        @if ($errors->get('password'))

                            <p class="text-red-600 text-sm font-semibold mt-2">
                                {{ $errors->first('password') }}
                            </p>

                        @endif

                    </div>


                    <!-- CONFIRM PASSWORD -->
                    <div class="mb-6">

                        <label
                            for="password_confirmation"
                            class="block text-sm font-black text-gray-800 mb-2"
                        >
                            Confirm New Password
                        </label>

                        <div class="relative">

                            <i class="fa-solid fa-key absolute left-4 top-1/2 -translate-y-1/2 text-blue-700"></i>

                            <input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                autocomplete="new-password"
                                class="w-full h-12 border border-gray-300 rounded-lg pl-11 pr-12 text-gray-800 focus:border-blue-700 focus:ring-blue-200"
                            >

                            <button
                                type="button"
                                onclick="togglePassword('password_confirmation', 'confirmPasswordEye')"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-blue-700"
                            >
                                <i
                                    id="confirmPasswordEye"
                                    class="fa-solid fa-eye"
                                ></i>
                            </button>

                        </div>

                        @if ($errors->get('password_confirmation'))

                            <p class="text-red-600 text-sm font-semibold mt-2">
                                {{ $errors->first('password_confirmation') }}
                            </p>

                        @endif

                    </div>


                    <!-- UPDATE PASSWORD BUTTON -->
                    <div class="flex justify-end pt-4 border-t border-gray-200">

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center px-7 py-3 rounded-lg bg-blue-900 text-white font-black hover:bg-blue-700 transition shadow-md"
                        >
                            <i class="fa-solid fa-key mr-2"></i>
                            Update Password
                        </button>

                    </div>

                </form>

            </div>


            <!-- DELETE ACCOUNT -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">

                <div class="border-b border-gray-200 px-8 py-5">

                    <h2 class="text-xl font-black text-red-700">
                        Delete Account
                    </h2>

                    <p class="text-gray-500 text-sm font-medium mt-1">
                        Permanently delete your account and all associated data.
                    </p>

                </div>


                <div class="p-8">

                    <form
                        method="POST"
                        action="{{ route('profile.destroy') }}"
                        onsubmit="return confirm('Are you sure you want to permanently delete your account?');"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-red-600 text-white font-black hover:bg-red-700 transition shadow-md"
                        >
                            <i class="fa-solid fa-trash mr-2"></i>
                            Delete Account
                        </button>

                    </form>

                </div>

            </div>


            <!-- FOOTER -->
            <div class="text-center pb-6">

                <p class="text-sm text-gray-500 font-semibold">
                    The University of Dodoma • Student Management System
                </p>

            </div>

        </div>

    </div>


    <!-- FONT AWESOME -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <!-- PASSWORD TOGGLE -->
    <script>

        function togglePassword(inputId, iconId) {

            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

            if (input.type === "password") {

                input.type = "text";

                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");

            } else {

                input.type = "password";

                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");

            }

        }

    </script>

</x-app-layout>