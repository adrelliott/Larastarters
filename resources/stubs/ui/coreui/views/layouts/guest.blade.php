<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.2/dist/css/coreui.min.css" rel="stylesheet">
</head>
<body>

<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.2/dist/js/coreui.bundle.min.js"></script>
</body>
</html>