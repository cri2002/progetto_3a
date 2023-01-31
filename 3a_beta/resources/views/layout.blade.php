<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Roboto&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="bg-[#191919]">
    <div class="container mx-auto max-w-16 md:max-w-32 lg:max-w-48 h-screen font-family:Roboto">
        @yield('content')
    </div>
</body>

</html>
