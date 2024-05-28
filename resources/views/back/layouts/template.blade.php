<!doctype html>
<html lang="en" x-data="setup()">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/css/transitions.css', 'resources/js/app.js'])
    {{-- <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script> --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <style>
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30' fill='white'><path stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/></svg>");
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-700 font-sans">

    <!-- Top Navigation Bar -->
    <header class="bg-teal-800 fixed top-0 w-full flex items-center justify-between p-4 shadow-md z-50">
        <a class="text-teal-100 text-xl font-bold" href="/dashboard">Atqin Arabic</a>

        <input class="hidden md:block w-1/3 rounded bg-teal-700 text-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" placeholder="Search" aria-label="Search">
        <div class="flex items-center space-x-4">
            <a class="text-teal-100 text-sm lg:text-base" href="#">Sign out</a>
        </div>
    </header>
    
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            @include('back.layouts.sidebar')
            @yield('content')
        </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</body>

</html>
