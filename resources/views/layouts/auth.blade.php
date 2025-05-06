<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Winn Jobs</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
</head>
<body >
    <div class="auth-logo">
        <img src="{{ asset('images/wnn3.png') }}" alt="Winn Jobs Logo" height="50" width="180">    
    </div>

    @yield('content')
</body>
</html>