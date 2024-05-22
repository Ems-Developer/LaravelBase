<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- reset.css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/the-new-css-reset@1.11.0/css/reset.min.css">

    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])

    <title></title>
</head>

<body>
    <div class="container border">
        <div class="my-4">{{ $slot }}</div>
    </div>
</body>

</html>
