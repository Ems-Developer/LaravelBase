<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- reset.css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/the-new-css-reset@1.11.0/css/reset.min.css">

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    {{-- jquery plugin tableFilter --}}
    <script src="https://www.cyokodog.net/jquery.ex-table-filter/jquery.ex-table-filter.js"></script>

    {{-- jquery plugin tableSorter --}}
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/js/jquery.tablesorter.min.js"></script>

    {{-- bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    <title></title>
</head>

<body>
    {{ $slot }}
</body>

</html>
