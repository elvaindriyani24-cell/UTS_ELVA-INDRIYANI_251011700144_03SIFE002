<!DOCTYPE html><html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Marketplace NFT')</title><link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

<style>
    body {
        background-color: #f4f0ff;
    }

    .navbar {
        background-color: #6f42c1;
    }

    .navbar-brand {
        color: white;
        font-weight: bold;
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
</style>

</head>
<body>@yield('content')

<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>