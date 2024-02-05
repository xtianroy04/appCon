<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/graduation.png') }}" type="image/x-icon">
    <title>
        @yield('title') Student Information System
    </title>
    @vite('resources/css/app.css')

    <style>
        .rotate-90 {
            transform: rotate(90deg);
        }

        .transition {
            transition: transform 0.3s ease;
        }

        ::-webkit-scrollbar {
                width: .5rem;
                height: .5rem;
            }
            ::-webkit-scrollbar-thumb {
                background: rgba(0,0,0,.15);
            }
            ::-webkit-scrollbar-thumb:hover {
                background: rgba(0,0,0,.3);
            }
    </style>
</head>
<body class="bg-gray-100 font-sans" x-data="{ open: false }">

    @yield('content')

</body>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</html>
