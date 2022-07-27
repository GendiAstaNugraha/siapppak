<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SiapPpak!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url("images/bg.png");
            background-color: #fff;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

    </style>

</head>

<body class="antialiased">
    @include('app.navbar')
    <main class="py-4">
        @yield('content')
    </main>
</body>

<footer class="footer"
style="width: 100%;
height: 50px;
padding-left: 10px;
padding-right: 10px;
line-height: 50px;
color: #fff;
bottom: 0px;">
    <p class="text-secondary">
        Copyright © <script>
            document.write(new Date().getFullYear())
        </script> Soft by Siap Ppak!.
    </p>
</footer>

@include('captcha')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>
