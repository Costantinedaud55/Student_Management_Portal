<section>
    <header>
        <h2 class="profile-title">
            Profile Information
        </h2>

        <p class="profile-description">
            Update your account's profile information and email address.
        </p>
    </header>

    <form id="send-verification"
          method="post"
          action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post"
          action="{{ route('profile.update') }}"
          class="profile-form">

        @csrf
        @method('patch')

        <!-- NAME -->

        <div class="form-group">

            <label for="name">
                Name
            </label>

            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
            >

            @if ($errors->get('name'))

                <div class="error-message">
                    {{ $errors->first('name') }}
                </div>

            @endif

        </div>


        <!-- EMAIL -->

        <div class="form-group">

            <label for="email">
                Email Address
            </label>

            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
            >

            @if ($errors->get('email'))

                <div class="error-message">
                    {{ $errors->first('email') }}
                </div>

            @endif


            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div class="verification-box">

                    <p>
                        Your email address is unverified.
                    </p>

                    <button
                        form="send-verification"
                        class="verify-button"
                        type="submit">

                        Click here to re-send the verification email.

                    </button>

                    @if (session('status') === 'verification-link-sent')

                        <p class="success-message">
                            A new verification link has been sent to your email address.
                        </p>

                    @endif

                </div>

            @endif

        </div>


        <!-- BUTTONS -->

        <div class="form-actions">

            <button type="submit"
                    class="save-button">

                Save Changes

            </button>

            <a href="{{ route('dashboard') }}"
               class="cancel-button">

                Back to Dashboard

            </a>

        </div>


        @if (session('status') === 'profile-updated')

            <p class="updated-message">
                Profile updated successfully.
            </p>

        @endif

    </form>


    <style>

        /* ==================================
           PROFILE MAIN COLORS
        ================================== */

        .profile-title {
            margin: 0;

            font-size: 24px;

            font-weight: 700;

            color: #244967;
        }


        .profile-description {
            margin-top: 7px;

            font-size: 14px;

            line-height: 1.6;

            color: #71859a;
        }


        /* ==================================
           FORM
        ================================== */

        .profile-form {
            margin-top: 25px;
        }


        .form-group {
            margin-bottom: 22px;
        }


        .form-group label {
            display: block;

            margin-bottom: 8px;

            font-size: 14px;

            font-weight: 700;

            color: #36556f;
        }


        .form-group input {
            width: 100%;

            padding: 13px 15px;

            border: 1px solid #d7e5f1;

            border-radius: 8px;

            background: #fbfdff;

            color: #243b53;

            font-size: 15px;

            outline: none;

            transition: 0.25s ease;

            box-shadow:
                0 3px 12px rgba(35, 100, 160, 0.04);
        }


        .form-group input:focus {
            border-color: #8db9df;

            background: #ffffff;

            box-shadow:
                0 0 0 3px rgba(53, 115, 173, 0.10);
        }


        /* ==================================
           ERRORS
        ================================== */

        .error-message {
            margin-top: 6px;

            color: #c0392b;

            font-size: 13px;
        }


        /* ==================================
           VERIFICATION
        ================================== */

        .verification-box {
            margin-top: 12px;

            padding: 15px;

            border-radius: 8px;

            background: #f1f7fd;

            border: 1px solid #dceaf6;

            color: #60778d;
        }


        .verification-box p {
            margin: 0 0 8px;

            font-size: 13px;
        }


        .verify-button {
            border: none;

            background: transparent;

            color: #2167b1;

            padding: 0;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            text-decoration: underline;
        }


        /* ==================================
           BUTTONS
        ================================== */

        .form-actions {
            display: flex;

            align-items: center;

            gap: 12px;

            flex-wrap: wrap;

            margin-top: 25px;
        }


        .save-button {
            border: none;

            background: #2167b1;

            color: white;

            padding: 11px 22px;

            border-radius: 8px;

            font-size: 14px;

            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 7px 18px rgba(33, 103, 177, 0.18);

            transition: 0.3s ease;
        }


        .save-button:hover {
            background: #195893;

            transform: translateY(-1px);
        }


        .cancel-button {
            display: inline-block;

            text-decoration: none;

            background: #edf5ff;

            color: #2167b1;

            border: 1px solid #d5e6f6;

            padding: 10px 20px;

            border-radius: 8px;

            font-size: 14px;

            font-weight: 700;

            transition: 0.3s ease;
        }


        .cancel-button:hover {
            background: #dfeefc;

            transform: translateY(-1px);
        }


        /* ==================================
           SUCCESS
        ================================== */

        .updated-message {
            margin-top: 12px;

            color: #28784d;

            font-size: 13px;

            font-weight: 600;
        }


        .success-message {
            color: #28784d !important;

            margin-top: 10px !important;
        }


        /* ==================================
           MOBILE
        ================================== */

        @media (max-width: 600px) {

            .profile-title {
                font-size: 21px;
            }

            .form-actions {
                flex-direction: column;

                align-items: stretch;
            }

            .save-button,
            .cancel-button {
                width: 100%;

                text-align: center;
            }
        }

    </style>

</section>