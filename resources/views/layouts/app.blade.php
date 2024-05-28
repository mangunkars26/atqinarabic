<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/transitions.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.css">

    <title>{{ $title }}</title>

</head>

<body class="page-transition">

    <div>
        <button id="scrollButton"
            class="fixed bottom-20 right-10 bg-green-500 text-white px-4 py-2 rounded-full shadow-md hidden">
            <i class="fas fa-arrow-up">
              Ke Atas
            </i>
        </button>
    </div>
</body>
</script>

</html>
