
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>UDOM SMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>

        /*
        ==========================================
        GENERAL PAGE SETTINGS
        ==========================================
        */

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        body {
            background: #f3f4f6;
        }


        /*
        ==========================================
        BUTTON FIX
        ==========================================
        */

        button[type="submit"] {
            display: inline-flex !important;
            visibility: visible !important;
            opacity: 1 !important;
            position: relative !important;
            z-index: 9999 !important;
        }


        /*
        ==========================================
        FORM BUTTON FIX
        ==========================================
        */

        form button {
            visibility: visible !important;
            opacity: 1 !important;
        }


        /*
        ==========================================
        LINK FIX
        ==========================================
        */

        a {
            position: relative;
        }

    </style>

</head>


<body>

    <main>

        {{ $slot }}

    </main>

</body>

</html>

